@props(['title', 'parent' => null, 'parentRoute' => null])

<section class="relative bg-blue-950 py-24 px-4 sm:px-6 lg:px-8 overflow-hidden">
    <img src="{{ asset('images/page-banner.jpg') }}" alt="" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-br from-blue-950/95 via-blue-900/92 to-sky-800/85"></div>
    <div class="absolute inset-0 bg-grid-pattern opacity-40"></div>

    <div class="absolute -top-16 -left-16 w-72 h-72 rounded-full bg-sky-500/20 blur-3xl animate-blob" aria-hidden="true"></div>
    <div class="absolute -bottom-20 -right-10 w-80 h-80 rounded-full bg-blue-500/20 blur-3xl animate-blob" style="animation-delay: -6s" aria-hidden="true"></div>

    <div class="relative max-w-5xl mx-auto text-center">
        <p class="cbt-eyebrow justify-center text-sky-300 mb-4">Convention Baptiste du Togo</p>
        <h1 class="text-4xl sm:text-5xl font-extrabold text-white tracking-tight">{{ $title }}</h1>
        <div class="mt-4 flex items-center justify-center gap-2 text-sm text-blue-200/80">
            @if ($parent)
                <span>{{ $parent }}</span>
                <svg class="w-3.5 h-3.5 text-sky-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd"/></svg>
            @endif
            <span class="text-white font-semibold">{{ $title }}</span>
        </div>
    </div>
</section>
