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

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/ab1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/cuisinier.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about1.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/ab2.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary primary fw-normal">A propos de nous</h5>
                        <h1 class="mb-4">Bienvenue chez<i class="fa fa-utensils text-primary primary me-2"></i>Chez Alexia</h1>
                        <p class="mb-4">Chez Alexia, nous sommes passionnés par la cuisine locale et les saveurs authentiques. Situé au cœur de <span class="text-strong"> Cotonou </span>, notre restaurant est réputé pour sa cuisine de qualité et son ambiance chaleureuse.</p>
                        <p class="mb-4">Notre spécialité est de mettre à l'honneur les délices culinaires de notre région. Nous croyons en l'importance de travailler avec des ingrédients frais et locaux pour garantir des plats savoureux et sains à nos clients. Notre équipe de chefs talentueux met tout son savoir-faire et sa créativité pour créer des mets uniques, qui célèbrent les traditions culinaires locales avec une touche contemporaine.</p>
                        <p class="mb-4">Chez Chez Alexia, nous comprenons l'importance de la commodité pour nos clients. C'est pourquoi nous offrons un service de livraison pratique, afin que vous puissiez profiter de nos délicieux plats directement chez vous ou au bureau. Que vous ayez envie de déguster notre célèbre [nom d'un plat ou d'un produit phare] ou de découvrir nos options de fast food revisitées, nous veillons à ce que votre commande soit préparée avec soin et livrée à votre porte dans les meilleurs délais.</p>
                        <p class="mb-4">De plus, nous offrons également la possibilité de réserver une table pour profiter d'une expérience culinaire inoubliable chez Chez Alexia. Que ce soit pour un dîner romantique, un repas en famille ou un déjeuner d'affaires, notre équipe attentionnée sera ravie de vous accueillir et de vous offrir un service personnalisé pour rendre votre visite des plus agréables.
                            Chez Alexia, nous croyons que chaque repas est une occasion de se faire plaisir et de partager de bons moments. Rejoignez-nous et laissez-nous vous emmener dans un voyage gustatif exceptionnel, où les saveurs locales rencontrent l'innovation culinaire.
                        </p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">

                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                        {{-- <a class="btn btn-primary b-primary py-3 px-5 mt-2" href="{{ route('restau.about')}}">Lire Plus</a> --}}
                    </div>
                </div>
            </div>
        </div>
        


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
                        <a class="btn btn-square btn-primary b-primary mx-1" href="https://wa.me/+229{{$membre->numero}}"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-square btn-primary b-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            @empty

            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="{{asset('img/mr1.jpg')}}" alt="">
                        </div>
                        <h5 class="mb-0">Mr Premier</h5>
                        <small>Cuisinier</small>
                        <div class="d-flex justify-content-center mt-3">
                            {{-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a> --}}
                            <a class="btn btn-square btn-primary b-primary mx-1" href="https://wa.me/+22969238265"><i class="fab fa-whatsapp"></i></a>
                            {{-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="img/mr2.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Mr Deuxieme</h5>
                        <small>Cuisinier</small>
                        <div class="d-flex justify-content-center mt-3">
                            {{-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a> --}}
                            <a class="btn btn-square btn-primary b-primary mx-1" href="https://wa.me/+22969238265"><i class="fab fa-whatsapp"></i></a>
                            {{-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="img/md1.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Madame Premier</h5>
                        <small>Serveuse</small>
                        <div class="d-flex justify-content-center mt-3">
                            {{-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a> --}}
                            <a class="btn btn-square btn-primary b-primary mx-1" href="https://wa.me/+22969238265"><i class="fab fa-whatsapp"></i></a>
                            {{-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="img/about1.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Mme Gerante</h5>
                        <small>Gerante</small>
                        <div class="d-flex justify-content-center mt-3">
                            {{-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a> --}}
                            <a class="btn btn-square btn-primary b-primary mx-1" href="https://wa.me/+22969238265"><i class="fab fa-whatsapp"></i></a>
                            {{-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforelse

        </div>
    </div>
</div>
 <!-- Team End -->
    
@endsection