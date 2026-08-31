@extends('layouts.app')

@section('title', 'Newsletters — CBT')

@section('content')
    <x-page-hero title="Newsletters" parent="Actualités et médias" />

    <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        @if($newsletters->isEmpty())
            <p class="text-center text-slate-400">Aucune newsletter disponible pour le moment.</p>
        @else
            <div class="space-y-4">
                @foreach($newsletters as $newsletter)
                    <a href="{{ \Illuminate\Support\Facades\Storage::url($newsletter->file) }}" target="_blank" class="cbt-card group flex items-center justify-between gap-4 p-5">
                        <div>
                            <h3 class="font-bold text-blue-950">{{ $newsletter->title }}</h3>
                            @if($newsletter->published_at)<p class="text-xs text-slate-400 mt-1">{{ $newsletter->published_at->translatedFormat('d F Y') }}</p>@endif
                        </div>
                        <span class="shrink-0 inline-flex items-center gap-1.5 text-sky-600 text-sm font-semibold">
                            Télécharger
                            <svg class="w-4 h-4 transition group-hover:translate-y-0.5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 3a.75.75 0 01.75.75v8.69l2.72-2.72a.75.75 0 111.06 1.06l-4 4a.75.75 0 01-1.06 0l-4-4a.75.75 0 111.06-1.06l2.72 2.72V3.75A.75.75 0 0110 3z" clip-rule="evenodd"/></svg>
                        </span>
                    </a>
                @endforeach
            </div>
            <div class="mt-10">{{ $newsletters->links() }}</div>
        @endif
    </section>
@endsection
