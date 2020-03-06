@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation">
        <ul class="flex justify-center text-sm">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li aria-label="@lang('pagination.previous')">
                    <span class="focus:outline-none md:text-xl font-extrabold px-3 py-2 md:px-5 md:py-4 text-gray-500 block  border-2 border-r-0 border-black" aria-hidden="true">&larr;</span>
                </li>
            @else
                <li>
                    <a wire:click="previousPage"
                       rel="prev"
                       class="cursor-pointer focus:outline-none md:text-xl font-extrabold px-3 py-2 md:px-5 md:py-4 block text-black  border-2 border-r-0 border-black transition duration-300 ease-in-out hover:text-white hover:bg-black focus:outline-none focus:shadow-outline"
                       aria-label="@lang('pagination.previous')"
                    >
                        &larr;
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li aria-disabled="true">
                        <span class="focus:outline-none md:text-xl font-extrabold px-3 py-2 md:px-5 md:py-4 block text-gray-500  border-2 border-r-0 border-black">{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li aria-current="page">
                                <span class="focus:outline-none md:text-xl font-extrabold px-3 py-2 md:px-5 md:py-4 block text-white bg-black  border-2 border-r-0 border-black">{{ $page }}</span>
                            </li>
                        @else
                            <li>
                                <a wire:click="gotoPage({{ $page }})"
                                   class="cursor-pointer focus:outline-none md:text-xl font-extrabold px-3 py-2 md:px-5 md:py-4 block text-black  border-2 border-r-0 border-black transition duration-300 ease-in-out hover:text-white hover:bg-black focus:outline-none focus:shadow-outline"
                                   aria-label="@lang('pagination.goto_page', ['page' => $page])"
                                >
                                    {{ $page }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a wire:click="nextPage"
                       rel="next"
                       class="cursor-pointer focus:outline-none md:text-xl font-extrabold px-3 py-2 md:px-5 md:py-4 block text-black  border-2 border-black transition duration-300 ease-in-out hover:text-white hover:bg-black focus:outline-none focus:shadow-outline"
                       aria-label="@lang('pagination.next')"
                    >
                        &rarr;
                    </a>
                </li>
            @else
                <li aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="focus:outline-none md:text-xl font-extrabold px-3 py-2 md:px-5 md:py-4 block text-gray-500  border-2 border-black" aria-hidden="true">&rarr;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
