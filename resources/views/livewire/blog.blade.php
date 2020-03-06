<div class="flex flex-col items-center h-full">

    {{-- Recherche --}}
    <div class="self-start mt-0 mb-4 md:mb-12 w-full md:w-3/4 xl:w-1/2">
        <input
            wire:model="recherche"
            type="search"
            placeholder="Rechercher un article"
            class="appearance-none
                border-b-2
                border-gray-400
                w-full
                py-2
                px-1
                text-black
                font-bold
                leading-tight
                focus:outline-none"
        >
    </div>

    {{-- Liste de posts --}}
    <div class="flex-grow overflow-y-auto">
        @foreach ($posts as $post)
            <div class="mb-6" x-data>
                <h2 class="font-bold text-xl text-gray-900">{{ $post->titre }}</h2>
                <p class="text-gray-800">
                    {!! Str::limit(nl2br($post->contenu), 150) !!}
                </p>
                <span class="text-sm text-gray-700">{{ $post->date->format('\L\e j/m/Y') }}</span>
            </div>
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="flex justify-center mt-4 md:mt-8 mb-4 md:mb-8">
        {{ $posts->links() }}
    </div>

</div>
