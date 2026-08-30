@extends('layouts.app')

@section('title', 'Organisation et Gouvernance — CBT')

@section('content')
    <x-page-hero title="Organisation Gouvernance" parent="Découvrir la CBT" />

    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-20">

        @if($president)
        <div>
            <p class="text-center text-xs font-semibold uppercase tracking-widest text-sky-600 mb-10">Présidence</p>
            <div class="flex flex-col items-center text-center">
                <div class="w-56 h-56 sm:w-72 sm:h-72 rounded-full bg-sky-100 ring-8 ring-sky-50 overflow-hidden mb-6">
                    @if($president->photo)
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($president->photo) }}" class="w-full h-full object-contain" alt="{{ $president->name }}">
                    @else
                        <div class="w-full h-full flex items-center justify-center text-sky-600 font-bold text-4xl">CBT</div>
                    @endif
                </div>
                <h2 class="text-2xl font-extrabold text-blue-950">{{ $president->name }}</h2>
                <p class="text-sky-600 font-semibold mt-1">{{ $president->title }}</p>
                @if($president->phone)<p class="text-slate-400 text-sm mt-1">Tél : {{ $president->phone }}</p>@endif
            </div>
        </div>
        @endif

        <div>
            <h2 class="text-2xl font-extrabold text-blue-950 text-center mb-10">Membres du Bureau Exécutif</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach($bureauRest as $member)
                    <div class="text-center">
                        <div class="w-36 h-36 sm:w-40 sm:h-40 mx-auto rounded-full bg-sky-100 overflow-hidden mb-4 ring-4 ring-white shadow">
                            @if($member->photo)
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($member->photo) }}" class="w-full h-full object-contain" alt="{{ $member->name }}">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-sky-600 font-bold text-xl">{{ \Illuminate\Support\Str::of($member->name)->explode(' ')->map(fn($w) => mb_substr($w,0,1))->take(2)->implode('') }}</div>
                            @endif
                        </div>
                        <h3 class="font-bold text-blue-950 text-sm">{{ $member->name }}</h3>
                        <p class="text-sky-600 text-xs font-semibold mt-1">{{ $member->title }}</p>
                        @if($member->phone)<p class="text-slate-400 text-xs mt-1">Tél : {{ $member->phone }}</p>@endif
                    </div>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-extrabold text-blue-950 text-center mb-10">Directeurs des Départements</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach($directors as $member)
                    <div class="text-center">
                        <div class="w-36 h-36 sm:w-40 sm:h-40 mx-auto rounded-full bg-sky-100 overflow-hidden mb-4 ring-4 ring-white shadow">
                            @if($member->photo)
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($member->photo) }}" class="w-full h-full object-contain" alt="{{ $member->name }}">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-sky-600 font-bold text-xl">{{ \Illuminate\Support\Str::of($member->name)->explode(' ')->map(fn($w) => mb_substr($w,0,1))->take(2)->implode('') }}</div>
                            @endif
                        </div>
                        <h3 class="font-bold text-blue-950 text-sm">{{ $member->name }}</h3>
                        <p class="text-sky-600 text-xs font-semibold mt-1">{{ $member->title }}</p>
                        @if($member->phone)<p class="text-slate-400 text-xs mt-1">Tél : {{ $member->phone }}</p>@endif
                    </div>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-extrabold text-blue-950 text-center mb-10">Modérateurs des Zones</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach($zoneModerators as $member)
                    <div class="text-center">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 mx-auto rounded-full bg-sky-100 overflow-hidden mb-4 ring-4 ring-white shadow">
                            @if($member->photo)
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($member->photo) }}" class="w-full h-full object-contain" alt="{{ $member->name }}">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-sky-600 font-bold text-lg">{{ \Illuminate\Support\Str::of($member->name)->explode(' ')->map(fn($w) => mb_substr($w,0,1))->take(2)->implode('') }}</div>
                            @endif
                        </div>
                        <h3 class="font-bold text-blue-950 text-sm">{{ $member->name }}</h3>
                        <p class="text-sky-600 text-xs font-semibold mt-1">{{ $member->title }}</p>
                        @if($member->phone)<p class="text-slate-400 text-xs mt-1">Tél : {{ $member->phone }}</p>@endif
                    </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection
