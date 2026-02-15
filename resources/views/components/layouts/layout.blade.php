<!DOCTYPE html>
<html lang="es">
<head class="h-full">
    <!-- Script antes de que se renderice el cuerpo para evitar el flash de aplicar el tema -->
    <script>
        // Determinamos el tema inicial
        const isDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
        let theme = localStorage.getItem("theme");
        if (!theme) {
            theme = isDarkMode ? "dark" : "light";
        }

        // Guardamos el tema
        localStorage.setItem("theme", theme);

        // Aplicamos el tema
        document.documentElement.setAttribute("data-theme", theme);
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col font-sans text-base-content min-h-screen bg-base-200">
@auth
    <x-parts.navigation/>
@endauth
@guest
    <x-parts.navigation :show_navlinks="false" :show_profile="false" :show_logout="false"/>
@endguest
<!-- Content -->
<div class="flex-1 flex flex-col mx-auto w-full max-w-7xl sm:px-6 lg:px-8 py-6">
    <!-- Header -->
    @if(isset($title) && isset($description))
        <x-parts.header>
            <x-slot name="title">{{ $title }}</x-slot>
            <x-slot name="description">{{ $description }}</x-slot>
        </x-parts.header>
    @endif
    <!-- Main Content -->
    <main class="flex-1 flex flex-col">
        {{ $slot }}
    </main>
</div>
</body>
</html>
