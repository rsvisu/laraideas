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
    <x-layouts.navigation />
@endauth
@guest
    <x-layouts.navigation :show_navlinks="false" :show_profile="false" :show_logout="false"/>
@endguest
<main class="mx-auto max-w-7xl px-4 py-6 h-[calc(100vh-80px)]">
    {{ $slot }}
</main>
</body>
</html>
