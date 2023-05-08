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
@if (!session()->has('coupon'))
<form action="{{ route('checkout')}}" method="POST">
    @csrf
        <kkiapay-widget  amount="{{Cart::subtotal()}}"
        key="{{ env('KKIAPAY_PUBLIC_KEY')}}" url="<url-vers-votre-logo>"
        position="center" sandbox="true" data=""
        callback="{{ route('checkout') }}">
        </kkiapay-widget>
    </form> 
@endif
</h1>

<div class="container-xxl position-relative p-0">
    <div class="col">
        <div class="card-header"> Recapitulation </div>
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-row align-items-center">
                    <div class="ms-3">
                            @forelse (Cart::content() as $product )
                            <h5> Vous avez choisi  {{ $product->model->title}}</h5>
                            <h5>{{ $product->qty}} Quantitée(es)</h5> 
                            <h5>Pour une somme totale à payer de {{ Cart::subtotal()}}</h5>
                            <h5> {{ $product->model->ville}} </h5>
                            @empty
                            <div class="alert alert-warning">Rien à récapituler </div>
                        @endforelse
                        </div>
                    </div>
                    <div class="">
                        A livrer a {{ session('ville') }}, quartier {{ session('quartier') }}
                    </div>
                    {{-- <form action="{{ route('checkout')}}" method="post">
                        @csrf
                        <button class="btn btn-primary">Essayons</button>
                    </form> --}}
                </div>

            @if (session()->has('coupon'))
            {{-- {{dd(session('coupon.code'))}} --}}
                <p>Coupon code: {{ session('coupon.code') }}</p>
                <p>Discount: {{ session('coupon.remise') }}</p>
                <form action="{{ route('checkout')}}" method="POST">
                    @csrf
                        <kkiapay-widget  amount="{{session('coupon.remise')}}"
                        key="{{ env('KKIAPAY_PUBLIC_KEY')}}" url="<url-vers-votre-logo>"
                        position="center" sandbox="true" data=""
                        callback="{{ route('checkout') }}">
                        </kkiapay-widget>
                    </form> 
            @endif

        </div>
        
    </div>
</div>

<div class="container-xxl position-relative p-0">
    {{-- <div class="col">
        <div class="card-body">
            <div class="form-group">
                @foreach ($villes as $ville)
                <input type="radio" name="{{$ville->ville}}" id=""> <label for="">{{$ville->ville}}</label>
                @endforeach
            </div>
            <div class="form-group">
                <select class="form-select" name="ville" id="">
                    @foreach ($quartiers as $quartier)
                    <option value="">{{$quartier->quartier}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div> --}}
    
    
    {{-- <form action="{{route('checkout')}}" method="post">
        @csrf
        <div class="col">
            <div class="card-body">
                <div class="form-group">
                    <label for="ville-select">Ville :</label>
                    <select class="form-select" id="ville-select" name="ville" onchange="afficherQuartiers()">
                        <option value="">Sélectionner une ville</option>
                        @foreach ($villes as $ville)
                            <option value="{{ $ville->id }}">{{ $ville->ville }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-3" id="quartiers-container" style="display:none;">
                    <select class="form-select" name="quartier" id="quartiers-select">
                        <option value="">Selectionner</option>
                        @foreach ($quartiers as $quartier)
                        <option value="{{$quartier->id}}" class="quartier-option ville-{{$quartier->ville_id}}">{{$quartier->quartier}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    
        <script>
            function afficherQuartiers() {
                // Récupérer la valeur de l'option de ville sélectionnée
                var villeId = document.getElementById("ville-select").value;
    
                // Masquer le champ de sélection de quartier s'il n'y a pas de ville sélectionnée
                if (villeId == "") {
                    document.getElementById("quartiers-container").style.display = "none";
                    return;
                }
    
                // Afficher le champ de sélection de quartier
                document.getElementById("quartiers-container").style.display = "block";
    
                // Récupérer toutes les options de quartier
                var options = document.getElementsByClassName("quartier-option");
    
                // Masquer toutes les options de quartier
                for (var i = 0; i < options.length; i++) {
                    options[i].style.display = "none";
                }
    
                // Afficher les options de quartier qui ont le même ville_id que l'option de ville sélectionnée
                var quartiers = document.getElementsByClassName("quartier-option ville-" + villeId);
                for (var i = 0; i < quartiers.length; i++) {
                    quartiers[i].style.display = "block";
                }
            }
        </script>
    
        <input type="submit" value="Valider">
    </form> --}}
    
    
</div>



    
@endsection