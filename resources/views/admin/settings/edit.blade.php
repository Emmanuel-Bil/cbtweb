@extends('layouts.admin')

@section('title', 'Réglages du site')

@section('content')
    <div class="max-w-2xl bg-white rounded-xl ring-1 ring-slate-100 p-8">
        <form method="POST" action="{{ route('admin.settings.update') }}" class="space-y-5">
            @csrf
            @method('PUT')

            @foreach($keys as $key => $label)
                <div>
                    <label class="block text-xs font-semibold text-slate-500 mb-1">{{ $label }}</label>
                    <input type="text" name="{{ $key }}" value="{{ old($key, $settings[$key] ?? '') }}" class="w-full rounded-lg ring-1 ring-slate-200 px-4 py-2.5 text-sm focus:ring-sky-500 focus:outline-none">
                </div>
            @endforeach

            <button type="submit" class="px-6 py-2.5 rounded-full bg-sky-600 text-white text-sm font-semibold hover:bg-sky-700">Enregistrer</button>
        </form>
    </div>
@endsection
