<?php

namespace App\Http\Controllers;

use App\Models\LibraryItem;

class LibraryController extends Controller
{
    public function index()
    {
        $items = LibraryItem::orderByDesc('created_at')->get()->groupBy(fn ($i) => $i->category ?? 'Autres');

        return view('library.index', compact('items'));
    }
}
