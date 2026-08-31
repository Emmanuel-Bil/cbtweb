@extends('layouts.app')

@section('title', 'Événements — CBT')

@section('content')
    <x-page-hero title="Evenements" parent="Actualités et médias" />

    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        @foreach($keyDates as $year => $dates)
            <h2 class="text-2xl font-extrabold text-blue-950 text-center mb-8">DATES UTILES {{ $year }}</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 mb-16">
                @foreach($dates as $date)
                    <div class="bg-sky-50 rounded-xl p-4 text-center">
                        <p class="text-sky-600 font-bold text-sm">{{ $date->label }}</p>
                        <p class="text-slate-500 text-xs mt-1">{{ $date->description }}</p>
                    </div>
                @endforeach
            </div>
        @endforeach

        <h2 class="text-2xl font-extrabold text-blue-950 text-center mb-8">Événements à venir</h2>
        @if($upcomingEvents->isEmpty())
            <p class="text-center text-slate-400 mb-16">Aucun événement à venir pour le moment.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-16">
                @foreach($upcomingEvents as $event)
                    @include('events.partials.card', ['event' => $event])
                @endforeach
            </div>
        @endif

        @if($pastEvents->isNotEmpty())
            <details class="group">
                <summary class="cursor-pointer list-none flex items-center justify-center gap-2 text-2xl font-extrabold text-blue-950 text-center mb-8">
                    Historique des événements
                    <svg class="w-5 h-5 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                </summary>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 opacity-75">
                    @foreach($pastEvents as $event)
                        @include('events.partials.card', ['event' => $event])
                    @endforeach
                </div>
            </details>
        @endif
    </section>
@endsection
