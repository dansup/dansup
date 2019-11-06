@if ($paginator->hasPages())
    <ul class="pagination" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item bg-transparent disabled" aria-disabled="true">
                <span class="page-link bg-transparent border-0">@lang('pagination.previous')</span>
            </li>
        @else
            <li class="page-item bg-transparent">
                <a class="page-link bg-transparent border-0 font-weight-bold" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
            </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item bg-transparent">
                <a class="page-link bg-transparent border-0 font-weight-bold" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
            </li>
        @else
            <li class="page-item bg-transparent disabled" aria-disabled="true">
                <span class="page-link bg-transparent border-0">@lang('pagination.next')</span>
            </li>
        @endif
    </ul>
@endif
