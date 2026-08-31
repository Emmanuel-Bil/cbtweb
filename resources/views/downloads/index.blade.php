@extends('layouts.app')

@section('title', 'Téléchargements — CBT')

@section('content')
    <x-page-hero title="Téléchargements" parent="Ressources" />

    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        @if($downloads->isEmpty())
            <p class="text-center text-slate-400">Aucun document disponible pour le moment.</p>
        @else
            @foreach($downloads as $category => $group)
                <h2 class="flex items-center gap-3 text-lg font-bold text-blue-950 mb-4">
                    <span class="w-1.5 h-6 rounded-full bg-gradient-to-b from-sky-400 to-blue-600"></span>
                    {{ $category }}
                </h2>
                <div class="space-y-3 mb-10">
                    @foreach($group as $item)
                        <a href="{{ \Illuminate\Support\Facades\Storage::url($item->file) }}" target="_blank" class="cbt-card group flex items-center justify-between gap-4 p-5">
                            <div>
                                <h3 class="font-semibold text-blue-950">{{ $item->title }}</h3>
                                @if($item->description)<p class="text-sm text-slate-500 mt-1">{{ $item->description }}</p>@endif
                            </div>
                            <span class="shrink-0 inline-flex items-center gap-1.5 text-sky-600 text-sm font-semibold">
                                Télécharger
                                <svg class="w-4 h-4 transition group-hover:translate-y-0.5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 3a.75.75 0 01.75.75v8.69l2.72-2.72a.75.75 0 111.06 1.06l-4 4a.75.75 0 01-1.06 0l-4-4a.75.75 0 111.06-1.06l2.72 2.72V3.75A.75.75 0 0110 3z" clip-rule="evenodd"/></svg>
                            </span>
                        </a>
                    @endforeach
                </div>
            @endforeach
        @endif
    </section>
@endsection
