@extends('layouts.app')

@section('title', 'Convention Baptiste du Togo — Accueil')

@section('content')

    <section class="relative bg-blue-950">
        <div class="absolute inset-0">
            <img src="{{ asset('images/home-hero.jpeg') }}" alt="" class="w-full h-full object-cover opacity-40">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-950 via-blue-950/90 to-blue-950/40"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-28">
            <p class="text-sky-300 font-semibold tracking-wide mb-3">Présentation institutionnelle</p>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white max-w-2xl leading-tight">
                @if($upcomingEvent)
                    Prochains événements
                @else
                    Découvrez notre mission et notre vision
                @endif
            </h1>
            <p class="mt-4 text-blue-100 max-w-xl">
                @if($upcomingEvent)
                    {{ $upcomingEvent->title }} — {{ $upcomingEvent->starts_at->translatedFormat('d F Y') }}
                @else
                    Découvrez notre mission et notre vision.
                @endif
            </p>
            <div class="mt-8 flex flex-wrap gap-3">
                <a href="{{ route('evenements') }}" class="inline-flex items-center px-6 py-3 rounded-full bg-sky-600 text-white font-semibold hover:bg-sky-700 transition">Voir événements</a>
                <a href="{{ route('don') }}" class="inline-flex items-center px-6 py-3 rounded-full bg-white/10 text-white font-semibold ring-1 ring-white/30 hover:bg-white/20 transition">Faire un don</a>
            </div>
        </div>
    </section>

    @if($featuredNews)
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-12 relative z-10">
        <div class="bg-white rounded-2xl shadow-xl ring-1 ring-slate-100 p-6 sm:p-8 flex flex-col sm:flex-row items-start sm:items-center gap-6">
            <div class="shrink-0">
                <span class="inline-block px-3 py-1 rounded-full bg-sky-100 text-sky-700 text-xs font-bold uppercase">Actualités à la une</span>
            </div>
            <div class="flex-1">
                <h2 class="text-lg font-bold text-blue-950">{{ $featuredNews->title }}</h2>
                <p class="text-sm text-slate-500 mt-1">{{ \Illuminate\Support\Str::limit($featuredNews->excerpt, 140) }}</p>
            </div>
            <a href="{{ route('actualites.show', $featuredNews) }}" class="shrink-0 text-sky-600 font-semibold text-sm hover:underline">Lire la suite &rarr;</a>
        </div>
    </section>
    @endif

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="rounded-2xl bg-blue-950 text-white p-8">
            <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center text-2xl mb-4">📅</div>
            <h3 class="text-xl font-bold mb-2">Prochains événements</h3>
            <p class="text-blue-200 text-sm mb-6">Ne manquez pas nos activités.</p>
            <a href="{{ route('evenements') }}" class="inline-flex items-center px-5 py-2.5 rounded-full bg-sky-600 text-sm font-semibold hover:bg-sky-700">Voir événements</a>
        </div>
        <div class="rounded-2xl bg-sky-50 p-8">
            <div class="w-12 h-12 rounded-full bg-sky-100 flex items-center justify-center text-2xl mb-4">🎯</div>
            <h3 class="text-xl font-bold text-blue-950 mb-2">Mission</h3>
            <p class="text-slate-600 text-sm mb-6">Notre engagement pour la communauté.</p>
            <a href="{{ route('mission-valeurs') }}" class="inline-flex items-center px-5 py-2.5 rounded-full bg-blue-950 text-white text-sm font-semibold hover:bg-blue-900">Découvrir</a>
        </div>
        <div class="rounded-2xl bg-slate-50 p-8">
            <div class="w-12 h-12 rounded-full bg-slate-200 flex items-center justify-center text-2xl mb-4">⛪</div>
            <h3 class="text-xl font-bold text-blue-950 mb-2">Nos Zones & Églises</h3>
            <p class="text-slate-600 text-sm mb-6">Découvrez nos 17 zones et leurs modérateurs.</p>
            <a href="{{ route('zones') }}" class="inline-flex items-center px-5 py-2.5 rounded-full bg-blue-950 text-white text-sm font-semibold hover:bg-blue-900">Découvrir</a>
        </div>
    </section>

    @if($keyDates->isNotEmpty())
    <section class="bg-slate-50 py-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-extrabold text-blue-950 text-center">DATES UTILES {{ $keyDates->first()->year }}</h2>
            <div class="mt-8 grid grid-cols-2 sm:grid-cols-3 gap-4">
                @foreach($keyDates as $date)
                    <div class="bg-white rounded-xl p-4 shadow-sm ring-1 ring-slate-100 text-center">
                        <p class="text-sky-600 font-bold text-sm">{{ $date->label }}</p>
                        <p class="text-slate-500 text-xs mt-1">{{ $date->description }}</p>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-8">
                <a href="{{ route('evenements') }}" class="text-sky-600 font-semibold text-sm hover:underline">Voir toutes les dates &rarr;</a>
            </div>
        </div>
    </section>
    @endif

    @if($homePage?->body)
    <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-center">
        <h2 class="text-2xl font-extrabold text-blue-950 mb-4">Notre Mission</h2>
        <div class="prose prose-slate mx-auto text-slate-600">{!! $homePage->body !!}</div>
    </section>
    @endif

    @if($presidentPage)
    <section class="bg-blue-950 py-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-10 items-center">
            <div class="md:col-span-1 flex justify-center">
                <div class="w-56 h-56 sm:w-64 sm:h-64 rounded-full bg-sky-800 ring-4 ring-sky-600/40 overflow-hidden flex items-center justify-center">
                    @if($presidentPage->image)
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($presidentPage->image) }}" class="w-full h-full object-contain" alt="{{ $presidentPage->title }}">
                    @else
                        <span class="text-white text-6xl font-bold">CBT</span>
                    @endif
                </div>
            </div>
            <div class="md:col-span-2 text-blue-100">
                <p class="text-sky-400 font-semibold uppercase text-xs tracking-widest mb-2">Mot de bienvenue</p>
                <h2 class="text-2xl font-extrabold text-white mb-4">Gagner les peuples pour Christ et perfectionner les saints</h2>
                <p class="italic text-blue-200 mb-4">&laquo; La Convention Baptiste du Togo est née de la prière et du sacrifice d'hommes et de femmes animés par une seule passion : obéir au Seigneur Jésus-Christ et accomplir Sa mission au Togo. &raquo;</p>
                <p class="font-semibold text-white">{{ $presidentPage->title }}</p>
                <p class="text-sm text-blue-300 mb-4">{{ $presidentPage->subtitle }}</p>
                <a href="{{ route('mot-president') }}" class="inline-flex items-center px-5 py-2.5 rounded-full bg-sky-600 text-white text-sm font-semibold hover:bg-sky-700">Lire le mot du président au complet</a>
            </div>
        </div>
    </section>
    @endif

    @if($activities->isNotEmpty())
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <h2 class="text-2xl font-extrabold text-blue-950 text-center mb-10">Nos Activités</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            @foreach($activities as $activity)
                <div class="rounded-2xl overflow-hidden ring-1 ring-slate-100 hover:shadow-lg transition">
                    @if($activity->image)
                        <div class="h-40 overflow-hidden">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($activity->image) }}" class="w-full h-full object-cover" alt="{{ $activity->title }}">
                        </div>
                    @endif
                    <div class="p-8 text-center">
                        @if(!$activity->image)
                            <div class="w-14 h-14 mx-auto rounded-full bg-sky-100 flex items-center justify-center text-2xl mb-4">{{ $activity->icon ?: '✦' }}</div>
                        @endif
                        <h3 class="font-bold text-blue-950">{{ $activity->title }}</h3>
                        <p class="text-sm text-slate-500 mt-2">{{ $activity->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    @endif

    @if($recentNews->isNotEmpty())
    <section class="bg-slate-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-10">
                <h2 class="text-2xl font-extrabold text-blue-950">Dernières actualités</h2>
                <a href="{{ route('actualites') }}" class="text-sky-600 font-semibold text-sm hover:underline">Voir tout &rarr;</a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                @foreach($recentNews as $item)
                    <a href="{{ route('actualites.show', $item) }}" class="group block rounded-2xl overflow-hidden bg-white ring-1 ring-slate-100 hover:shadow-lg transition">
                        <div class="h-40 bg-sky-100 overflow-hidden">
                            @if($item->image)
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($item->image) }}" class="w-full h-full object-cover group-hover:scale-105 transition" alt="{{ $item->title }}">
                            @endif
                        </div>
                        <div class="p-5">
                            @if($item->published_at)
                                <p class="text-xs text-sky-600 font-semibold mb-1">{{ $item->published_at->translatedFormat('d F Y') }}</p>
                            @endif
                            <h3 class="font-bold text-blue-950 group-hover:text-sky-600 transition">{{ $item->title }}</h3>
                            <p class="text-sm text-slate-500 mt-2">{{ \Illuminate\Support\Str::limit($item->excerpt, 90) }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <section class="bg-sky-600 py-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-2 md:grid-cols-4 gap-8 text-center text-white">
            @foreach ([1,2,3,4] as $i)
                <div>
                    <p class="text-4xl font-extrabold">{{ \App\Models\Setting::get("stat_{$i}_value", '—') }}</p>
                    <p class="text-sky-100 text-sm mt-1">{{ \App\Models\Setting::get("stat_{$i}_label", '') }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-center">
        <h2 class="text-2xl font-extrabold text-blue-950 mb-3">Soutenez notre mission</h2>
        <p class="text-slate-500 max-w-2xl mx-auto mb-6">Votre contribution nous aide à étendre notre impact et soutenir davantage de familles.</p>
        <a href="{{ route('don') }}" class="inline-flex items-center px-6 py-3 rounded-full bg-sky-600 text-white font-semibold hover:bg-sky-700 transition">Faire un don maintenant</a>
    </section>

@endsection
