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

<script src="https://cdn.kkiapay.me/k.js"></script>
@livewireScripts
@endsection