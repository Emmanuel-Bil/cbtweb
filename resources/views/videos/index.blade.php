@extends('layouts.app')

@section('title', 'Vidéos et prédications — CBT')

@section('content')
    <x-page-hero title="Vidéos et prédications" parent="Actualités et médias" />

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        @if($videos->isEmpty())
            <p class="text-center text-slate-400">Aucune vidéo pour le moment.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($videos as $video)
                    <div class="cbt-card overflow-hidden">
                        <div class="aspect-video bg-black">
                            <iframe src="{{ $video->embed_url }}" class="w-full h-full" allowfullscreen loading="lazy"></iframe>
                        </div>
                        <div class="p-5">
                            <h3 class="font-bold text-blue-950">{{ $video->title }}</h3>
                            @if($video->description)<p class="text-sm text-slate-500 mt-2">{{ $video->description }}</p>@endif
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-10">{{ $videos->links() }}</div>
        @endif
    </section>
@endsection
