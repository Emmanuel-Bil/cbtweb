<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryPhoto;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::withCount('photos')->orderBy('order')->paginate(20);

        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.form', ['gallery' => new Gallery()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'cover_image' => 'nullable|image',
            'order' => 'nullable|numeric',
        ]);

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('uploads/galeries', 'public');
        }

        Gallery::create($data);

        return redirect()->route('admin.galleries.index')->with('status', 'Album créé avec succès.');
    }

    public function edit(Gallery $gallery)
    {
        $gallery->load('photos');

        return view('admin.galleries.form', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'cover_image' => 'nullable|image',
            'order' => 'nullable|numeric',
        ]);

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('uploads/galeries', 'public');
        }

        $gallery->update($data);

        return redirect()->route('admin.galleries.edit', $gallery)->with('status', 'Album mis à jour avec succès.');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return redirect()->route('admin.galleries.index')->with('status', 'Album supprimé.');
    }

    public function storePhoto(Request $request, Gallery $gallery)
    {
        $request->validate([
            'image' => 'required|image',
            'caption' => 'nullable|string',
        ]);

        GalleryPhoto::create([
            'gallery_id' => $gallery->id,
            'image' => $request->file('image')->store('uploads/galeries', 'public'),
            'caption' => $request->input('caption'),
        ]);

        return redirect()->route('admin.galleries.edit', $gallery)->with('status', 'Photo ajoutée.');
    }

    public function destroyPhoto(Gallery $gallery, GalleryPhoto $photo)
    {
        $photo->delete();

        return redirect()->route('admin.galleries.edit', $gallery)->with('status', 'Photo supprimée.');
    }
}
