@extends('layouts.app')

@section('title', 'Zones — CBT')

@section('content')
    <x-page-hero title="Zones" parent="Nos églises et oeuvres" />

    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <p class="cbt-eyebrow justify-center mb-2">Nos zones</p>
        <h2 class="cbt-section-title text-center mb-8">Département des Zones — Année {{ date('Y') }}</h2>
        <div class="overflow-x-auto rounded-2xl ring-1 ring-slate-100 shadow-sm">
            <table class="min-w-full text-sm">
                <thead class="bg-slate-50 text-slate-500 uppercase text-xs">
                    <tr>
                        <th class="px-4 py-3 text-left">Zone</th>
                        <th class="px-4 py-3 text-left">Modérateur</th>
                        <th class="px-4 py-3 text-left">Téléphone</th>
                        <th class="px-4 py-3 text-left">Églises</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach($zones as $zone)
                        <tr class="transition hover:bg-sky-50">
                            <td class="px-4 py-3 font-semibold text-blue-950">{{ $zone->name }}</td>
                            <td class="px-4 py-3 text-slate-600">{{ $zone->moderator_name }}</td>
                            <td class="px-4 py-3 text-slate-500">{{ $zone->moderator_phone }}</td>
                            <td class="px-4 py-3 text-slate-500">{{ $zone->churches_count }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
