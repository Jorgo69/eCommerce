@extends('layouts.main')
@section('contenu')
               <!-- Navbar & Hero Start -->
               <div class="container-xxl position-relative p-0">
                @include('layouts.navbar')
     
                 <div class="container-xxl py-5 bg-dark hero-header mb-5">
                     <div class="container my-5 py-5">
                         
                     </div>
                 </div>
             </div>
             <!-- Navbar & Hero End -->


<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently
        about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
      @forelse ($categories::all() as $category)
      <li class="nav-item">
        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" href="{{ route('products.index', ['categorie' => $category->slug]) }}">
            {{-- <i class="fa fa-coffee fa-2x text-dark"></i> --}}
            <div class="ps-3">
                {{-- <small class="text-body">Popular</small> --}}
                <h6 class="mt-n1 mb-0">{{ $category->name}}</h6>
            </div>
        </a>
      </li>
      @empty
        <div class="alert alert-danger"> Aucune Categorie Enreigistrée</div>
      @endforelse
    </ul>
  </div>

  <div class="row mb-2 mb-5">

  @foreach ($products as $product)
  <div class="card mb-3 mx-5" style="max-width: 540px;">

    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('storage/' .$product ->image) }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-header ">
          <h5 class="card-header"> @foreach ($product ->categories as $category)
            {{ $category->name}}
          @endforeach</h5>
        </div>
        <div class="card-body">
          <h5 class="card-title text-primary primary">{{$product -> title}}</h5>
          <p class="card-text">{{$product -> subtitle}}.</p>
          <p class="card-text"><strong>{{$product -> price}} F CFA</strong></p>
          <p class="card-text"><small class="text-body-secondary">{{$product -> created_at ->format('d/m/Y')}}</small></p>
          <div class="d-flex justify-content-end">
            <a href="{{ route('products.show', $product ->slug)}}" class="btn btn-dark stretched-link">Voir Plus</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  </div>
  

  <style>
    .div{
      width: 600px;
      height: auto
    }
    .pagination{
      margin: 10px;
    }
    .pagination span svg, .pagination a svg {
  width: 20px;
  height: 20px;
}
  </style>
<div class="pagination">
  {{ $products->appends(request()->input())->links() }}
</div>
</main>
@endsection