<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::withCount('photos')->orderBy('order')->get();

        return view('gallery.index', compact('galleries'));
    }

    public function show(Gallery $gallery)
    {
        $gallery->load('photos');

        return view('gallery.show', compact('gallery'));
    }
}
