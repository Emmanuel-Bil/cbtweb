<?php

namespace App\Http\Controllers;

use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::orderByDesc('published_at')->paginate(9);

        return view('videos.index', compact('videos'));
    }
}
