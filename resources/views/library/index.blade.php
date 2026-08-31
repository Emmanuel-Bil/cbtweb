@extends('layouts.app')

@section('title', 'Bibliothèque numérique — CBT')

@section('content')
    <x-page-hero title="Bibliothèque numérique" parent="Ressources" />

    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        @if($items->isEmpty())
            <p class="text-center text-slate-400">La bibliothèque numérique sera bientôt disponible.</p>
        @else
            @foreach($items as $category => $group)
                <h2 class="flex items-center gap-3 text-lg font-bold text-blue-950 mb-4">
                    <span class="w-1.5 h-6 rounded-full bg-gradient-to-b from-sky-400 to-blue-600"></span>
                    {{ $category }}
                </h2>
                <div class="space-y-3 mb-10">
                    @foreach($group as $item)
                        <div class="cbt-card p-5">
                            <h3 class="font-semibold text-blue-950">{{ $item->title }}</h3>
                            @if($item->description)<p class="text-sm text-slate-500 mt-1">{{ $item->description }}</p>@endif
                            @if($item->file)
                                <a href="{{ \Illuminate\Support\Facades\Storage::url($item->file) }}" target="_blank" class="text-sky-600 text-xs font-semibold hover:underline">Télécharger &darr;</a>
                            @elseif($item->external_link)
                                <a href="{{ $item->external_link }}" target="_blank" class="text-sky-600 text-xs font-semibold hover:underline">Consulter &rarr;</a>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endforeach
        @endif
    </section>
@endsection
