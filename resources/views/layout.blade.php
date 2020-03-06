<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mon super blog!</title>

        <link href="https://unpkg.com/tailwindcss@^1.2/dist/tailwind.min.css" rel="stylesheet">
        @livewireStyles
    </head>
    <body>
        <div id="app" class="h-screen mx-5">
            <nav class="flex justify-center h-20 items-center">
                <h1 class="text-3xl font-extrabold">Mon super blog</h1>
            </nav>
            @yield('content')
        </div>

        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    </body>
</html>
