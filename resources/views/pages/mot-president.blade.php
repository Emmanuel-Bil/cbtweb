@extends('layouts.app')

@section('title', 'Mot du Président — CBT')

@section('content')
    <x-page-hero title="Mot du Président" parent="Découvrir la CBT" />

    @php
        $paragraphs = collect(preg_split('/\n\s*\n/', trim($page->body)))->filter();
        $greeting = $paragraphs->first();
        $isShortGreeting = mb_strlen($greeting) < 40;
        $lede = $isShortGreeting ? $paragraphs->get(1) : $greeting;
        $rest = $paragraphs->slice($isShortGreeting ? 2 : 1);
    @endphp

    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

            <aside class="lg:col-span-1">
                <div class="lg:sticky lg:top-28 flex flex-col items-center text-center">
                    <div class="w-48 h-48 sm:w-56 sm:h-56 rounded-full bg-sky-100 flex items-center justify-center overflow-hidden ring-8 ring-sky-50 shadow-lg">
                        @if($page->image)
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($page->image) }}" class="w-full h-full object-contain" alt="{{ $page->title }}">
                        @else
                            <span class="text-sky-600 text-5xl font-bold">CBT</span>
                        @endif
                    </div>
                    <h2 class="mt-6 text-xl font-bold text-blue-950">{{ $page->title }}</h2>
                    <p class="text-sm text-sky-600 font-semibold mt-1">{{ $page->subtitle }}</p>

                    <div class="mt-8 w-full rounded-2xl bg-blue-950 text-white p-6 text-left">
                        <svg class="w-8 h-8 text-sky-400 mb-3" fill="currentColor" viewBox="0 0 32 32"><path d="M9.3 24c-1.9 0-3.4-.6-4.6-1.9C3.6 20.8 3 19.2 3 17.3c0-2 .6-4 1.9-6.1 1.3-2.1 3.2-4 5.7-5.8l2 2.6c-1.9 1.4-3.3 2.7-4.2 4-.9 1.2-1.4 2.3-1.5 3.3.5-.2 1-.3 1.6-.3 1.5 0 2.7.5 3.7 1.5s1.5 2.2 1.5 3.7c0 1.5-.5 2.7-1.5 3.7s-2.3 1.1-3.9 1.1zm14 0c-1.9 0-3.4-.6-4.6-1.9-1.1-1.3-1.7-2.9-1.7-4.8 0-2 .6-4 1.9-6.1 1.3-2.1 3.2-4 5.7-5.8l2 2.6c-1.9 1.4-3.3 2.7-4.2 4-.9 1.2-1.4 2.3-1.5 3.3.5-.2 1-.3 1.6-.3 1.5 0 2.7.5 3.7 1.5s1.5 2.2 1.5 3.7c0 1.5-.5 2.7-1.5 3.7s-2.3 1.1-3.9 1.1z"/></svg>
                        <p class="text-sm italic text-blue-100 leading-relaxed">&laquo; Gagner les peuples pour Christ et perfectionner les saints &raquo;</p>
                        <p class="text-xs text-sky-400 font-semibold mt-2">Éphésiens 4.12</p>
                    </div>
                </div>
            </aside>

            <div class="lg:col-span-2">
                @if($isShortGreeting)
                    <p class="text-sm font-semibold text-slate-500 mb-4">{{ $greeting }}</p>
                @endif
                @if($lede)
                    <p class="text-xl sm:text-2xl font-semibold text-blue-950 leading-snug mb-8">{{ $lede }}</p>
                @endif

                <div class="space-y-6 text-slate-600 leading-relaxed">
                    @foreach($rest as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @endforeach
                </div>

                <div class="mt-12 pt-8 border-t border-slate-100 flex items-center gap-4">
                    <div class="w-16 h-16 rounded-full bg-sky-100 overflow-hidden shrink-0">
                        @if($page->image)
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($page->image) }}" class="w-full h-full object-contain" alt="{{ $page->title }}">
                        @endif
                    </div>
                    <div>
                        <p class="font-bold text-blue-950">{{ $page->title }}</p>
                        <p class="text-sm text-slate-500 italic">{{ $page->subtitle }}</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
