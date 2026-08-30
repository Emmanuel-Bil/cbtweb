@extends('layouts.admin')

@section('title', 'Galerie')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <p class="text-sm text-slate-500">{{ $galleries->total() }} album(s)</p>
        <a href="{{ route('admin.galleries.create') }}" class="px-4 py-2 rounded-full bg-sky-600 text-white text-sm font-semibold hover:bg-sky-700">+ Ajouter un album</a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($galleries as $gallery)
            <a href="{{ route('admin.galleries.edit', $gallery) }}" class="block bg-white rounded-xl ring-1 ring-slate-100 overflow-hidden hover:shadow-md transition">
                <div class="h-32 bg-sky-50">
                    @if($gallery->cover_image)
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($gallery->cover_image) }}" class="w-full h-full object-cover">
                    @endif
                </div>
                <div class="p-4">
                    <p class="font-semibold text-blue-950">{{ $gallery->title }}</p>
                    <p class="text-xs text-slate-400">{{ $gallery->photos_count }} photo(s)</p>
                </div>
            </a>
        @endforeach
    </div>

    <div class="mt-6">{{ $galleries->links() }}</div>
@endsection
