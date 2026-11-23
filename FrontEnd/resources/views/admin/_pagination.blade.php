@php
    $last = $rows->lastPage();
    $cur  = $rows->currentPage();
    $nums = [];
    for ($i = 1; $i <= $last; $i++) {
        if ($i === 1 || $i === $last || abs($i - $cur) <= 1) { $nums[] = $i; }
        elseif (end($nums) !== '...') { $nums[] = '...'; }
    }
@endphp
<div class="table-foot">
  <form method="GET" class="perpage">
    @foreach (request()->except(['per', 'page']) as $k => $v)
      @if (! is_array($v))<input type="hidden" name="{{ $k }}" value="{{ $v }}">@endif
    @endforeach
    <label>Baris per halaman:</label>
    <select name="per" onchange="this.form.submit()">
      @foreach ([5, 10, 25, 50] as $o)<option value="{{ $o }}" @selected($rows->perPage() === $o)>{{ $o }}</option>@endforeach
    </select>
    <span class="range">{{ $rows->firstItem() ?? 0 }} - {{ $rows->lastItem() ?? 0 }} dari {{ $rows->total() }} item</span>
  </form>

  <div class="pager">
    @if ($rows->onFirstPage())
      <span class="pg disabled"><x-icon name="left" :size="14" /><x-icon name="left" :size="14" /></span>
      <span class="pg disabled"><x-icon name="left" :size="14" /></span>
    @else
      <a class="pg" href="{{ $rows->url(1) }}"><x-icon name="left" :size="14" /><x-icon name="left" :size="14" /></a>
      <a class="pg" href="{{ $rows->previousPageUrl() }}"><x-icon name="left" :size="14" /></a>
    @endif

    @foreach ($nums as $n)
      @if ($n === '...') <span class="pg dots">...</span>
      @elseif ($n === $cur) <span class="pg active">{{ $n }}</span>
      @else <a class="pg" href="{{ $rows->url($n) }}">{{ $n }}</a>
      @endif
    @endforeach

    @if ($rows->hasMorePages())
      <a class="pg" href="{{ $rows->nextPageUrl() }}"><x-icon name="right" :size="14" /></a>
      <a class="pg" href="{{ $rows->url($last) }}"><x-icon name="right" :size="14" /><x-icon name="right" :size="14" /></a>
    @else
      <span class="pg disabled"><x-icon name="right" :size="14" /></span>
      <span class="pg disabled"><x-icon name="right" :size="14" /><x-icon name="right" :size="14" /></span>
    @endif
  </div>
</div>
