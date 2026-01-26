<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head class="h-full">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 min-h-screen bg-gray-100">
@auth
    <x-parts.navigation/>
@endauth
@guest
    <x-parts.navigation :show_navlinks="false" :show_profile="false" :show_logout="false"/>
@endguest
<div class="mx-auto max-w-7xl sm:px-6 lg:px-8 py-6 h-[calc(100vh-80px)]">
    <!-- Header -->
    @if(isset($title) && isset($description))
        <x-parts.header>
            <x-slot name="title">{{ $title }}</x-slot>
            <x-slot name="description">{{ $description }}</x-slot>
        </x-parts.header>
    @endif
    <!-- Main Content -->
    <main class="h-full">
        {{ $slot }}
    </main>
</div>
</body>
</html>
