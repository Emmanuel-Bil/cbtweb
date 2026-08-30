<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Church;
use App\Models\ContactMessage;
use App\Models\Event;
use App\Models\News;
use App\Models\Zone;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'newsCount' => News::count(),
            'eventsCount' => Event::count(),
            'zonesCount' => Zone::count(),
            'churchesCount' => Church::count(),
            'unreadMessages' => ContactMessage::where('is_read', false)->count(),
        ]);
    }
}
