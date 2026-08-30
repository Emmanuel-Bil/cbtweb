<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\KeyDate;

class EventController extends Controller
{
    public function index()
    {
        $keyDates = KeyDate::orderBy('order')->get()->groupBy('year');
        $events = Event::orderBy('starts_at')->get();

        return view('events.index', compact('keyDates', 'events'));
    }
}
