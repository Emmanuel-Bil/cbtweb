@extends('layouts.app')

@section('title', 'Contact — CBT')

@section('content')
    <x-page-hero title="Contact" />

    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16 grid grid-cols-1 lg:grid-cols-2 gap-14">
        <div>
            <p class="cbt-eyebrow mb-3">Nous joindre</p>
            <h2 class="text-xl font-bold text-blue-950 mb-8">Informations de contact</h2>
            <div class="space-y-4">
                <div class="cbt-card p-5">
                    <p class="text-xs font-semibold uppercase text-sky-600 mb-1">Email</p>
                    <p class="text-slate-600 text-sm">{{ \App\Models\Setting::get('emails', 'convention.togo@gmail.com') }}</p>
                </div>
                <div class="cbt-card p-5">
                    <p class="text-xs font-semibold uppercase text-sky-600 mb-1">Téléphone</p>
                    <p class="text-slate-600 text-sm">{{ \App\Models\Setting::get('phones', '(+228) 91 12 72 92') }}</p>
                </div>
                <div class="cbt-card p-5">
                    <p class="text-xs font-semibold uppercase text-sky-600 mb-1">Adresse</p>
                    <p class="text-slate-600 text-sm">{{ \App\Models\Setting::get('address', '657 Bd de la Kara, Tokoin Doumasséssé — 08 B.P. 80754 Lomé') }}</p>
                </div>
            </div>
        </div>

        <div>
            <p class="cbt-eyebrow mb-3">Écrivez-nous</p>
            <h2 class="text-xl font-bold text-blue-950 mb-8">Envoyez-nous un message</h2>
            @if ($errors->any())
                <div class="mb-4 text-sm text-red-600">{{ $errors->first() }}</div>
            @endif
            <form method="POST" action="{{ route('contact.store') }}" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <input type="text" name="name" required placeholder="Nom" value="{{ old('name') }}" class="w-full rounded-lg ring-1 ring-slate-200 px-4 py-2.5 text-sm transition focus:ring-2 focus:ring-sky-500 focus:outline-none">
                    <input type="text" name="firstname" placeholder="Prénom" value="{{ old('firstname') }}" class="w-full rounded-lg ring-1 ring-slate-200 px-4 py-2.5 text-sm transition focus:ring-2 focus:ring-sky-500 focus:outline-none">
                </div>
                <input type="email" name="email" required placeholder="Email" value="{{ old('email') }}" class="w-full rounded-lg ring-1 ring-slate-200 px-4 py-2.5 text-sm transition focus:ring-2 focus:ring-sky-500 focus:outline-none">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <input type="text" name="country" placeholder="Pays" value="{{ old('country') }}" class="w-full rounded-lg ring-1 ring-slate-200 px-4 py-2.5 text-sm transition focus:ring-2 focus:ring-sky-500 focus:outline-none">
                    <input type="text" name="phone" placeholder="Numéro de téléphone" value="{{ old('phone') }}" class="w-full rounded-lg ring-1 ring-slate-200 px-4 py-2.5 text-sm transition focus:ring-2 focus:ring-sky-500 focus:outline-none">
                </div>
                <textarea name="message" required rows="5" placeholder="Message" class="w-full rounded-lg ring-1 ring-slate-200 px-4 py-2.5 text-sm transition focus:ring-2 focus:ring-sky-500 focus:outline-none">{{ old('message') }}</textarea>
                <button type="submit" class="btn-primary">Envoyer le message</button>
            </form>
        </div>
    </section>
@endsection
