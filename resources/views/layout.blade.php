<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mon super blog!</title>

        <link href="https://unpkg.com/tailwindcss@^1.2/dist/tailwind.min.css" rel="stylesheet">
        @livewireStyles
        <style>
            #app > nav {
                height: 10vh;
            }
            section#articles {
                height: 90vh;
            }
        </style>
    </head>
    <body>

        <div id="app" class="container flex flex-col h-screen px-5 mx-auto md:w-2/3 lg:w-1/2 xl:w-2/5">

            <nav class="flex items-center">
                <h1 class="text-3xl md:text-5xl font-extrabold">
                    <a href="{{ route('front.index') }}">Mon super blog</a>
                </h1>
            </nav>

            <section id="articles">
                @yield('content')
            </section>

        </div>

        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

    </body>
</html>
