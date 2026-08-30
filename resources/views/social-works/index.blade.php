@extends('layouts.app')

@section('title', 'Œuvres sociales et missions — CBT')

@section('content')
    <x-page-hero title="Oeuvres Missions" parent="Nos églises et oeuvres" />

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        @if($page && $page->body)
            <div class="prose prose-slate max-w-none mx-auto text-center mb-12 whitespace-pre-line text-slate-600">{{ $page->body }}</div>
        @endif

        @if($works->isEmpty())
            <p class="text-center text-slate-400">Le contenu de cette section sera bientôt disponible.</p>
        @else
            @foreach($works as $category => $items)
                <h2 class="text-xl font-bold text-blue-950 mb-6">{{ $category }}</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-14">
                    @foreach($items as $item)
                        <div class="rounded-2xl overflow-hidden ring-1 ring-slate-100 hover:shadow-lg transition">
                            @if($item->image)
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($item->image) }}" class="w-full h-40 object-cover" alt="{{ $item->title }}">
                            @endif
                            <div class="p-5">
                                <h3 class="font-bold text-blue-950">{{ $item->title }}</h3>
                                <p class="text-sm text-slate-500 mt-2">{{ $item->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        @endif
    </section>
@endsection
