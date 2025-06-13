@if ($paginator->hasPages())
    <div class="flex justify-between items-center mt-4 flex-wrap gap-2">
        {{-- Left side: Showing X to Y of Z --}}
        <div class="text-lg text-[#537D5D] font-medium">
            Showing
            <span class="font-semibold">{{ $paginator->firstItem() }}</span>
            to
            <span class="font-semibold">{{ $paginator->lastItem() }}</span>
            of
            <span class="font-semibold">{{ $paginator->total() }}</span>
            results
        </div>

        {{-- Right side: Your existing pagination nav --}}
        <nav role="navigation" class="flex justify-end" aria-label="Pagination Navigation">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="px-4 py-2 mx-2 bg-gray-200 text-gray-100 text-xl font-semibold rounded cursor-not-allowed"><</span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="px-4 py-2 mx-1.5 bg-[#537D5D] text-[#FAF6E9] text-xl font-semibold rounded hover:bg-[#9EBC8A]"><</a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="px-3 py-1 mx-1.5 text-gray-500">{{ $element }}</span>
                @endif

                {{-- Array of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="px-4 py-2 mx-1.5 bg-[#9EBC8A] text-[#FAF6E9] text-xl font-semibold rounded hover:bg-[#9EBC8A]">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="px-4 py-2 mx-1.5 bg-[#537D5D] text-[#FAF6E9] text-xl font-semibold rounded hover:bg-[#9EBC8A]">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="px-4 py-2 mx-1.5 bg-[#537D5D] text-[#FAF6E9] text-xl font-semibold rounded hover:bg-[#9EBC8A]">></a>
            @else
                <span class="px-4 py-2 mx-2 bg-gray-200 text-gray-100 text-xl font-semibold rounded cursor-not-allowed">></span>
            @endif
        </nav>
    </div>
@endif
