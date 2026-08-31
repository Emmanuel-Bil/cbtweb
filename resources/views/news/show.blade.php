@extends('layouts.app')

@section('title', $news->title . ' — CBT')

@section('content')
    <x-page-hero :title="$news->title" parent="Actualités" />

    <section class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        @if($news->image)
            <img src="{{ \Illuminate\Support\Facades\Storage::url($news->image) }}" class="w-full h-72 object-cover rounded-2xl mb-8" alt="{{ $news->title }}">
        @endif
        @if($news->published_at)
            <p class="text-xs text-sky-600 font-semibold mb-4">{{ $news->published_at->translatedFormat('d F Y') }}</p>
        @endif
        <div class="prose prose-slate max-w-none whitespace-pre-line text-slate-700 leading-relaxed">{{ $news->content }}</div>

        <div class="mt-6">
            <a href="{{ route('actualites') }}" class="text-sky-600 text-sm font-semibold hover:underline">&larr; Retour aux actualités</a>
        </div>
    </section>

    @if($recent->isNotEmpty())
    <section class="bg-slate-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-xl font-bold text-blue-950 mb-8">Autres actualités</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                @foreach($recent as $item)
                    <a href="{{ route('actualites.show', $item) }}" class="cbt-card block p-5">
                        <h3 class="font-semibold text-blue-950 text-sm">{{ $item->title }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif
@endsection
