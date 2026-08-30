@extends('layouts.admin')

@section('title', 'Pages')

@section('content')
    <div class="bg-white rounded-xl ring-1 ring-slate-100 divide-y divide-slate-100">
        @foreach($pages as $page)
            <div class="flex items-center justify-between px-6 py-4">
                <div>
                    <p class="font-semibold text-blue-950">{{ $page->title }}</p>
                    <p class="text-xs text-slate-400">/{{ $page->slug }}</p>
                </div>
                <a href="{{ route('admin.pages.edit', $page) }}" class="text-sky-600 text-sm font-semibold hover:underline">Modifier</a>
            </div>
        @endforeach
    </div>
@endsection
