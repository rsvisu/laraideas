@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'px-1 px-1 border-b-2 border-primary'
                : 'px-1 px-1 border-b-2 border-primary/10';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
