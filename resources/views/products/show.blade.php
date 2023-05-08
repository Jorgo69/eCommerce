@extends('layouts.main')
@section('contenu')

       <!-- Navbar & Hero Start -->
       <div class="container-xxl position-relative p-0">

        @include('layouts.navbar')

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Details du Produits</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            {{-- <li class="breadcrumb-item primary"><a href="{{ route('restau.index') }}">Accueil</a></li> --}}
                            {{-- <li class="breadcrumb-item"><a href="">Pages</a></li> --}}
                            <li class="breadcrumb-item text-white active" aria-current="page">Détails</li>
                        </ol>
                    </nav>
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
          <strong class="d-inline-block mb-2 text-primary primary"> @foreach ($product ->categories as $category)
            {{ $category->name}}
          @endforeach </strong>
          <strong class="mt-0">{{$product -> title}}</strong>
          <p class="mb-0">{!! $product -> description !!}</p>
          <div class="big">
            <span class="card-text mb-auto big"> <strong> {{$product -> price}} F CFA</strong></span>          
            <span class="col-md-auto big">
              <form action="{{ route('cart.store') }}" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{$product -> id}}">
                @if ($product->stocks > 0)
                <div class="col-md-1">
                  <input type="number" class="form-control" min="1" name="product_qty" max="{{$product->stocks}}" value="1">
                </div>
                <button class="btn btn-dark">Ajouter au Panier</button>

                <div class="d-flex mt-3">
                  <a href="{{route('products.index')}}" type="button" class="btn btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"></path>
                  </svg>
                    Retour
                </a>
                </div>
                @else
                <a href="{{route('products.index')}}" type="button" class="btn btn-outline-danger">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"></path>
                </svg>
                  Indisponible
              </a>
                @endif
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


