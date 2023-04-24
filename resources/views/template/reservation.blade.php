@extends('layouts.main')
@section('contenu')

       <!-- Navbar & Hero Start -->
       <div class="container-xxl position-relative p-0">

        @include('layouts.navbar')

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Réservation</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="{{ route('restau.index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Réservation</li>
                        </ol>
                    </nav>
                </div>
            </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Reservation Start -->
    <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="video">
                    <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 bg-dark d-flex align-items-center">
                <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                    <h5 id="reservation" class="section-title ff-secondary text-start text-primary primary fw-normal">Reservation</h5>
                    <h1 class="text-white mb-4">Reservez en ligne</h1>
                    <form method="POST" action="{{ route('reservant')}}">
                       @csrf
                       <div class="row g-3">
                           <div class="col-md-12">
                               <div class="form-floating">
                                   <input type="text" name="nom" class="form-control" id="name" placeholder="Your Name" @auth value=" {{ old('name', auth()->user()->name) }}" @endauth>

                                   {{-- <input type="text" name="nom" class="form-control" id="name" placeholder="Your Name" value="{{ old('name', auth()->user()->first_name . ' ' . auth()->user()->surname) }}"> --}}

                                   <label for="name">Votre Nom Complet</label>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-floating">
                                   <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" @auth value="{{ old('name', auth()->user()->email) }}" @endauth>
                                   <label for="email">Votre adresse Mail</label>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-floating">
                                   <input type="number" name="numero" class="form-control" id="number" placeholder="Numero Whatsapp Valide">
                                   <label for="number">Numero Whatsapp Valide</label>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-floating date" data-target-input="nearest">
                                   {{-- <input type="datetime-local" name="date_heure" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Heure" data-target="#date3" data-toggle="datetimepicker" /> --}}
                                   <input type="datetime-local" name="date_heure" class="form-control datetimepicker-input"  value="{{ old('date', date('Y-m-d\TH:i:s', strtotime('+1 hour', time()))) }}">
                                   <label for="datetime">Date & Heure</label>
                               </div>
                               <script>
                           // Récupérez l'élément HTML du champ de date et heure
                           const dateHeureInput = document.getElementById('date_heure');

                           // Créez une nouvelle instance de l'objet Date avec l'heure actuelle
                           const now = new Date();

                           // Ajoutez une heure pour obtenir l'heure GMT+1
                           now.setHours(now.getHours() + 1);

                           // Formatez la date et l'heure selon le fuseau horaire de l'utilisateur
                           const formattedDateHeure = now.toLocaleString('fr-FR', { timeZone: 'Europe/Paris' });

                           // Pré-remplissez le champ de date et heure avec la valeur formatée
                           dateHeureInput.value = formattedDateHeure;


                           const dateHeureInput = document.getElementById('datetime');

                           dateHeureInput.addEventListener('change', function() {
                           const selectedDateHeure = new Date(this.value);
                           const now = new Date();
                           if (selectedDateHeure < now) {
                               alert('Vous ne pouvez pas sélectionner une date et une heure déjà passées.');
                               this.value = '';
                           }
                               });
                               </script>
                           </div>
                           <div class="col-md-6">
                               <div class="form-floating">
                                   <select class="form-select" name="table" id="select1">
                                     <option value="1">1 Personne </option>
                                     <option value="2">2 Personne </option>
                                     <option value="3">3 Personne </option>
                                   </select>
                                   <label for="select1">No Of People</label>
                                 </div>
                           </div>
                           <div class="col-12">
                               <div class="form-floating">
                                   <textarea name="requete" class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                   <label for="message">Special Request</label>
                               </div>
                           </div>
                           <div class="col-12">
                               <input class="btn btn-primary b-primary w-100 py-3" value="Reservez" type="submit">
                           </div>
                       </div>
                   </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation Start -->

 
    
@endsection
