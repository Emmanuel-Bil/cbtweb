<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index()
    {
        $newsletters = Newsletter::orderByDesc('published_at')->paginate(12);

        return view('newsletters.index', compact('newsletters'));
    }

    public function subscribe(Request $request)
    {
        $data = $request->validate(['email' => 'required|email']);

        NewsletterSubscriber::firstOrCreate($data);

        return back()->with('status', 'Merci pour votre abonnement à notre newsletter !');
    }
}
