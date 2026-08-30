<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion — Administration CBT</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex items-center justify-center bg-blue-950 px-4">
    <div class="w-full max-w-sm bg-white rounded-2xl shadow-xl p-8">
        <div class="flex flex-col items-center mb-8">
            <x-cbt-logo class="h-14 w-14 mb-3" />
            <h1 class="text-lg font-bold text-blue-950">Administration CBT</h1>
        </div>

        @if ($errors->any())
            <div class="mb-4 rounded-lg bg-red-50 text-red-600 text-sm px-4 py-3">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="{{ route('admin.login.attempt') }}" class="space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-semibold text-slate-500 mb-1">Email</label>
                <input type="email" name="email" required value="{{ old('email') }}" class="w-full rounded-lg ring-1 ring-slate-200 px-4 py-2.5 text-sm focus:ring-sky-500 focus:outline-none">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-500 mb-1">Mot de passe</label>
                <input type="password" name="password" required class="w-full rounded-lg ring-1 ring-slate-200 px-4 py-2.5 text-sm focus:ring-sky-500 focus:outline-none">
            </div>
            <label class="flex items-center gap-2 text-sm text-slate-500">
                <input type="checkbox" name="remember"> Se souvenir de moi
            </label>
            <button type="submit" class="w-full py-2.5 rounded-full bg-sky-600 text-white font-semibold hover:bg-sky-700 transition">Se connecter</button>
        </form>
    </div>
</body>
</html>
