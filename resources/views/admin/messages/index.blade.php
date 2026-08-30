@extends('layouts.admin')

@section('title', 'Messages')

@section('content')
    <h2 class="font-bold text-blue-950 mb-4">Messages de contact</h2>
    <div class="bg-white rounded-xl ring-1 ring-slate-100 overflow-hidden mb-10">
        <table class="min-w-full text-sm">
            <thead class="bg-slate-50 text-slate-500 uppercase text-xs">
                <tr>
                    <th class="px-4 py-3 text-left">Nom</th>
                    <th class="px-4 py-3 text-left">Email</th>
                    <th class="px-4 py-3 text-left">Reçu le</th>
                    <th class="px-4 py-3 text-left">Statut</th>
                    <th class="px-4 py-3 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($messages as $message)
                    <tr class="hover:bg-sky-50/50">
                        <td class="px-4 py-3 font-semibold text-blue-950">{{ $message->name }} {{ $message->firstname }}</td>
                        <td class="px-4 py-3 text-slate-500">{{ $message->email }}</td>
                        <td class="px-4 py-3 text-slate-500">{{ $message->created_at->format('d/m/Y H:i') }}</td>
                        <td class="px-4 py-3">
                            @if($message->is_read)
                                <span class="text-xs text-slate-400">Lu</span>
                            @else
                                <span class="text-xs text-sky-600 font-semibold">Non lu</span>
                            @endif
                        </td>
                        <td class="px-4 py-3 text-right space-x-3 whitespace-nowrap">
                            <a href="{{ route('admin.messages.show', $message) }}" class="text-sky-600 font-semibold hover:underline">Lire</a>
                            <form action="{{ route('admin.messages.destroy', $message) }}" method="POST" class="inline" onsubmit="return confirm('Supprimer ce message ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 font-semibold hover:underline">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="px-4 py-8 text-center text-slate-400">Aucun message pour le moment.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mb-10">{{ $messages->links() }}</div>

    <h2 class="font-bold text-blue-950 mb-4">Abonnés newsletter ({{ $subscribers->count() }})</h2>
    <div class="bg-white rounded-xl ring-1 ring-slate-100 p-6">
        <div class="flex flex-wrap gap-2">
            @forelse($subscribers as $subscriber)
                <span class="px-3 py-1 rounded-full bg-slate-100 text-xs text-slate-600">{{ $subscriber->email }}</span>
            @empty
                <p class="text-slate-400 text-sm">Aucun abonné pour le moment.</p>
            @endforelse
        </div>
    </div>
@endsection
