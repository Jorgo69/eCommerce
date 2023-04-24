@extends('layouts.main')
@section('contenu')
<script src="https://cdn.kkiapay.me/k.js"></script>
               <!-- Navbar & Hero Start -->
               <div class="container-xxl position-relative p-0">
                @include('layouts.navbar')
     
                 <div class="container-xxl py-5 bg-dark hero-header mb-5">
                     <div class="container my-5 py-5">
                         
                     </div>
                 </div>
             </div>
             <!-- Navbar & Hero End -->



<h1> 
    <form action="{{ route('checkout')}}" method="POST">
    @csrf
        <kkiapay-widget  amount="{{Cart::subtotal()}}"
        key="{{ env('KKIAPAY_PUBLIC_KEY')}}" url="<url-vers-votre-logo>"
        position="center" sandbox="true" data=""
        callback="{{ route('checkout') }}">
        </kkiapay-widget>
    </form> 
</h1>

<div class="container-xxl position-relative p-0">
    <div class="col">
        <div class="card-header"> Recapitulation </div>
        <div class="card-body">
            @forelse (Cart::content() as $product )
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-row align-items-center">
            <div class="ms-3">
                <h5>{{ $product -> model->title}}</h5>
                <h5>{{ $product ->qty}}</h5>
                <h5>{{ Cart::total()}}</h5>
                @forelse ('App\Models\Category'::all() as $category)
                <small class="small mb-0"> {{ $category->name}} </small>
                @empty
                <p> Aucune Category</p>        
                @endforelse

            </div>
                </div>
            </div>
            @empty
                
            @endforelse
        </div>
    </div>
</div>
    
@endsection