<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\NewsletterSubscriber;

class ContactMessageController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::orderByDesc('created_at')->paginate(20);
        $subscribers = NewsletterSubscriber::orderByDesc('created_at')->get();

        return view('admin.messages.index', compact('messages', 'subscribers'));
    }

    public function show(ContactMessage $message)
    {
        $message->update(['is_read' => true]);

        return view('admin.messages.show', compact('message'));
    }

    public function destroy(ContactMessage $message)
    {
        $message->delete();

        return redirect()->route('admin.messages.index')->with('status', 'Message supprimé.');
    }
}
