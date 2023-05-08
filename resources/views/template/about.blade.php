@extends('layouts.main')
@section('contenu')


               <!-- Navbar & Hero Start -->
               <div class="container-xxl position-relative p-0">

                @include('layouts.navbar')
     
                 <div class="container-xxl py-5 bg-dark hero-header mb-5">
                     <div class="container text-center my-5 pt-5 pb-4">
                         <h1 class="display-3 text-white mb-3 animated slideInDown">A propos</h1>
                     </div>
                 </div>
             </div>
             <!-- Navbar & Hero End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
     <div class="container">
        @forelse ($abouts as $about)
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="{{ asset('storage/' .$about ->image1) }}">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="{{ asset('storage/' .$about ->image2) }}" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="{{ asset('storage/' .$about ->image2) }}">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="{{ asset('storage/' .$about ->image4) }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary primary fw-normal">A propos de nous</h5>
                <h1 class="mb-4">{{ $about->titre}}</h1>
                <p class="mb-4">{!! $about->message !!}</p>              
            </div>
        </div> 
        @empty
        <div class="alert alert-danger text-center">Nous non prononcerons dans quelques instants ...</div>
        @endforelse

     </div>
 </div>
 <!-- About End -->


 <!-- Team Start -->
 <div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary primary fw-normal">Membres d'Equipe</h5>
            <h1 class="mb-5">Nos Chefs Cuistos</h1>
        </div>
        <div class="row g-4">
            @forelse ($membres as $membre)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="rounded-circle overflow-hidden m-4">
                        <img class="img-fluid" src="{{ asset('storage/' .$membre ->image) }}" alt="">
                    </div>
                    <h5 class="mb-0">{{$membre->nom_complet}}</h5>
                    <small>{{$membre->poste}}</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-square btn-primary b-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary b-primary mx-1" href="{{$membre->numero}}"><i class="fab fa-whatsapp" style="color: #511f4d;"></i></a>
                        <a class="btn btn-square btn-primary b-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            @empty
                <div class="alert alert-danger text-center">
                    Auncun Personnel Enreigistré pour le moment
                </div>
            @endforelse

        </div>
    </div>
</div>
 <!-- Team End -->
    
@endsection