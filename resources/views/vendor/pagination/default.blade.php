@if ($paginator->hasPages())
    <div class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="pagination__item pagination__item--left"><span></span></a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev"  class="pagination__item pagination__item--left"></a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a class="pagination__item"><span>{{ $element }}</span></a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="pagination__item pagination__item--active"><span>{{ $page }}</span></a>
                    @else
                        <a class="pagination__item" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="pagination__item pagination__item--right" href="{{ $paginator->nextPageUrl() }}" rel="next"></a>
        @else
            <a class="pagination__item pagination__item--right"><span></span></a>
        @endif
    </div>
@endif
