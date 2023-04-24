<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
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
               </div>
           </div>
           {{-- <a href="{{ route('dashboard') }}" class="nav-item nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">Tableau de Board</a> --}}
       @endif
       
            
            {{-- End Connect --}}

            <a href="{{ route('restau.contact') }}" class="nav-item nav-link {{ request()->routeIs('restau.contact') ? 'active' : '' }}">Contact</a>
            <a href="{{ route('products.index')}}" class="nav-item nav-link {{ request()->routeIs('products.index') ? 'active' : '' }}">Nos Mets @auth <span class="badge text-bg-secondary"> {{ Cart::count() }} </span>@endauth </a>
            </div>
            <a href="{{ route('restau.reservation')}}" class="btn btn-primary b-primary py-2 px-4 {{ request()->routeIs('restau.reservation') ? 'active' : '' }}">Reservez </a>
            @include('layouts.recherche')
        </div>
        
    {{-- </div> --}}
</nav>


@if (session('success'))
<div class="alert alert-success text-center">
    {{ session('success')}}
    <button type="button" class="close">Sup</button>
</div>
@endif