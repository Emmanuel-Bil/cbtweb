@extends('layouts.admin')

@section('title', 'Modifier — ' . $page->title)

@section('content')
    <div class="max-w-2xl bg-white rounded-xl ring-1 ring-slate-100 p-8">
        <form method="POST" action="{{ route('admin.pages.update', $page) }}" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-xs font-semibold text-slate-500 mb-1">Titre</label>
                <input type="text" name="title" required value="{{ old('title', $page->title) }}" class="w-full rounded-lg ring-1 ring-slate-200 px-4 py-2.5 text-sm focus:ring-sky-500 focus:outline-none">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-500 mb-1">Sous-titre</label>
                <input type="text" name="subtitle" value="{{ old('subtitle', $page->subtitle) }}" class="w-full rounded-lg ring-1 ring-slate-200 px-4 py-2.5 text-sm focus:ring-sky-500 focus:outline-none">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-500 mb-1">Contenu</label>
                <textarea name="body" rows="12" class="w-full rounded-lg ring-1 ring-slate-200 px-4 py-2.5 text-sm focus:ring-sky-500 focus:outline-none">{{ old('body', $page->body) }}</textarea>
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-500 mb-1">Image</label>
                @if($page->image)
                    <p class="text-xs text-sky-600 mb-2"><a href="{{ \Illuminate\Support\Facades\Storage::url($page->image) }}" target="_blank" class="hover:underline">Image actuelle &rarr;</a></p>
                @endif
                <input type="file" name="image" class="w-full text-sm">
            </div>

            <div class="flex items-center gap-3 pt-2">
                <button type="submit" class="px-6 py-2.5 rounded-full bg-sky-600 text-white text-sm font-semibold hover:bg-sky-700">Enregistrer</button>
                <a href="{{ route('admin.pages.index') }}" class="text-sm text-slate-500 hover:underline">Annuler</a>
            </div>
        </form>
    </div>
@endsection
