<nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <div class="col-4 pt-1">
            <a class="btn btn-primary" href="{{ route('cart.index')}}">Panier <span class="badge text-bg-secondary"> {{ Cart::count() }} </span> </a>
            
            {{-- <a class="badge text-bg-danger" href="{{ route('cart.destroy', $product ->slug) }}"> Vider </a> --}}
          </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          {{-- <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5> --}}
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('restau.index')}}">Restaurant</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('products.index')}}">Nos Mets</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()-> name}}
              </a>
              <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('profile.edit')}}">Profile</a></li>
                    <li><a class="dropdown-item" href="{{ route('dashboard')}}">Tableau de bord</a></li>
                    {{-- Deconnexion --}}
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <x-dropdown-link class="text-dark" :href="route('logout')"
                              onclick="event.preventDefault();
                                          this.closest('form').submit();">
                          {{ __('Deconnexion') }}
                      </x-dropdown-link>
                  </form>
                    {{-- End Deconnexion --}}
                    
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#"></a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
              </a>
              <ul class="dropdown-menu">
                @forelse ('App\Models\Category'::all() as $category)
                    <li><a class="dropdown-item" href="{{ route('products.index', ['categorie' => $category->slug]) }}">{{ $category->name}}</a></li>
                @empty
                    <div class="alert alert-danger"> Aucune Categories</div>
                @endforelse
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#"></a></li>
              </ul>
            </li>
          </ul>
          <form action="{{ route('products.search')}}" class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" name="q" value="{{ request()->q ? : '' }}" placeholder="{{ request()->q ? '' : 'Search' }}" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          
          @if(request()->q)
            <script>
              document.querySelector('input[name="q"]').placeholder = "";
            </script>
          @endif
        </div>
      </div>
    </div>
  </nav>