@extends('layouts.app')

@section('title', 'Faire un don — CBT')

@section('content')
    <x-page-hero title="Don" parent="S'engager" />

    <section class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-center">
        @if($page?->image)
            <img src="{{ \Illuminate\Support\Facades\Storage::url($page->image) }}" alt="" class="w-full h-56 object-cover rounded-2xl mb-10">
        @endif
        <p class="cbt-eyebrow justify-center mb-3">S'engager</p>
        <h2 class="cbt-section-title mb-3">Soutenez notre mission</h2>
        <p class="text-slate-500 mb-12">Vos dons nous aident à soutenir les églises, les programmes sociaux et les activités de la CBT.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-left">
            <div class="cbt-card p-8">
                <div class="w-12 h-12 rounded-xl bg-sky-100 flex items-center justify-center text-2xl mb-4">📱</div>
                <h3 class="font-bold text-blue-950 text-lg mb-2">Moov Money</h3>
                <p class="text-sm text-slate-500 mb-4">Envoyez votre contribution au numéro :</p>
                <p class="text-2xl font-extrabold bg-gradient-to-r from-sky-500 to-blue-600 bg-clip-text text-transparent mb-4">{{ \App\Models\Setting::get('don_moov_number', '90 00 00 00') }}</p>
                <p class="text-xs text-slate-400">Pour l'instant, seuls les paiements via Mobile Money sont acceptés.</p>
            </div>
            <div class="cbt-card p-8">
                <div class="w-12 h-12 rounded-xl bg-sky-100 flex items-center justify-center text-2xl mb-4">📱</div>
                <h3 class="font-bold text-blue-950 text-lg mb-2">Mixx By Yas</h3>
                <p class="text-sm text-slate-500 mb-4">Envoyez votre contribution au numéro :</p>
                <p class="text-2xl font-extrabold bg-gradient-to-r from-sky-500 to-blue-600 bg-clip-text text-transparent mb-4">{{ \App\Models\Setting::get('don_mixx_number', '92 00 00 00') }}</p>
                <p class="text-xs text-slate-400">Pour l'instant, seuls les paiements via Mobile Money sont acceptés.</p>
            </div>
        </div>

        <p class="mt-12 text-slate-500">Merci pour votre soutien et pour contribuer à la mission de la CBT.</p>
    </section>
@endsection
