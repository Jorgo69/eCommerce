@extends('layouts.main')

@livewireStyles

@section('contenu')
                   <!-- Navbar & Hero Start -->
                   <div class="container-xxl position-relative p-0">
                    @include('layouts.navbar')
                 </div>
                 <!-- Navbar & Hero End -->

@livewire('carts-index')

@livewire('counter')

<script src="https://cdn.kkiapay.me/k.js"></script>
@livewireScripts
@endsection