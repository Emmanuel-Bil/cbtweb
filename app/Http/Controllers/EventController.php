<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\KeyDate;

class EventController extends Controller
{
    public function index()
    {
        $keyDates = KeyDate::orderBy('order')->get()->groupBy('year');

        $now = now();
        $upcomingEvents = Event::with('zone')
            ->whereRaw('COALESCE(ends_at, starts_at) >= ?', [$now])
            ->orderBy('starts_at')
            ->get();
        $pastEvents = Event::with('zone')
            ->whereRaw('COALESCE(ends_at, starts_at) < ?', [$now])
            ->orderByDesc('starts_at')
            ->get();

        return view('events.index', compact('keyDates', 'upcomingEvents', 'pastEvents'));
    }
}
