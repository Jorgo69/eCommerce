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
                                 <a href="#reservation" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
                             </div>
                             <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                                 <img class="img-fluid" src="img/hero.png" alt="">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Navbar & Hero End -->

 <main class="container">
  {{-- <a class="btn btn-primary" href="{{ route('cart.index')}}">Panier <span class="badge text-bg-secondary"> {{ Cart::count() }} </span> </a> --}}
  <div class="row">
    <div class="col-md-12">
      <div class="row big border rounded overflow-hidden mb-4 shadow-sm position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary"> Categories</strong>
          <strong class="mt-0">{{$product -> title}}</strong>
          <p class="mb-0">{!! $product -> description !!}</p>
          <div class="big">
            <span class="card-text mb-auto big"> <strong> {{$product -> price}} F CFA</strong></span>          
            <span class="col-md-auto big">
              <form action="{{ route('cart.store') }}" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{$product -> id}}">
                <button class="btn btn-dark">Ajouter au Panier</button>
              </form>
            </span>
          </div>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img width="300px" height="300px" src="{{ asset('storage/' .$product ->image) }}" alt="">
        </div>
      </div>
    </div>
  </div>
  


</main> 
@endsection


