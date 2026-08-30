@extends('layouts.app')

@section('title', $gallery->title . ' — CBT')

@section('content')
    <x-page-hero :title="$gallery->title" parent="Galerie" />

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        @if($gallery->photos->isEmpty())
            <p class="text-center text-slate-400">Aucune photo dans cet album pour le moment.</p>
        @else
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($gallery->photos as $photo)
                    <div class="rounded-xl overflow-hidden ring-1 ring-slate-100 aspect-square bg-sky-50">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($photo->image) }}" class="w-full h-full object-cover" alt="{{ $photo->caption }}">
                    </div>
                @endforeach
            </div>
        @endif
        <div class="mt-8"><a href="{{ route('galerie') }}" class="text-sky-600 text-sm font-semibold hover:underline">&larr; Retour à la galerie</a></div>
    </section>
@endsection
