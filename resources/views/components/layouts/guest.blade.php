<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
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
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-base-content bg-base-200">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 stroke-current" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-base-100 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
