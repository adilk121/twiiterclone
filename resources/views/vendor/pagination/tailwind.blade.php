@if ($paginator->hasPages())



    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="pagination f ac jb">
        <div class="f ja ac f1">
            @if ($paginator->onFirstPage())
                <span class="item f ac">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="link f ac">
                    {!! __('pagination.previous') !!}
                </a>
            @endif
            <div class="info">



                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    {!! __('to') !!}
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>


            </div>
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="link f ac ">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span class="item f ac ml-3">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>

    </nav>
@endif
