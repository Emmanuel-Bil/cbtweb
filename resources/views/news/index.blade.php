@extends('layouts.app')

@section('title', 'Actualités — CBT')

@section('content')
    <x-page-hero title="Actualités" parent="Actualités et médias" />

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        @if($news->isEmpty())
            <p class="text-center text-slate-400">Aucune actualité publiée pour le moment.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($news as $item)
                    <a href="{{ route('actualites.show', $item) }}" class="group block rounded-2xl overflow-hidden ring-1 ring-slate-100 hover:shadow-lg transition">
                        <div class="h-44 bg-sky-100 overflow-hidden">
                            @if($item->image)
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($item->image) }}" class="w-full h-full object-cover group-hover:scale-105 transition" alt="{{ $item->title }}">
                            @endif
                        </div>
                        <div class="p-5">
                            @if($item->published_at)
                                <p class="text-xs text-sky-600 font-semibold mb-1">{{ $item->published_at->translatedFormat('d F Y') }}</p>
                            @endif
                            <h3 class="font-bold text-blue-950 group-hover:text-sky-600 transition">{{ $item->title }}</h3>
                            <p class="text-sm text-slate-500 mt-2">{{ \Illuminate\Support\Str::limit($item->excerpt, 100) }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="mt-10">{{ $news->links() }}</div>
        @endif
    </section>
@endsection
