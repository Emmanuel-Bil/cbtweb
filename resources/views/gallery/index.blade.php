@extends('layouts.app')

@section('title', 'Galerie photos — CBT')

@section('content')
    <x-page-hero title="Galerie" parent="Actualités et médias" />

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        @if($galleries->isEmpty())
            <p class="text-center text-slate-400">Aucun album pour le moment.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($galleries as $gallery)
                    <a href="{{ route('galerie.show', $gallery) }}" class="group block rounded-2xl overflow-hidden ring-1 ring-slate-100 hover:shadow-lg transition">
                        <div class="h-48 bg-sky-100 overflow-hidden">
                            @if($gallery->cover_image)
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($gallery->cover_image) }}" class="w-full h-full object-cover group-hover:scale-105 transition" alt="{{ $gallery->title }}">
                            @endif
                        </div>
                        <div class="p-5">
                            <h3 class="font-bold text-blue-950 group-hover:text-sky-600 transition">{{ $gallery->title }}</h3>
                            <p class="text-xs text-slate-400 mt-1">{{ $gallery->photos_count }} photo(s)</p>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif
    </section>
@endsection
