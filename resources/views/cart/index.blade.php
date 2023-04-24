@extends('layouts.main')

@livewireStyles

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

@livewire('carts-index')

@livewire('counter')

<script src="https://cdn.kkiapay.me/k.js"></script>
@livewireScripts
@endsection