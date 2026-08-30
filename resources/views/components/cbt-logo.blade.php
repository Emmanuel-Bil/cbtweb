@props(['light' => false])

<img src="{{ asset('images/cbt-logo.png') }}" alt="Logo CBT" {{ $attributes->merge(['class' => 'h-12 w-12 object-contain']) }}>
