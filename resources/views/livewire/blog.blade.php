<div class="container mx-auto md:w-2/3">
    <div class="flex flex-col items-center">
        @foreach ($posts as $post)
            <div>
                <h2 class="">{{ $post->titre }}</h2>
                <p>
                    {!! Str::limit(nl2br($post->contenu), 100) !!}
                </p>
            </div>
        @endforeach
    </div>
</div>
