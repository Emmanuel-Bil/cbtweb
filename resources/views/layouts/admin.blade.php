<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Administration CBT')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-50 text-slate-800 antialiased">
    <div class="flex min-h-screen">
        <aside class="w-64 shrink-0 bg-blue-950 text-blue-100 hidden lg:flex flex-col">
            <div class="px-6 py-6 flex items-center gap-3 border-b border-white/10">
                <x-cbt-logo class="h-9 w-9" light />
                <span class="font-bold text-white text-sm">Admin CBT</span>
            </div>
            <nav class="flex-1 overflow-y-auto py-4 text-sm">
                @php
                    $sections = [
                        'Tableau de bord' => [['admin.dashboard', 'Vue d\'ensemble']],
                        'Contenu' => [
                            ['admin.pages.index', 'Pages'],
                            ['admin.confession-points.index', 'Confession de foi'],
                            ['admin.history-events.index', 'Historique'],
                            ['admin.departments.index', 'Départements'],
                            ['admin.activities.index', 'Activités (accueil)'],
                        ],
                        'Organisation' => [
                            ['admin.bureau-members.index', 'Bureau & directeurs'],
                            ['admin.zones.index', 'Zones'],
                            ['admin.churches.index', 'Églises'],
                        ],
                        'Actualités & médias' => [
                            ['admin.news.index', 'Actualités'],
                            ['admin.events.index', 'Événements'],
                            ['admin.key-dates.index', 'Dates utiles'],
                            ['admin.galleries.index', 'Galerie'],
                            ['admin.videos.index', 'Vidéos'],
                            ['admin.newsletters.index', 'Newsletters'],
                        ],
                        'Ressources' => [
                            ['admin.social-works.index', 'Œuvres sociales'],
                            ['admin.library-items.index', 'Bibliothèque'],
                            ['admin.downloads.index', 'Téléchargements'],
                        ],
                        'Messages' => [
                            ['admin.messages.index', 'Contact & newsletter'],
                        ],
                        'Réglages' => [
                            ['admin.settings.edit', 'Réglages du site'],
                        ],
                    ];
                @endphp

                @foreach($sections as $label => $links)
                    <p class="px-6 pt-5 pb-1 text-[11px] uppercase tracking-wider text-blue-400 font-semibold">{{ $label }}</p>
                    @foreach($links as [$route, $text])
                        <a href="{{ route($route) }}" class="block px-6 py-2 {{ request()->routeIs($route) || request()->routeIs(str_replace('.index','.*', $route)) ? 'bg-white/10 text-white font-semibold' : 'hover:bg-white/5' }}">{{ $text }}</a>
                    @endforeach
                @endforeach
            </nav>
            <form method="POST" action="{{ route('admin.logout') }}" class="p-4 border-t border-white/10">
                @csrf
                <button type="submit" class="w-full text-left px-2 py-2 text-sm hover:bg-white/5 rounded">Se déconnecter</button>
            </form>
        </aside>

        <div class="flex-1 min-w-0">
            <header class="bg-white border-b border-slate-200 px-6 py-4 flex items-center justify-between">
                <h1 class="text-lg font-bold text-blue-950">@yield('title', 'Administration')</h1>
                <span class="text-sm text-slate-500">{{ auth()->user()->name ?? '' }}</span>
            </header>

            <main class="p-6">
                @if (session('status'))
                    <div class="mb-6 rounded-lg bg-emerald-50 text-emerald-700 text-sm px-4 py-3">{{ session('status') }}</div>
                @endif
                @if ($errors->any())
                    <div class="mb-6 rounded-lg bg-red-50 text-red-700 text-sm px-4 py-3">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
