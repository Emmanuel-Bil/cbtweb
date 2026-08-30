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
                    <a href="{{ \Illuminate\Support\Facades\Storage::url($newsletter->file) }}" target="_blank" class="flex items-center justify-between gap-4 rounded-xl ring-1 ring-slate-100 p-5 hover:shadow-md transition">
                        <div>
                            <h3 class="font-bold text-blue-950">{{ $newsletter->title }}</h3>
                            @if($newsletter->published_at)<p class="text-xs text-slate-400 mt-1">{{ $newsletter->published_at->translatedFormat('d F Y') }}</p>@endif
                        </div>
                        <span class="shrink-0 text-sky-600 text-sm font-semibold">Télécharger &darr;</span>
                    </a>
                @endforeach
            </div>
            <div class="mt-10">{{ $newsletters->links() }}</div>
        @endif
    </section>
@endsection
