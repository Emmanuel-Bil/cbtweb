@extends('layouts.app')

@section('title', 'Convention Baptiste du Togo — Accueil')

@section('content')

    <section class="relative bg-blue-950 overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('images/home-hero.jpeg') }}" alt="" class="w-full h-full object-cover opacity-40">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-950 via-blue-950/90 to-blue-950/40"></div>
        </div>
        <div class="absolute inset-0 bg-grid-pattern opacity-30"></div>
        <div class="absolute -top-20 -left-20 w-96 h-96 rounded-full bg-sky-500/20 blur-3xl animate-blob" aria-hidden="true"></div>
        <div class="absolute bottom-0 right-0 w-[28rem] h-[28rem] rounded-full bg-blue-500/20 blur-3xl animate-blob" style="animation-delay: -6s" aria-hidden="true"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-28 sm:py-32">
            <p class="cbt-eyebrow text-sky-300 mb-4">Présentation institutionnelle</p>
            <h1 class="text-4xl sm:text-6xl font-extrabold text-white max-w-2xl leading-tight tracking-tight">
                @if($upcomingEvent)
                    Prochains <span class="bg-gradient-to-r from-sky-300 to-sky-500 bg-clip-text text-transparent">événements</span>
                @else
                    Découvrez notre <span class="bg-gradient-to-r from-sky-300 to-sky-500 bg-clip-text text-transparent">mission</span> et notre vision
                @endif
            </h1>
            <p class="mt-5 text-blue-100 max-w-xl text-lg">
                @if($upcomingEvent)
                    {{ $upcomingEvent->title }} — {{ $upcomingEvent->starts_at->translatedFormat('d F Y') }}
                @else
                    Gagner les peuples pour Christ et perfectionner les saints.
                @endif
            </p>
            <div class="mt-10 flex flex-wrap gap-4">
                <a href="{{ route('evenements') }}" class="btn-primary">
                    Voir événements
                    <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd"/></svg>
                </a>
                <a href="{{ route('don') }}" class="btn-outline">Faire un don</a>
            </div>
        </div>
    </section>

    @if($featuredNews)
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-12 relative z-10">
        <div class="bg-white rounded-2xl shadow-xl ring-1 ring-slate-100 p-6 sm:p-8 flex flex-col sm:flex-row items-start sm:items-center gap-6 hover:shadow-2xl transition duration-300">
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
        <div class="group relative rounded-2xl bg-gradient-to-br from-blue-950 to-slate-900 text-white p-8 overflow-hidden transition duration-300 hover:-translate-y-1 hover:shadow-2xl hover:shadow-blue-950/30">
            <div class="absolute -top-8 -right-8 w-32 h-32 rounded-full bg-sky-500/20 blur-2xl transition group-hover:bg-sky-500/30"></div>
            <div class="relative w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center text-2xl mb-4">📅</div>
            <h3 class="relative text-xl font-bold mb-2">Prochains événements</h3>
            <p class="relative text-blue-200 text-sm mb-6">Ne manquez pas nos activités.</p>
            <a href="{{ route('evenements') }}" class="relative inline-flex items-center px-5 py-2.5 rounded-full bg-gradient-to-r from-sky-500 to-blue-600 text-sm font-semibold shadow-lg shadow-sky-600/20 hover:shadow-xl transition">Voir événements</a>
        </div>
        <div class="group rounded-2xl bg-sky-50 p-8 transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-sky-100">
            <div class="w-12 h-12 rounded-xl bg-sky-100 flex items-center justify-center text-2xl mb-4 transition group-hover:scale-110">🎯</div>
            <h3 class="text-xl font-bold text-blue-950 mb-2">Mission</h3>
            <p class="text-slate-600 text-sm mb-6">Notre engagement pour la communauté.</p>
            <a href="{{ route('mission-valeurs') }}" class="inline-flex items-center px-5 py-2.5 rounded-full bg-blue-950 text-white text-sm font-semibold hover:bg-blue-900 transition">Découvrir</a>
        </div>
        <div class="group rounded-2xl bg-slate-50 p-8 transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-slate-200">
            <div class="w-12 h-12 rounded-xl bg-slate-200 flex items-center justify-center text-2xl mb-4 transition group-hover:scale-110">⛪</div>
            <h3 class="text-xl font-bold text-blue-950 mb-2">Nos Zones & Églises</h3>
            <p class="text-slate-600 text-sm mb-6">Découvrez nos 17 zones et leurs modérateurs.</p>
            <a href="{{ route('zones') }}" class="inline-flex items-center px-5 py-2.5 rounded-full bg-blue-950 text-white text-sm font-semibold hover:bg-blue-900 transition">Découvrir</a>
        </div>
    </section>

    @if($keyDates->isNotEmpty())
    <section class="bg-slate-50 py-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="cbt-eyebrow justify-center mb-2">Calendrier</p>
            <h2 class="cbt-section-title text-center">DATES UTILES {{ $keyDates->first()->year }}</h2>
            <div class="mt-8 grid grid-cols-2 sm:grid-cols-3 gap-4">
                @foreach($keyDates as $date)
                    <div class="cbt-card p-4 text-center">
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
    <section class="relative bg-blue-950 py-16 overflow-hidden">
        <div class="absolute -bottom-24 -left-24 w-96 h-96 rounded-full bg-sky-500/10 blur-3xl" aria-hidden="true"></div>
        <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-10 items-center">
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
        <p class="cbt-eyebrow justify-center mb-2">Ce que nous faisons</p>
        <h2 class="cbt-section-title text-center mb-10">Nos Activités</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            @foreach($activities as $activity)
                <div class="cbt-card overflow-hidden group">
                    @if($activity->image)
                        <div class="h-40 overflow-hidden">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($activity->image) }}" class="w-full h-full object-cover transition duration-500 group-hover:scale-110" alt="{{ $activity->title }}">
                        </div>
                    @endif
                    <div class="p-8 text-center">
                        @if(!$activity->image)
                            <div class="w-14 h-14 mx-auto rounded-full bg-sky-100 flex items-center justify-center text-2xl mb-4 transition duration-300 group-hover:scale-110 group-hover:bg-sky-200">{{ $activity->icon ?: '✦' }}</div>
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
                <div>
                    <p class="cbt-eyebrow mb-2">À la une</p>
                    <h2 class="cbt-section-title">Dernières actualités</h2>
                </div>
                <a href="{{ route('actualites') }}" class="text-sky-600 font-semibold text-sm hover:underline">Voir tout &rarr;</a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                @foreach($recentNews as $item)
                    <a href="{{ route('actualites.show', $item) }}" class="cbt-card group block overflow-hidden">
                        <div class="h-40 bg-sky-100 overflow-hidden">
                            @if($item->image)
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($item->image) }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="{{ $item->title }}">
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

    <section class="relative bg-gradient-to-br from-sky-600 to-blue-700 py-16 overflow-hidden">
        <div class="absolute inset-0 bg-grid-pattern opacity-30"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-2 md:grid-cols-4 gap-8 text-center text-white">
            @foreach ([1,2,3,4] as $i)
                <div>
                    <p class="text-4xl sm:text-5xl font-extrabold tracking-tight">{{ \App\Models\Setting::get("stat_{$i}_value", '—') }}</p>
                    <p class="text-sky-100 text-sm mt-2">{{ \App\Models\Setting::get("stat_{$i}_label", '') }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="relative rounded-3xl bg-gradient-to-br from-blue-950 to-slate-900 px-6 sm:px-12 py-14 text-center overflow-hidden">
            <div class="absolute -top-16 -right-16 w-72 h-72 rounded-full bg-sky-500/20 blur-3xl animate-blob" aria-hidden="true"></div>
            <div class="absolute -bottom-16 -left-16 w-72 h-72 rounded-full bg-blue-500/20 blur-3xl animate-blob" style="animation-delay: -6s" aria-hidden="true"></div>
            <div class="relative">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-3">Soutenez notre mission</h2>
                <p class="text-blue-200 max-w-2xl mx-auto mb-8">Votre contribution nous aide à étendre notre impact et soutenir davantage de familles.</p>
                <a href="{{ route('don') }}" class="btn-primary">Faire un don maintenant</a>
            </div>
        </div>
    </section>

@endsection
