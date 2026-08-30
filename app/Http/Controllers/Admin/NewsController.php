<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ResourceController;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends ResourceController
{
    protected string $model = News::class;
    protected string $routePrefix = 'admin.news';
    protected string $title = 'actualité';

    protected function fields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Titre', 'type' => 'text', 'required' => true],
            ['name' => 'excerpt', 'label' => 'Résumé', 'type' => 'textarea'],
            ['name' => 'content', 'label' => 'Contenu', 'type' => 'textarea', 'required' => true],
            ['name' => 'image', 'label' => 'Image', 'type' => 'image'],
            ['name' => 'published_at', 'label' => 'Date de publication', 'type' => 'datetime'],
            ['name' => 'is_featured', 'label' => 'À la une', 'type' => 'checkbox'],
        ];
    }

    public function store(Request $request)
    {
        $request->merge(['slug' => Str::slug($request->input('title')) . '-' . Str::random(5)]);

        return parent::store($request);
    }

    protected function validated(Request $request, $item = null): array
    {
        $data = parent::validated($request, $item);
        $data['slug'] = $request->input('slug', $item?->slug);

        return $data;
    }
}
