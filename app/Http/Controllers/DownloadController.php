<?php

namespace App\Http\Controllers;

use App\Models\Download;

class DownloadController extends Controller
{
    public function index()
    {
        $downloads = Download::orderByDesc('created_at')->get()->groupBy(fn ($d) => $d->category ?? 'Autres');

        return view('downloads.index', compact('downloads'));
    }
}
