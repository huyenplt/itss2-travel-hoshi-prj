@if ($paginator->hasPages())
<nav aria-label="Page navigation example">
    <ul class="pagination pagination-sm justify-content-center">
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled">{{ $element }}</li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
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
@endif
