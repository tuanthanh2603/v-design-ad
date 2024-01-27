@if ($paginator->hasPages())
    <ul class="page-numbers nav-pagination links text-center">
        @if ($paginator->onFirstPage())
            <li>
                <span aria-current="page" class="page-number current">
                    <i class="fas fa-chevron-left"></i>
                </span>
            </li>
        @else
            <li>
                <a class="page-number" href="{{ $paginator->previousPageUrl() }}">
                    <i class="fas fa-chevron-left"></i>
                </a>
            </li>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li><span class="page-number">{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><span aria-current="page" class="page-number current">{{ $page }}</span></li>
                    @else
                        <li><a class="page-number" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li>
                <a class="next page-number" href="{{ $paginator->nextPageUrl() }}">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </li>
        @else
            <li>
                <span aria-current="page" class="page-number current">
                    <i class="fas fa-chevron-right"></i>
                </span>
            </li>
        @endif
    </ul>
@endif