<div class="rounded-2xl ring-1 ring-slate-100 overflow-hidden hover:shadow-lg transition">
    @if($event->image)
        <img src="{{ \Illuminate\Support\Facades\Storage::url($event->image) }}" class="w-full h-40 object-cover" alt="{{ $event->title }}">
    @endif
    <div class="p-6">
        <div class="flex items-center flex-wrap gap-2 mb-2">
            <span class="text-xs text-sky-600 font-semibold">
                {{ $event->starts_at->translatedFormat('d F Y') }}
                @if($event->ends_at && !$event->ends_at->isSameDay($event->starts_at))
                    &rarr; {{ $event->ends_at->translatedFormat('d F Y') }}
                @endif
                @if($event->location) &middot; {{ $event->location }}@endif
            </span>
            @if($event->zone)
                <span class="inline-block px-2 py-0.5 rounded-full bg-slate-100 text-slate-500 text-[11px] font-semibold uppercase">{{ $event->zone->name }}</span>
            @endif
        </div>
        <h3 class="font-bold text-blue-950">{{ $event->title }}</h3>
        <p class="text-sm text-slate-500 mt-2">{{ $event->description }}</p>
    </div>
</div>
