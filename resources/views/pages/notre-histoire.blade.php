@extends('layouts.app')

@section('title', 'Notre Histoire — CBT')

@section('content')
    <x-page-hero title="Notre Histoire" parent="Découvrir la CBT" />

    <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <p class="text-center text-slate-400 text-sm mb-14">De 1919 à aujourd'hui — l'histoire de la Convention Baptiste du Togo, étape par étape</p>

        <div class="relative">
            <div class="absolute left-5 sm:left-7 top-2 bottom-2 w-0.5 bg-sky-200"></div>

            <div class="space-y-8">
                @foreach($events as $event)
                    <div class="relative pl-14 sm:pl-20">
                        <div class="absolute left-5 sm:left-7 top-7 -translate-x-1/2 w-4 h-4 rounded-full bg-sky-600 ring-4 ring-white shadow"></div>

                        <details class="group rounded-2xl bg-white ring-1 ring-slate-100 open:ring-sky-200 open:shadow-lg transition">
                            <summary class="flex flex-wrap items-center gap-x-3 gap-y-2 cursor-pointer list-none px-5 sm:px-6 py-5">
                                @if($event->period)
                                    <span class="inline-block px-3 py-1 rounded-full bg-sky-100 text-sky-700 text-xs font-bold uppercase shrink-0">{{ $event->period }}</span>
                                @endif
                                <span class="font-semibold text-blue-950 flex-1 min-w-[12rem]">{{ $event->title }}</span>
                                <svg class="w-4 h-4 text-slate-400 group-open:rotate-180 transition shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
                            </summary>
                            <div class="px-5 sm:px-6 pb-6 pt-1 text-sm text-slate-600 leading-relaxed whitespace-pre-line border-t border-slate-50">{{ $event->content }}</div>
                        </details>
                    </div>
                @endforeach
            </div>

            <div class="relative pl-14 sm:pl-20 mt-4">
                <div class="absolute left-5 sm:left-7 top-0 -translate-x-1/2 w-4 h-4 rounded-full bg-blue-950 ring-4 ring-white shadow flex items-center justify-center">
                    <span class="w-1.5 h-1.5 rounded-full bg-white"></span>
                </div>
                <p class="text-sm font-semibold text-blue-950 pt-0.5">Aujourd'hui : 629 églises, 17 zones, ~55 000 fidèles</p>
            </div>
        </div>
    </section>
@endsection
