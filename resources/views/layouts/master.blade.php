
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    {{-- <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script> --}}
    {{-- @yield('extra-fedapay') --}}
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    @yield('extra-meta')
    <title>Blog Template · Bootstrap v5.3</title>
    {{-- @yield('extra-script') --}}
    @livewireStyles

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">

    

    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
{{-- <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json"> --}}
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
    <link href="cart.css" rel="stylesheet">
  </head>
  <body>
    
<div class="container">
@livewire('panier')

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      
      @forelse ($categories as $category)
      <a class="p-2 link-secondary" href="{{ route('products.index', ['categorie' => $category->slug]) }}"> {{ $category->name}} </a>
        
      @empty
        <div class="alert alert-danger"> Aucune Categories</div>
      @endforelse
    
    </nav>
  </div>
  
@if (session('success'))
  <div class="alert alert-success text-center">
    {{ session('success')}}
  </div>
@endif
@if (session('successd'))
  <div class="alert alert-danger text-center">
    {{ session('successd')}}
  </div>
@endif


</div>


@yield('contenu')

<footer class="blog-footer">
    <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer>
  
  
@yield('extra-js')
@livewireStyles
    </body>
  </html>
  