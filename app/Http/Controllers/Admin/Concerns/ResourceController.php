<?php

namespace App\Http\Controllers\Admin\Concerns;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Generic CRUD controller driven by a $fields definition, shared by the
 * ~15 simple flat admin resources (zones, news, events, gallery items...).
 * Keeps the admin panel consistent without hand-writing near-identical
 * controllers/views for every resource.
 */
abstract class ResourceController extends Controller
{
    protected string $model;
    protected string $routePrefix;
    protected string $title;
    protected string $orderColumn = 'id';
    protected string $orderDirection = 'desc';

    /**
     * @return array<int, array{name:string,label:string,type:string,required?:bool,options?:array}>
     */
    abstract protected function fields(): array;

    public function index(Request $request)
    {
        $items = $this->model::orderBy($this->orderColumn, $this->orderDirection)->paginate(20);

        return view('admin.crud.index', [
            'items' => $items,
            'fields' => $this->fields(),
            'routePrefix' => $this->routePrefix,
            'title' => $this->title,
        ]);
    }

    public function create()
    {
        return view('admin.crud.form', [
            'item' => new $this->model(),
            'fields' => $this->fields(),
            'routePrefix' => $this->routePrefix,
            'title' => $this->title,
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);
        $data = $this->handleUploads($request, $data);

        $this->model::create($data);

        return redirect()->route("{$this->routePrefix}.index")->with('status', ucfirst($this->title) . ' créé(e) avec succès.');
    }

    public function edit($id)
    {
        $item = $this->model::findOrFail($id);

        return view('admin.crud.form', [
            'item' => $item,
            'fields' => $this->fields(),
            'routePrefix' => $this->routePrefix,
            'title' => $this->title,
        ]);
    }

    public function update(Request $request, $id)
    {
        $item = $this->model::findOrFail($id);
        $data = $this->validated($request, $item);
        $data = $this->handleUploads($request, $data, $item);

        $item->update($data);

        return redirect()->route("{$this->routePrefix}.index")->with('status', ucfirst($this->title) . ' mis(e) à jour avec succès.');
    }

    public function destroy($id)
    {
        $item = $this->model::findOrFail($id);
        $item->delete();

        return redirect()->route("{$this->routePrefix}.index")->with('status', ucfirst($this->title) . ' supprimé(e).');
    }

    protected function validated(Request $request, $item = null): array
    {
        $rules = [];

        foreach ($this->fields() as $field) {
            $rule = [];
            $rule[] = ($field['required'] ?? false) ? 'required' : 'nullable';

            $rule[] = match ($field['type']) {
                'image', 'file' => $item ? 'file' : (($field['required'] ?? false) ? 'file' : 'nullable|file'),
                'number' => 'numeric',
                'checkbox' => 'boolean',
                'email' => 'email',
                'date', 'datetime' => 'date',
                default => 'string',
            };

            if ($field['type'] === 'checkbox') {
                $rules[$field['name']] = 'boolean';
                continue;
            }

            $rules[$field['name']] = implode('|', array_unique($rule));
        }

        $data = $request->validate($rules);

        foreach ($this->fields() as $field) {
            if ($field['type'] === 'checkbox') {
                $data[$field['name']] = $request->boolean($field['name']);
            }
        }

        return $data;
    }

    protected function handleUploads(Request $request, array $data, $item = null): array
    {
        foreach ($this->fields() as $field) {
            if (! in_array($field['type'], ['image', 'file'], true)) {
                continue;
            }

            if ($request->hasFile($field['name'])) {
                if ($item && $item->{$field['name']}) {
                    Storage::disk('public')->delete($item->{$field['name']});
                }
                $data[$field['name']] = $request->file($field['name'])->store('uploads/' . Str::slug($this->title), 'public');
            } else {
                unset($data[$field['name']]);
            }
        }

        return $data;
    }
}
