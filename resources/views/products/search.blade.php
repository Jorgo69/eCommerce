@extends('layouts.master')
@section('contenu')
<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently
        about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row mb-2 mb-5">
    @foreach ($products as $product)
    <div class="col-md-6 div">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          @foreach ($product ->categories as $category)
            {{ $category->name}}
          @endforeach
          <strong class="d-inline-block mb-2 text-primary">{{$product -> title}}</strong>
          <h3 class="mb-0">{{$product -> subtitle}}</h3>
          <div class="mb-1 text-muted">{{$product -> created_at ->format('d/m/Y')}}</div>
          <p class="card-text mb-auto">{{$product -> getPrice()}}</p>
          <a href="{{ route('products.show', $product ->slug)}}" class="btn btn-primary stretched-link">Voir Plus</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img width="300px" height="auto" src="{{ asset('storage/' .$product ->image) }}" alt="">
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