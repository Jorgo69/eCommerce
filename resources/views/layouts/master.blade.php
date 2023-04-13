
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
    <title>Chez Alexia</title>
    {{-- @yield('extra-script') --}}
    @livewireStyles
    <link rel="stylesheet" href="ecommerce.css">
    <link rel="canonical" href="{{ asset('https://getbootstrap.com/docs/5.3/examples/blog/')}}">

    

    
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css')}}">
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="{{ asset('/docs/5.3/assets/img/favicons/apple-touch-icon.png')}}" sizes="180x180">
<link rel="icon" href="{{ asset('/docs/5.3/assets/img/favicons/favicon-32x32.png')}}" sizes="32x32" type="image/png">
<link rel="icon" href="{{ asset('/docs/5.3/assets/img/favicons/favicon-16x16.png')}}" sizes="16x16" type="image/png">
{{-- <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json"> --}}
<link rel="mask-icon" href="{{ asset('/docs/5.3/assets/img/favicons/safari-pinned-tab.svg')}}" color="#712cf9">
<link rel="icon" href="{{ asset('/docs/5.3/assets/img/favicons/favicon.ico')}}">
<meta name="theme-color" content="#712cf9">

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('blog.css')}}" rel="stylesheet">
    <link href="{{ asset('cart.css')}}" rel="stylesheet">
  </head>
  <body>
    
<div class="container">
@livewire('panier')

  <div class="nav-scroller py-1 mb-2">
    @include('layouts.recherche')
  </div>
  

  <!-- Button trigger modal -->
  @if (session('success'))
  <!-- Modal -->
  <div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Message Alerte</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body bg-warning text-light">
          {{ session('success') }}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- JavaScript pour déclencher automatiquement le modal -->
  <script>
    // Utiliser la méthode window.onload pour s'assurer que la page est complètement chargée avant d'exécuter le script
    window.onload = function() {
      // Vérifier s'il y a un message de succès en session
      if ('{{ session('success') }}') {
        // Sélectionner le modal et le déclencher automatiquement
        var modal = document.getElementById('exampleModal');
        var modalInstance = new bootstrap.Modal(modal);
        modalInstance.show();
      }
    }
  </script>
  @endif
  


@if (request() -> input('q'))
<div class="alert alert-success text-center"> {{ $products ->total()}} resulatat pour la recherche "{{  request() -> q}}"
</div>
@endif
  
@if (session('successd'))
  <div class="alert alert-danger text-center">
    {{ session('successd')}}
  </div>
@endif

@if (count($errors) >0)
<div class="alert alert-danger">
  <ul class="mt-0 mb-0">
    @foreach ($errors->all() as $error)
    <li>{{$error}} </li>        
    @endforeach
  </ul>
</div>
  
@endif


</div>


@yield('contenu')

<footer class="blog-footer">
    <p>Blog template built for <a href="{{ asset('https://getbootstrap.com/')}}">Bootstrap</a> by <a href="{{ asset('https://twitter.com/mdo')}}">@mdo</a>.</p>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer>

<script src="{{ asset('bootstrap.min.js')}}"></script>
  
@yield('extra-js')
@livewireStyles
    </body>
  </html>
  