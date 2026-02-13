@if ($paginator->hasPages())
    <nav role="navigation"
         aria-label="{{ __('Pagination Navigation') }}"
         class="flex items-center justify-between gap-2">

        {{-- Previous --}}
        @if ($paginator->onFirstPage())
            <button class="btn btn-sm btn-disabled">
                {!! __('pagination.previous') !!}
            </button>
        @else
            <a href="{{ $paginator->previousPageUrl() }}"
               rel="prev"
               class="btn btn-sm">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"
               rel="next"
               class="btn btn-sm">
                {!! __('pagination.next') !!}
            </a>
        @else
            <button class="btn btn-sm btn-disabled">
                {!! __('pagination.next') !!}
            </button>
        @endif

    </nav>
@endif
