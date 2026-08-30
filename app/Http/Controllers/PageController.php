<?php

namespace App\Http\Controllers;

use App\Models\BureauMember;
use App\Models\ConfessionPoint;
use App\Models\HistoryEvent;
use App\Models\Page;

class PageController extends Controller
{
    public function motPresident()
    {
        $page = Page::where('slug', 'mot-president')->firstOrFail();

        return view('pages.mot-president', compact('page'));
    }

    public function histoire()
    {
        $page = Page::where('slug', 'notre-histoire')->first();
        $events = HistoryEvent::orderBy('order')->get();

        return view('pages.notre-histoire', compact('page', 'events'));
    }

    public function gouvernance()
    {
        $bureau = BureauMember::where('category', 'bureau')->orderBy('order')->get();
        $president = $bureau->first();
        $bureauRest = $bureau->slice(1);
        $directors = BureauMember::where('category', 'department_director')->orderBy('order')->get();
        $zoneModerators = BureauMember::where('category', 'zone_moderator')->orderBy('order')->get();

        return view('pages.organisation-gouvernance', compact('president', 'bureauRest', 'directors', 'zoneModerators'));
    }

    public function confessionFoi()
    {
        $points = ConfessionPoint::orderBy('order')->get();

        return view('pages.confession-foi', compact('points'));
    }

    public function missionValeurs()
    {
        $page = Page::where('slug', 'mission-valeurs')->first();

        return view('pages.mission-valeurs', compact('page'));
    }

    public function don()
    {
        $page = Page::where('slug', 'don')->first();

        return view('pages.don', compact('page'));
    }
}
