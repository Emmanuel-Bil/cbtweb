<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'firstname' => 'nullable|string|max:255',
            'email' => 'required|email',
            'country' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:50',
            'message' => 'required|string',
        ]);

        ContactMessage::create($data);

        return back()->with('status', 'Votre message a bien été envoyé. Merci de nous avoir contactés !');
    }
}
