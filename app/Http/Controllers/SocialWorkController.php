<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\SocialWork;

class SocialWorkController extends Controller
{
    public function index()
    {
        $works = SocialWork::orderBy('order')->get()->groupBy(fn ($w) => $w->category ?? 'Autres');
        $page = Page::where('slug', 'oeuvres-missions')->first();

        return view('social-works.index', compact('works', 'page'));
    }
}
