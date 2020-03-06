<div class="post" x-data="{ open: false }">

    {{-- post card --}}
    <div @click="open = true" class="mb-6 cursor-pointer">
        <h2 class="font-bold text-xl text-gray-900">{{ $post->titre }}</h2>
        <p class="text-gray-800">
            {!! Str::limit($post->contenu, 150) !!}
        </p>
        <span class="text-sm text-gray-700">{{ $post->date->format('\L\e j/m/Y') }}</span>
    </div>

    {{-- Post modal --}}
    <div class="post-modal fixed top-0 left-0 h-screen w-screen flex flex-col justify-center items-center px-5"
        x-show.transition="open"
        x-on:keydown.cmd.escape.window="open = false"
        style="background-color:rgba(255, 255, 255, 0.8);"
    >
        <div
            class="flex flex-col w-full md:w-2/3 lg:w-1/2 xl:w-2/5 bg-white shadow-xl py-10 px-10"
            @click.away="open = false"
            style="height: 70vh;"
        >
            <h2 class="font-bold text-xl md:text-2xl text-gray-900 mb-4">{{ $post->titre }}</h2>
            <span class="text-sm md:text-base text-gray-700 mb-4">{{ $post->date->format('\L\e j/m/Y') }}</span>
            <p class="text-gray-800 md:text-xl overflow-y-auto">
                {!! nl2br($post->contenu) !!}
            </p>
        </div>

        <button
            @click="open = false"
            class="bg-black my-8 shadow-xl px-4 py-3 text-white font-bold transition duration-300 ease-in-out hover:bg-white hover:text-black border-2 border-black hover:border-black focus:outline-none"
        >
            Fermer
        </button>
    </div>
</div>
