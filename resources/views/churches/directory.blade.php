@extends('layouts.app')

@section('title', 'Annuaire par région — CBT')

@section('content')
    <x-page-hero title="Annuaire Region" parent="Nos églises et oeuvres" />

    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        @if($churches->isEmpty())
            <p class="text-center text-slate-400">L'annuaire des églises sera bientôt disponible. Contactez-nous pour plus d'informations.</p>
        @else
            <div class="space-y-10">
                @foreach($churches as $region => $group)
                    <div>
                        <h2 class="flex items-center gap-3 text-lg font-bold text-blue-950 mb-4">
                            <span class="w-1.5 h-6 rounded-full bg-gradient-to-b from-sky-400 to-blue-600"></span>
                            {{ $region }}
                        </h2>
                        <div class="overflow-x-auto rounded-2xl ring-1 ring-slate-100 shadow-sm">
                            <table class="min-w-full text-sm">
                                <thead class="bg-slate-50 text-slate-500 uppercase text-xs">
                                    <tr>
                                        <th class="px-4 py-3 text-left">Église</th>
                                        <th class="px-4 py-3 text-left">Ville</th>
                                        <th class="px-4 py-3 text-left">Zone</th>
                                        <th class="px-4 py-3 text-left">Pasteur</th>
                                        <th class="px-4 py-3 text-left">Téléphone</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100">
                                    @foreach($group as $church)
                                        <tr class="transition hover:bg-sky-50">
                                            <td class="px-4 py-3 font-semibold text-blue-950">{{ $church->name }}</td>
                                            <td class="px-4 py-3 text-slate-500">{{ $church->city }}</td>
                                            <td class="px-4 py-3 text-slate-500">{{ $church->zone?->name }}</td>
                                            <td class="px-4 py-3 text-slate-500">{{ $church->pastor_name }}</td>
                                            <td class="px-4 py-3 text-slate-500">{{ $church->phone }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
@endsection
