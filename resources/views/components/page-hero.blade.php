@props(['title', 'parent' => null, 'parentRoute' => null])

<section class="relative bg-blue-950 py-20 px-4 sm:px-6 lg:px-8 overflow-hidden">
    <img src="{{ asset('images/page-banner.jpg') }}" alt="" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-br from-blue-950/95 via-blue-900/90 to-sky-800/85"></div>
    <div class="relative max-w-5xl mx-auto text-center">
        <h1 class="text-3xl sm:text-4xl font-extrabold text-white">{{ $title }}</h1>
        <p class="mt-3 text-sm text-blue-200">
            @if ($parent)
                <span>{{ $parent }}</span> <span class="mx-1">&gt;</span>
            @endif
            <span class="text-white font-medium">{{ $title }}</span>
        </p>
    </div>
</section>
