@if ($paginator->hasPages())
    <div class="mt-10 flex justify-center">
        <nav class="inline-flex" role="navigation" aria-label="Pagination Navigation">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="px-4 py-2 border border-gray-300 rounded-l-lg bg-white text-gray-400 cursor-default">Previous</span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                   class="px-4 py-2 border border-gray-300 rounded-l-lg bg-white text-gray-700 hover:bg-gray-50">Previous</a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-700">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="px-4 py-2 border-t border-b border-gray-300 bg-[#c90000] text-white">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-700 hover:bg-gray-50">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                   class="px-4 py-2 border border-gray-300 rounded-r-lg bg-white text-gray-700 hover:bg-gray-50">Next</a>
            @else
                <span class="px-4 py-2 border border-gray-300 rounded-r-lg bg-white text-gray-400 cursor-default">Next</span>
            @endif
        </nav>
    </div>
@endif