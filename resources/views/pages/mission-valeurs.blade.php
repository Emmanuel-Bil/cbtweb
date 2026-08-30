@extends('layouts.app')

@section('title', 'Mission et Valeurs — CBT')

@section('content')
    <x-page-hero title="Mission et Valeurs" parent="Découvrir la CBT" />

    <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        @if($page && $page->body)
            <div class="prose prose-slate max-w-none whitespace-pre-line text-slate-700 leading-relaxed">{{ $page->body }}</div>
        @else
            <p class="text-center text-slate-400">Le contenu de cette page sera bientôt disponible.</p>
        @endif
    </section>
@endsection
