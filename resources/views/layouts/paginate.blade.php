<ul class="pagination justify-content-center">
  @if($paginator->lastPage() > 1)
  <li class="page-item">
      <a class="page-link" href="{{ $paginator->url(1) }}" style="cursor: not-allowed" >
        <i class="fa fa-angle-left"></i>
        <span class="sr-only">Previous</span>
      </a>
  </li>

  @for($i = 1; $i <= $paginator->lastPage(); $i ++ )
    @if($paginator->currentPage() == $i)
    <li class="page-item"><a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
    @else
    <li class="page-item"><a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
    @endif
  @endfor

  <li class="page-item">
    <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">
      <i class="fa fa-angle-right"></i>
      <span class="sr-only">Next</span>
    </a>
  </li>
  @endif
</ul>
