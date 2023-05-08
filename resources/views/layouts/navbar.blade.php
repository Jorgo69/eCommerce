<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('restau.index')}}" class="navbar-brand p-0">
        <h1 class="text-primary primary "><img src="{{asset('img/logoMaelan.png')}}" alt="Chez_Alexia"></h1>
        
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse text-sm" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="{{ route('restau.index') }}" class="nav-item nav-link {{ request()->routeIs('restau.index') ? 'active' : '' }}">Accueil</a>
            

            <a href="{{ route('restau.about') }}" class="nav-item nav-link {{ request()->routeIs('restau.about') ? 'active' : '' }}">A propos</a>
            {{-- <a href="{{ route('service') }}" class="nav-item nav-link {{ request()->routeIs('service') ? 'active' : '' }}">Service</a> --}}
            {{-- Only Connect --}}
               
                
           @if(Auth::check())
           <div class="nav-item dropdown">
               <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('cart.index', 'dashboard', 'profile.edit') ? 'active' : '' }}" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
               <div class="dropdown-menu m-0">
                   <a href="{{ route('cart.index')}}" class="dropdown-item">{{ __('Panier')}}</a>
                   <a href="{{ route('dashboard')}}" class="dropdown-item">{{ __('Tableau de Board')}}</a>
                   <a href="{{ route('profile.edit')}}" class="dropdown-item">{{ __('Mon Profile')}}</a>
                   <form style="width: 14%" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button  type="submit" class="btn btn-danger">Deconnexion</button>
                </form>
               </div>
           </div>
           {{-- @else --}}
        {{-- <a href="{{ route('login')}}" class="btn btn-light py-2 px-4">Connexion </a> --}}


           {{-- <a href="{{ route('dashboard') }}" class="nav-item nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">Tableau de Board</a> --}}
       @endif
       
            
            {{-- End Connect --}}

            <a href="{{ route('restau.contact') }}" class="nav-item nav-link {{ request()->routeIs('restau.contact') ? 'active' : '' }}">Contact</a>

            {{-- Cart Count --}}

            <div class="nav-item dropdown">
                <a href="{{ route('cart.index')}}" class="nav-link @if(Cart::count()>0) dropdown-toggle @endif {{ request()->routeIs('cart.index', 'products.index') ? 'active' : '' }}"  data-bs-toggle="dropdown" >{{__('Carte')}} 

                    @if (Cart::count() > 0)
                <span class="badge text-bg-secondary"> {{ Cart::count() }} </span>
                    @endif
                </a>

                @guest
                <div class="dropdown-menu m-0">
                    <a href="{{ route('cart.index')}}" class="dropdown-item">{{ __('Panier')}}</a>
                    <a href="{{ route('products.index')}}" class="dropdown-item">{{ __('Menu')}}</a>
                </div>
                @endguest

            </div>

            {{-- End Cart Count --}}
            {{-- <a href="{{ route('products.index')}}" class="nav-item nav-link {{ request()->routeIs('products.index') ? 'active' : '' }}">Nos Mets 
                @if (Cart::count() > 0)
                <span class="badge text-bg-secondary"> {{ Cart::count() }} </span>
                @endif
            </a> --}}

            </div>
            <a href="{{ route('restau.reservation')}}" class="btn btn-primary b-primary py-2 px-4 {{ request()->routeIs('restau.reservation') ? 'active' : '' }}">Reservez </a>

            @include('layouts.recherche')
        </div>

        
    {{-- </div> --}}
</nav>


@if (session('success'))
<div class="alert alert-success text-center mt-5">
    {{ session('success')}}
    {{-- <button type="button" class="close"><i class="bi bi-x-circle"></i></button> --}}
    <button type="button" class="close btn btn-outline-danger justify-content-right">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
        </svg>
        Fermer
      </button>
</div>
@endif