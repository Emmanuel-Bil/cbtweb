<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Convention Baptiste du Togo')</title>
    <meta name="description" content="Convention Baptiste du Togo (CBT) — Gagner les peuples pour Christ et perfectionner les saints.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body class="min-h-screen flex flex-col bg-white text-slate-800 antialiased">

    <header class="bg-white/90 backdrop-blur-md shadow-sm sticky top-0 z-50 border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <a href="{{ route('home') }}" class="flex items-center gap-3 shrink-0 group">
                    <x-cbt-logo class="h-12 w-12 transition duration-300 group-hover:scale-105" />
                    <span class="hidden sm:block leading-tight">
                        <span class="block text-sm font-bold text-blue-950 tracking-wide">CONVENTION BAPTISTE</span>
                        <span class="block text-xs font-semibold text-sky-600 tracking-widest">DU TOGO</span>
                    </span>
                </a>

                <nav class="hidden lg:flex items-center gap-1 text-sm font-semibold tracking-wide text-blue-950">
                    <a href="{{ route('home') }}" class="px-3 py-2 rounded hover:text-sky-600 {{ request()->routeIs('home') ? 'text-sky-600' : '' }}">ACCUEIL</a>

                    <div class="relative group">
                        <button class="px-3 py-2 rounded hover:text-sky-600 inline-flex items-center gap-1">
                            DÉCOUVRIR LA CBT
                            <svg class="w-3 h-3 mt-0.5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
                        </button>
                        <div class="absolute left-0 top-full pt-2 w-64 opacity-0 invisible translate-y-1 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition duration-150">
                            <div class="bg-white rounded-lg shadow-xl ring-1 ring-black/5 py-2">
                                <a href="{{ route('mot-president') }}" class="block px-4 py-2.5 text-sm hover:bg-sky-50 hover:text-sky-600">Mot du Président</a>
                                <a href="{{ route('notre-histoire') }}" class="block px-4 py-2.5 text-sm hover:bg-sky-50 hover:text-sky-600">Notre Histoire</a>
                                <a href="{{ route('organisation-gouvernance') }}" class="block px-4 py-2.5 text-sm hover:bg-sky-50 hover:text-sky-600">Organisation et Gouvernance</a>
                                <a href="{{ route('confession-foi') }}" class="block px-4 py-2.5 text-sm hover:bg-sky-50 hover:text-sky-600">Confession de foi</a>
                                <a href="{{ route('mission-valeurs') }}" class="block px-4 py-2.5 text-sm hover:bg-sky-50 hover:text-sky-600">Mission et Valeurs</a>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <button class="px-3 py-2 rounded hover:text-sky-600 inline-flex items-center gap-1">
                            ACTUALITÉS ET MÉDIAS
                            <svg class="w-3 h-3 mt-0.5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
                        </button>
                        <div class="absolute left-0 top-full pt-2 w-56 opacity-0 invisible translate-y-1 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition duration-150">
                            <div class="bg-white rounded-lg shadow-xl ring-1 ring-black/5 py-2">
                                <a href="{{ route('actualites') }}" class="block px-4 py-2.5 text-sm hover:bg-sky-50 hover:text-sky-600">Actualités</a>
                                <a href="{{ route('evenements') }}" class="block px-4 py-2.5 text-sm hover:bg-sky-50 hover:text-sky-600">Évènements</a>
                                <a href="{{ route('galerie') }}" class="block px-4 py-2.5 text-sm hover:bg-sky-50 hover:text-sky-600">Galerie photos</a>
                                <a href="{{ route('videos-predications') }}" class="block px-4 py-2.5 text-sm hover:bg-sky-50 hover:text-sky-600">Vidéos et prédications</a>
                                <a href="{{ route('newsletters') }}" class="block px-4 py-2.5 text-sm hover:bg-sky-50 hover:text-sky-600">Newsletters</a>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <button class="px-3 py-2 rounded hover:text-sky-600 inline-flex items-center gap-1">
                            NOS ÉGLISES ET ŒUVRES
                            <svg class="w-3 h-3 mt-0.5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
                        </button>
                        <div class="absolute left-0 top-full pt-2 w-64 opacity-0 invisible translate-y-1 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition duration-150">
                            <div class="bg-white rounded-lg shadow-xl ring-1 ring-black/5 py-2">
                                <a href="{{ route('carte-eglises') }}" class="block px-4 py-2.5 text-sm hover:bg-sky-50 hover:text-sky-600">Carte interactive des églises</a>
                                <a href="{{ route('annuaire-region') }}" class="block px-4 py-2.5 text-sm hover:bg-sky-50 hover:text-sky-600">Annuaire par région</a>
                                <a href="{{ route('zones') }}" class="block px-4 py-2.5 text-sm hover:bg-sky-50 hover:text-sky-600">Zones</a>
                                <a href="{{ route('oeuvres-missions') }}" class="block px-4 py-2.5 text-sm hover:bg-sky-50 hover:text-sky-600">Œuvres sociales et missions</a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('contact') }}" class="px-3 py-2 rounded hover:text-sky-600 {{ request()->routeIs('contact') ? 'text-sky-600' : '' }}">CONTACT</a>

                    <a href="{{ route('don') }}" class="ml-2 inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-sky-500 to-blue-600 text-white text-xs font-bold shadow-md shadow-sky-600/20 hover:shadow-lg hover:shadow-sky-600/30 hover:-translate-y-0.5 transition duration-300">Faire un don</a>
                </nav>

                <button type="button" onclick="document.getElementById('mobile-nav').classList.toggle('hidden')" class="lg:hidden p-2 text-blue-950">
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" /></svg>
                </button>
            </div>
        </div>

        <div id="mobile-nav" class="hidden lg:hidden border-t border-slate-100 bg-white">
            <div class="px-4 py-3 space-y-1 text-sm font-semibold text-blue-950">
                <a href="{{ route('home') }}" class="block py-2">Accueil</a>
                <p class="pt-2 text-xs uppercase text-slate-400">Découvrir la CBT</p>
                <a href="{{ route('mot-president') }}" class="block py-2 pl-2">Mot du Président</a>
                <a href="{{ route('notre-histoire') }}" class="block py-2 pl-2">Notre Histoire</a>
                <a href="{{ route('organisation-gouvernance') }}" class="block py-2 pl-2">Organisation et Gouvernance</a>
                <a href="{{ route('confession-foi') }}" class="block py-2 pl-2">Confession de foi</a>
                <a href="{{ route('mission-valeurs') }}" class="block py-2 pl-2">Mission et Valeurs</a>
                <p class="pt-2 text-xs uppercase text-slate-400">Actualités et médias</p>
                <a href="{{ route('actualites') }}" class="block py-2 pl-2">Actualités</a>
                <a href="{{ route('evenements') }}" class="block py-2 pl-2">Évènements</a>
                <a href="{{ route('galerie') }}" class="block py-2 pl-2">Galerie photos</a>
                <a href="{{ route('videos-predications') }}" class="block py-2 pl-2">Vidéos et prédications</a>
                <a href="{{ route('newsletters') }}" class="block py-2 pl-2">Newsletters</a>
                <p class="pt-2 text-xs uppercase text-slate-400">Nos églises et œuvres</p>
                <a href="{{ route('carte-eglises') }}" class="block py-2 pl-2">Carte interactive</a>
                <a href="{{ route('annuaire-region') }}" class="block py-2 pl-2">Annuaire par région</a>
                <a href="{{ route('zones') }}" class="block py-2 pl-2">Zones</a>
                <a href="{{ route('oeuvres-missions') }}" class="block py-2 pl-2">Œuvres sociales et missions</a>
                <a href="{{ route('contact') }}" class="block py-2 border-t border-slate-100 mt-2 pt-3">Contact</a>
                <a href="{{ route('don') }}" class="block mt-2 text-center py-2 rounded-full bg-sky-600 text-white">Faire un don</a>
            </div>
        </div>
    </header>

    @if (session('status'))
        <div class="bg-emerald-50 text-emerald-700 text-sm text-center py-2 px-4">{{ session('status') }}</div>
    @endif

    <main class="flex-1">
        @yield('content')
    </main>

    <footer class="relative bg-gradient-to-b from-blue-950 to-slate-950 text-blue-100 overflow-hidden">
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-sky-500/60 to-transparent"></div>
        <div class="absolute -top-24 right-0 w-96 h-96 rounded-full bg-sky-500/10 blur-3xl" aria-hidden="true"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <x-cbt-logo class="h-10 w-10" light />
                    <span class="font-bold text-white">Convention Baptiste du Togo</span>
                </div>
                <p class="text-sm text-blue-200/80 mb-4">{{ \App\Models\Setting::get('footer_tagline', 'Organisation chrétienne engagée dans l\'évangélisation, l\'éducation spirituelle et les œuvres sociales.') }}</p>
                <p class="text-sm text-blue-200/80">{{ \App\Models\Setting::get('address', '657 Bd de la Kara, Tokoin Doumasséssé — 08 B.P. 80754 Lomé') }}</p>
                <p class="text-sm text-blue-200/80 mt-1">{{ \App\Models\Setting::get('phones', '(+228) 91 12 72 92 / 97 68 40 25') }}</p>
                <p class="text-sm text-blue-200/80 mt-1">{{ \App\Models\Setting::get('emails', 'convention.togo@gmail.com') }}</p>
            </div>
            <div>
                <h3 class="text-white font-semibold mb-4">Découvrir</h3>
                <ul class="space-y-2 text-sm text-blue-200/80">
                    <li><a href="{{ route('mot-president') }}" class="hover:text-white">Mot du Président</a></li>
                    <li><a href="{{ route('notre-histoire') }}" class="hover:text-white">Notre Histoire</a></li>
                    <li><a href="{{ route('mission-valeurs') }}" class="hover:text-white">Mission & Valeurs</a></li>
                    <li><a href="{{ route('organisation-gouvernance') }}" class="hover:text-white">Gouvernance</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-white font-semibold mb-4">Ressources</h3>
                <ul class="space-y-2 text-sm text-blue-200/80">
                    <li><a href="{{ route('actualites') }}" class="hover:text-white">Actualités</a></li>
                    <li><a href="{{ route('bibliotheque') }}" class="hover:text-white">Bibliothèque</a></li>
                    <li><a href="{{ route('telechargement') }}" class="hover:text-white">Téléchargements</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-white">Contact</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-white font-semibold mb-4">S'engager</h3>
                <p class="text-sm text-blue-200/80 mb-4">Soutenez nos actions missionnaires et sociales à travers votre don ou en restant informé.</p>
                <a href="{{ route('don') }}" class="inline-block mb-5 px-4 py-2 rounded-full bg-gradient-to-r from-sky-500 to-blue-600 text-white text-xs font-bold shadow-md shadow-sky-600/20 hover:shadow-lg hover:-translate-y-0.5 transition duration-300">Faire un don</a>
                <form method="POST" action="{{ route('newsletter.subscribe') }}" class="flex gap-2">
                    @csrf
                    <input type="email" name="email" required placeholder="Votre adresse email" class="min-w-0 flex-1 rounded-md px-3 py-2 text-sm text-slate-900 ring-1 ring-transparent focus:ring-sky-400 focus:outline-none transition">
                    <button type="submit" class="shrink-0 px-3 py-2 rounded-md bg-white text-blue-950 text-sm font-semibold hover:bg-blue-100 transition">S'abonner</button>
                </form>
            </div>
        </div>
        <div class="relative border-t border-white/10 py-5 text-center text-xs text-blue-300/70">
            &copy; {{ date('Y') }} Convention Baptiste du Togo. Tous droits réservés.
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
