@extends('layouts.admin')

@section('title', 'Message de ' . $message->name)

@section('content')
    <div class="max-w-2xl bg-white rounded-xl ring-1 ring-slate-100 p-8">
        <dl class="grid grid-cols-2 gap-4 mb-6 text-sm">
            <div><dt class="text-xs text-slate-400 uppercase">Nom</dt><dd class="text-blue-950 font-semibold">{{ $message->name }} {{ $message->firstname }}</dd></div>
            <div><dt class="text-xs text-slate-400 uppercase">Email</dt><dd class="text-blue-950 font-semibold">{{ $message->email }}</dd></div>
            <div><dt class="text-xs text-slate-400 uppercase">Pays</dt><dd class="text-blue-950">{{ $message->country ?: '—' }}</dd></div>
            <div><dt class="text-xs text-slate-400 uppercase">Téléphone</dt><dd class="text-blue-950">{{ $message->phone ?: '—' }}</dd></div>
            <div><dt class="text-xs text-slate-400 uppercase">Reçu le</dt><dd class="text-blue-950">{{ $message->created_at->format('d/m/Y H:i') }}</dd></div>
        </dl>
        <div class="border-t border-slate-100 pt-6">
            <p class="text-xs text-slate-400 uppercase mb-2">Message</p>
            <p class="text-slate-700 whitespace-pre-line">{{ $message->message }}</p>
        </div>
        <div class="mt-8 flex items-center gap-4">
            <a href="mailto:{{ $message->email }}" class="px-5 py-2.5 rounded-full bg-sky-600 text-white text-sm font-semibold hover:bg-sky-700">Répondre par email</a>
            <a href="{{ route('admin.messages.index') }}" class="text-sm text-slate-500 hover:underline">Retour à la liste</a>
        </div>
    </div>
@endsection
