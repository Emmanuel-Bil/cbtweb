@extends('layouts.admin')

@section('title', 'Tableau de bord')

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
        <div class="bg-white rounded-xl ring-1 ring-slate-100 p-6">
            <p class="text-3xl font-extrabold text-blue-950">{{ $newsCount }}</p>
            <p class="text-sm text-slate-500 mt-1">Actualités</p>
        </div>
        <div class="bg-white rounded-xl ring-1 ring-slate-100 p-6">
            <p class="text-3xl font-extrabold text-blue-950">{{ $eventsCount }}</p>
            <p class="text-sm text-slate-500 mt-1">Événements</p>
        </div>
        <div class="bg-white rounded-xl ring-1 ring-slate-100 p-6">
            <p class="text-3xl font-extrabold text-blue-950">{{ $zonesCount }}</p>
            <p class="text-sm text-slate-500 mt-1">Zones</p>
        </div>
        <div class="bg-white rounded-xl ring-1 ring-slate-100 p-6">
            <p class="text-3xl font-extrabold text-blue-950">{{ $churchesCount }}</p>
            <p class="text-sm text-slate-500 mt-1">Églises</p>
        </div>
        <div class="bg-white rounded-xl ring-1 ring-slate-100 p-6">
            <p class="text-3xl font-extrabold text-sky-600">{{ $unreadMessages }}</p>
            <p class="text-sm text-slate-500 mt-1">Messages non lus</p>
        </div>
    </div>

    <div class="mt-10 bg-white rounded-xl ring-1 ring-slate-100 p-8">
        <h2 class="font-bold text-blue-950 mb-2">Bienvenue dans l'administration du site de la Convention Baptiste du Togo</h2>
        <p class="text-sm text-slate-500">Utilisez le menu à gauche pour gérer le contenu du site : pages, actualités, événements, galerie, annuaire des églises, réglages, etc. Toute modification est immédiatement visible sur le site public.</p>
    </div>
@endsection
