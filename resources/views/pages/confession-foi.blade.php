@extends('layouts.app')

@section('title', 'Confession de foi — CBT')

@section('content')
    <x-page-hero title="Confession Foi" parent="Découvrir la CBT" />

    <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-10">
        @foreach($points as $point)
            <div class="flex gap-6">
                <span class="shrink-0 text-3xl font-extrabold text-sky-200">{{ $point->order }}</span>
                <div>
                    <p class="text-slate-700 leading-relaxed">{{ $point->content }}</p>
                    @if($point->references)
                        <p class="mt-2 text-xs text-sky-600 font-medium">{{ $point->references }}</p>
                    @endif
                </div>
            </div>
        @endforeach
    </section>
@endsection
