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

        <h2 class="text-2xl font-extrabold text-blue-950 text-center mb-8">Événements détaillés</h2>
        @if($events->isEmpty())
            <p class="text-center text-slate-400">Aucun événement à venir pour le moment.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                @foreach($events as $event)
                    <div class="rounded-2xl ring-1 ring-slate-100 overflow-hidden hover:shadow-lg transition">
                        @if($event->image)
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($event->image) }}" class="w-full h-40 object-cover" alt="{{ $event->title }}">
                        @endif
                        <div class="p-6">
                            <p class="text-xs text-sky-600 font-semibold mb-1">{{ $event->starts_at->translatedFormat('d F Y') }}@if($event->location) &middot; {{ $event->location }}@endif</p>
                            <h3 class="font-bold text-blue-950">{{ $event->title }}</h3>
                            <p class="text-sm text-slate-500 mt-2">{{ $event->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
@endsection
