@if ($paginator->hasPages())
    <nav class="navigation pagination" role="navigation">
        <div class="nav-links">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a class="prev page-numbers disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="lnr lnr-arrow-{{(App::isLocale('ar') ? 'right' : 'left')}}"></span>
                </a>
            @else
                <a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                    <span class="lnr lnr-arrow-{{(App::isLocale('ar') ? 'right' : 'left')}}"></span>
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <a class="page-numbers disabled" aria-disabled="true"><span class="page-link">{{ $element }}</a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="page-numbers current active" aria-current="page">{{ $page }}</a>
                        @else
                            <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                    <span class="lnr lnr-arrow-{{(App::isLocale('ar') ? 'left' : 'right')}}"></span>
                </a>
            @else
                <a class="next page-numbers disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="lnr lnr-arrow-{{(App::isLocale('ar') ? 'left' : 'right')}}"></span>
                </a>
            @endif
        </div>
    </nav>
@endif







