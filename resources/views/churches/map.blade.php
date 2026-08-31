@extends('layouts.app')

@section('title', 'Carte interactive des églises — CBT')

@push('head')
    @vite(['resources/js/map.js'])
@endpush

@section('content')
    <x-page-hero title="Carte interactive des églises" parent="Nos églises et oeuvres" />

    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        @if($churches->isEmpty())
            <p class="text-center text-slate-400">Les données de localisation des églises seront ajoutées prochainement. Contactez-nous pour plus d'informations.</p>
        @else
            <div id="churches-map"
                 class="w-full h-[32rem] rounded-2xl ring-1 ring-slate-100 shadow-sm z-0"
                 data-churches='{{ $churchesJson }}'
            ></div>
            <p class="text-center text-xs text-slate-400 mt-4">{{ $churches->count() }} église(s) localisée(s). D'autres seront ajoutées progressivement via l'espace d'administration.</p>
        @endif
    </section>
@endsection
