@extends('layouts.app')

@section('title', 'Téléchargements — CBT')

@section('content')
    <x-page-hero title="Téléchargements" parent="Ressources" />

    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        @if($downloads->isEmpty())
            <p class="text-center text-slate-400">Aucun document disponible pour le moment.</p>
        @else
            @foreach($downloads as $category => $group)
                <h2 class="text-lg font-bold text-blue-950 mb-4">{{ $category }}</h2>
                <div class="space-y-3 mb-10">
                    @foreach($group as $item)
                        <a href="{{ \Illuminate\Support\Facades\Storage::url($item->file) }}" target="_blank" class="flex items-center justify-between gap-4 rounded-xl ring-1 ring-slate-100 p-5 hover:shadow-md transition">
                            <div>
                                <h3 class="font-semibold text-blue-950">{{ $item->title }}</h3>
                                @if($item->description)<p class="text-sm text-slate-500 mt-1">{{ $item->description }}</p>@endif
                            </div>
                            <span class="shrink-0 text-sky-600 text-sm font-semibold">Télécharger &darr;</span>
                        </a>
                    @endforeach
                </div>
            @endforeach
        @endif
    </section>
@endsection
