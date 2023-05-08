  <form action="{{ route('products.search')}}" weight="50" class="d-flex m-3" role="search">
    <input class="form-control me-2" type="recherche" name="q" value="{{ request()->q ? : '' }}" placeholder="{{ request()->q ? '' : 'Rechercher' }}" aria-label="recherche">
    <button class="btn btn-outline-light btn-sm" type="submit">Recherche</button>
  </form>
  
  @if(request()->q)
    <script>
      document.querySelector('input[name="q"]').placeholder = "";
    </script>
  @endif