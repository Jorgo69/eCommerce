  <form action="{{ route('products.search')}}" weight="50" class="d-flex m-3" role="search">
    <input class="form-control me-2" type="search" name="q" value="{{ request()->q ? : '' }}" placeholder="{{ request()->q ? '' : 'Search' }}" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>
  
  @if(request()->q)
    <script>
      document.querySelector('input[name="q"]').placeholder = "";
    </script>
  @endif