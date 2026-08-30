<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Event;
use App\Models\KeyDate;
use App\Models\News;
use App\Models\Page;

class HomeController extends Controller
{
    public function index()
    {
        $featuredNews = News::where('is_featured', true)->latest('published_at')->first()
            ?? News::latest('published_at')->first();

        return view('home', [
            'featuredNews' => $featuredNews,
            'recentNews' => News::when($featuredNews, fn ($q) => $q->where('id', '!=', $featuredNews->id))
                ->latest('published_at')->limit(3)->get(),
            'upcomingEvent' => Event::where('starts_at', '>=', now())->orderBy('starts_at')->first(),
            'keyDates' => KeyDate::orderBy('order')->limit(6)->get(),
            'activities' => Activity::orderBy('order')->get(),
            'homePage' => Page::where('slug', 'accueil')->first(),
            'presidentPage' => Page::where('slug', 'mot-president')->first(),
        ]);
    }
}
