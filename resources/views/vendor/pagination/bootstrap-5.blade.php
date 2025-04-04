@if ($paginator->hasPages())
    <div class="pagination">
        <nav>
            <ul class="pagination mt-0">

                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="previtem disabled">
                        <a class="page-link"><i class="fas fa-regular fa-arrow-left me-2"></i> Prev</a>
                    </li>
                @else
                    <li class="previtem">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                            <i class="fas fa-regular fa-arrow-left me-2"></i> Prev
                        </a>
                    </li>
                @endif

                {{-- Pagination Links --}}
                <li class="justify-content-center pagination-center">
                    <div class="page-group">
                        <ul>
                            @foreach ($elements as $element)
                                @if (is_string($element))
                                    <li class="page-item disabled"><a class="page-link">{{ $element }}</a></li>
                                @endif

                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        @if ($page == $paginator->currentPage())
                                            <li class="page-item">
                                                <a class="active page-link" href="">{{ $page }} <span class="visually-hidden">(current)</span></a>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </li>

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="nextlink">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">
                            Next <i class="fas fa-regular fa-arrow-right ms-2"></i>
                        </a>
                    </li>
                @else
                    <li class="nextlink disabled">
                        <a class="page-link">Next <i class="fas fa-regular fa-arrow-right ms-2"></i></a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
@endif
