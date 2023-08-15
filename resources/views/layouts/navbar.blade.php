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


{{-- @if (session('success'))
<div class="alert alert-success alert-dismissible fade show text-center mt-5" role="alert">
    {{ session('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif --}}
