{{-- <x-app-layout> --}}
    @extends('layouts.main')
    @section('contenu')
                   <!-- Navbar & Hero Start -->
                   <div class="container-xxl position-relative p-0">
                    @include('layouts.navbar')
         
                     <div class="container-xxl py-5 bg-dark hero-header mb-5">
                         <div class="container my-5 py-5">
                             <div class="row align-items-center g-5">
                                 <div class="col-lg-6 text-center text-lg-start">
                                     <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                                     <p class="text-white animated slideInLeft mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                     <a href="{{ route('restau.index') }}#reservation" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
                                 </div>
                                 <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                                     <img class="img-fluid" src="img/hero.png" alt="">
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- Navbar & Hero End -->

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container-xxl position-relative p-0">
        @forelse (Auth()->user()->orders as $order)

        <div class="col">
          <div class="card h-100">
            {{-- <img src="..." class="card-img-top" alt="..."> --}}
            <div class="card-body">
                @foreach (unserialize($order->products) as $product)
              <h5 class="card-title">Nom du produits {{ $product[0]}}.</h5>
              {{-- <p class="card-text">Nom du produits {{ $product[0]}}.</p> --}}
              <p class="card-text">Prix du produits {{ $product[1]}}.</p>
              @endforeach
            </div>
            <div class="card-footer alert alert-warning text-center">
              <small class="text-body-primary ">
                Commande passée le {{ Carbon\Carbon::parse ($order->date_transaction)->format('d/m/Y à H:i') }}
                d'un montant de <strong> {{ $order->montant}} </strong> sans frais de transaction
              </small>
            </div>
          </div>
        </div>
        @empty
        <div class="container-xxl position-relative p-0">
            <div class="card-body alert alert-primary text-center">
              Aucune commande enreigistrée jusque là
            </div>
          </div>
    @endforelse
      </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                {{-- <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div> --}}
                {{-- <div class="p-6 text-gray-900 dark:text-gray-100">
                    @forelse (Auth()->user()->orders as $order)
                        <div class="card-header">
                            Commande passée le {{ Carbon\Carbon::parse ($order->date_transaction)->format('d/m/Y à H:i') }}
                            d'un montant de <strong> {{ $order->montant}} </strong> sans frais de transaction
                        </div>
                        <div class="card-body">
                            @foreach (unserialize($order->products) as $product)
                                <div class="">Nom du produits {{ $product[0]}}</div>
                                <div class="">Le prix {{ $product[1]}}</div>
                                
                            @endforeach
                        </div>
                    @empty
                        <div class="alert alert-primary"> Aucune commande enreigistrée</div>
                    @endforelse
                </div> --}}
            </div>
        </div>
    </div>
    
@endsection
{{-- </x-app-layout> --}}
