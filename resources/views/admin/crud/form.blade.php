@extends('layouts.admin')

@section('title', ($item->exists ? 'Modifier' : 'Ajouter') . ' — ' . ucfirst($title))

@section('content')
    <div class="max-w-2xl bg-white rounded-xl ring-1 ring-slate-100 p-8">
        <form method="POST"
              action="{{ $item->exists ? route("$routePrefix.update", $item) : route("$routePrefix.store") }}"
              enctype="multipart/form-data" class="space-y-5">
            @csrf
            @if($item->exists) @method('PUT') @endif

            @foreach($fields as $field)
                <div>
                    <label class="block text-xs font-semibold text-slate-500 mb-1">
                        {{ $field['label'] }}@if($field['required'] ?? false) <span class="text-red-400">*</span>@endif
                    </label>

                    @php $value = old($field['name'], $item->{$field['name']} ?? ''); @endphp

                    @if($field['type'] === 'textarea')
                        <textarea name="{{ $field['name'] }}" rows="5" {{ ($field['required'] ?? false) ? 'required' : '' }}
                            class="w-full rounded-lg ring-1 ring-slate-200 px-4 py-2.5 text-sm focus:ring-sky-500 focus:outline-none">{{ $value }}</textarea>

                    @elseif($field['type'] === 'select')
                        <select name="{{ $field['name'] }}" {{ ($field['required'] ?? false) ? 'required' : '' }}
                            class="w-full rounded-lg ring-1 ring-slate-200 px-4 py-2.5 text-sm focus:ring-sky-500 focus:outline-none">
                            <option value="">—</option>
                            @foreach(($field['options'] ?? []) as $optValue => $optLabel)
                                <option value="{{ $optValue }}" @selected((string) $value === (string) $optValue)>{{ $optLabel }}</option>
                            @endforeach
                        </select>

                    @elseif($field['type'] === 'checkbox')
                        <input type="checkbox" name="{{ $field['name'] }}" value="1" @checked($value) class="rounded ring-1 ring-slate-200">

                    @elseif(in_array($field['type'], ['image', 'file']))
                        @if(!empty($item->{$field['name']}))
                            <p class="text-xs text-sky-600 mb-2">
                                <a href="{{ \Illuminate\Support\Facades\Storage::url($item->{$field['name']}) }}" target="_blank" class="hover:underline">Fichier actuel &rarr;</a>
                            </p>
                        @endif
                        <input type="file" name="{{ $field['name'] }}" {{ (($field['required'] ?? false) && !$item->exists) ? 'required' : '' }}
                            class="w-full text-sm">

                    @elseif($field['type'] === 'datetime')
                        <input type="datetime-local" name="{{ $field['name'] }}"
                            value="{{ $value ? \Illuminate\Support\Carbon::parse($value)->format('Y-m-d\TH:i') : '' }}"
                            {{ ($field['required'] ?? false) ? 'required' : '' }}
                            class="w-full rounded-lg ring-1 ring-slate-200 px-4 py-2.5 text-sm focus:ring-sky-500 focus:outline-none">

                    @else
                        <input type="{{ $field['type'] === 'number' ? 'number' : ($field['type'] === 'email' ? 'email' : 'text') }}" step="any"
                            name="{{ $field['name'] }}" value="{{ $value }}" {{ ($field['required'] ?? false) ? 'required' : '' }}
                            class="w-full rounded-lg ring-1 ring-slate-200 px-4 py-2.5 text-sm focus:ring-sky-500 focus:outline-none">
                    @endif
                </div>
            @endforeach

            <div class="flex items-center gap-3 pt-2">
                <button type="submit" class="px-6 py-2.5 rounded-full bg-sky-600 text-white text-sm font-semibold hover:bg-sky-700">Enregistrer</button>
                <a href="{{ route("$routePrefix.index") }}" class="text-sm text-slate-500 hover:underline">Annuler</a>
            </div>
        </form>
    </div>
@endsection
