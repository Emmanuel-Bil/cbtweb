@extends('layouts.admin')

@section('title', ($gallery->exists ? 'Modifier' : 'Ajouter') . ' un album')

@section('content')
    <div class="max-w-2xl bg-white rounded-xl ring-1 ring-slate-100 p-8 mb-6">
        <form method="POST"
              action="{{ $gallery->exists ? route('admin.galleries.update', $gallery) : route('admin.galleries.store') }}"
              enctype="multipart/form-data" class="space-y-5">
            @csrf
            @if($gallery->exists) @method('PUT') @endif

            <div>
                <label class="block text-xs font-semibold text-slate-500 mb-1">Titre de l'album</label>
                <input type="text" name="title" required value="{{ old('title', $gallery->title) }}" class="w-full rounded-lg ring-1 ring-slate-200 px-4 py-2.5 text-sm focus:ring-sky-500 focus:outline-none">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-500 mb-1">Ordre</label>
                <input type="number" name="order" value="{{ old('order', $gallery->order) }}" class="w-full rounded-lg ring-1 ring-slate-200 px-4 py-2.5 text-sm focus:ring-sky-500 focus:outline-none">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-500 mb-1">Image de couverture</label>
                @if($gallery->cover_image)
                    <p class="text-xs text-sky-600 mb-2"><a href="{{ \Illuminate\Support\Facades\Storage::url($gallery->cover_image) }}" target="_blank" class="hover:underline">Image actuelle &rarr;</a></p>
                @endif
                <input type="file" name="cover_image" class="w-full text-sm">
            </div>

            <div class="flex items-center gap-3 pt-2">
                <button type="submit" class="px-6 py-2.5 rounded-full bg-sky-600 text-white text-sm font-semibold hover:bg-sky-700">Enregistrer</button>
                <a href="{{ route('admin.galleries.index') }}" class="text-sm text-slate-500 hover:underline">Annuler</a>
            </div>
        </form>
    </div>

    @if($gallery->exists)
        <div class="max-w-2xl bg-white rounded-xl ring-1 ring-slate-100 p-8">
            <h2 class="font-bold text-blue-950 mb-4">Photos de l'album</h2>

            <form method="POST" action="{{ route('admin.galleries.photos.store', $gallery) }}" enctype="multipart/form-data" class="flex items-end gap-3 mb-6">
                @csrf
                <div class="flex-1">
                    <label class="block text-xs font-semibold text-slate-500 mb-1">Ajouter une photo</label>
                    <input type="file" name="image" required class="w-full text-sm">
                </div>
                <input type="text" name="caption" placeholder="Légende (optionnel)" class="rounded-lg ring-1 ring-slate-200 px-3 py-2 text-sm">
                <button type="submit" class="px-4 py-2 rounded-full bg-sky-600 text-white text-sm font-semibold hover:bg-sky-700 shrink-0">Ajouter</button>
            </form>

            <div class="grid grid-cols-3 sm:grid-cols-4 gap-3">
                @foreach($gallery->photos as $photo)
                    <div class="relative group">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($photo->image) }}" class="w-full aspect-square object-cover rounded-lg">
                        <form action="{{ route('admin.galleries.photos.destroy', [$gallery, $photo]) }}" method="POST" onsubmit="return confirm('Supprimer cette photo ?');" class="absolute top-1 right-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white text-xs rounded-full w-6 h-6 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">&times;</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@endsection
