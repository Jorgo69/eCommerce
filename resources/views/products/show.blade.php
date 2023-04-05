@extends('layouts.master')
@section('contenu')
 <main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="row big border rounded overflow-hidden mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary"> CAtegories</strong>
          <strong class="mt-0">{{$product -> title}}</strong>
          <h3 class="mb-0">{!! $product -> description !!}</h3>
          <div class="big">
            <span class="card-text mb-auto big"> <strong> {{Cart :: subtotal()}} F CFA</strong></span>          
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
  <style>
    .big{
      width: ;
    }
  </style>

</main> 
@endsection


