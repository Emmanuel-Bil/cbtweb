@extends('layouts.admin')

@section('title', ucfirst($title) . 's')

@section('content')
    @php
        $columns = collect($fields)->reject(fn($f) => in_array($f['type'], ['textarea', 'image', 'file']))->take(4);
        if ($columns->isEmpty()) {
            $columns = collect($fields)->take(2);
        }
    @endphp

    <div class="flex items-center justify-between mb-6">
        <p class="text-sm text-slate-500">{{ $items->total() }} élément(s)</p>
        <a href="{{ route("$routePrefix.create") }}" class="px-4 py-2 rounded-full bg-sky-600 text-white text-sm font-semibold hover:bg-sky-700">+ Ajouter</a>
    </div>

    <div class="bg-white rounded-xl ring-1 ring-slate-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead class="bg-slate-50 text-slate-500 uppercase text-xs">
                    <tr>
                        @foreach($columns as $col)
                            <th class="px-4 py-3 text-left">{{ $col['label'] }}</th>
                        @endforeach
                        <th class="px-4 py-3 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($items as $item)
                        <tr class="hover:bg-sky-50/50">
                            @foreach($columns as $col)
                                <td class="px-4 py-3 text-slate-600">
                                    @php $value = $item->{$col['name']}; @endphp
                                    @if($col['type'] === 'checkbox')
                                        {{ $value ? '✓' : '—' }}
                                    @elseif($col['type'] === 'select')
                                        {{ $col['options'][$value] ?? $value }}
                                    @elseif($col['type'] === 'datetime' && $value)
                                        {{ \Illuminate\Support\Carbon::parse($value)->format('d/m/Y H:i') }}
                                    @else
                                        {{ \Illuminate\Support\Str::limit((string) $value, 60) }}
                                    @endif
                                </td>
                            @endforeach
                            <td class="px-4 py-3 text-right space-x-3 whitespace-nowrap">
                                <a href="{{ route("$routePrefix.edit", $item) }}" class="text-sky-600 font-semibold hover:underline">Modifier</a>
                                <form action="{{ route("$routePrefix.destroy", $item) }}" method="POST" class="inline" onsubmit="return confirm('Confirmer la suppression ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 font-semibold hover:underline">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="{{ $columns->count() + 1 }}" class="px-4 py-8 text-center text-slate-400">Aucun élément pour le moment.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-6">{{ $items->links() }}</div>
@endsection
