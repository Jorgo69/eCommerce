@extends('layouts.main')
@section('contenu')
               <!-- Navbar & Hero Start -->
               <div class="container-xxl position-relative p-0">
                @include('layouts.navbar')     
                 <div class="container-xxl py-5 bg-dark hero-header mb-5">
                    {{-- <img src="{{asset('../img/bg-hero.jpg')}}" alt=""> --}}
                     <div class="container my-5 py-5">
                         <div class="row align-items-center g-5">
                             <div class="col-lg-6 text-center text-lg-start">
                                 <h4 class="display-3 text-white animated slideInLeft">SERVICE<br> TRAITEUR & LIVRAISON</h4>
                                 <p class="text-white animated slideInLeft mb-4 pb-2">Spécialité Africaine ‘AMALA - Télibô’</p>
                                 <a href="#reservation" class="btn btn-primary b-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Reservez une Table</a>
                             </div>
                             <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                                 <img class="img-fluid" src="{{asset('img/met1.png')}}" alt="">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Navbar & Hero End -->

     <!-- Menu Start -->
     <div class="container-xxl py-5">
         <div class="container">
             <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                 <h5 class="section-title ff-secondary text-center text-primary primary fw-normal">Notre Menu</h5>
                 <h1 class="mb-5">Nos dernieres ajouts</h1>
             </div>
             <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">

                 <div class="tab-content">
                     <div id="tab-1" class="tab-pane fade show p-0 active">
                         <div class="row g-4">
                            @forelse ($products as $product)
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('products.show', $product ->id)}}"> <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('storage/' .$product ->image) }}" alt="" style="width: 80px;"> </a>
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>{{$product->title}}</span>
                                            <span class="text-primary primary"> {{$product -> price}} F CFA </span>
                                        </h5>
                                        <small class="fst-italic">{{$product -> subtitle}}</small>
                                    </div>
                                </div>
                            </div>
                            @empty
                                
                            @endforelse
                            
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary b-primary col-md-3 ml-auto" type="button" onclick="window.location.href='/boutique'">Voir Plus</button>
                            </div>
                            
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Menu End -->



     <!-- Service Start -->
     <div class="container-xxl py-5">
         <div class="container">
             <div class="row g-4">
                 <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                     <div class="service-item rounded pt-3">
                         <div class="p-4">
                             <i class="fa fa-3x fa-user-tie text-primary primary mb-4"></i>
                             <h5>Chef Custos</h5>
        <p>Nos chefs talentueux et passionnés, guidés par le Chef Custos, maîtrisent l'art culinaire pour vous offrir des plats d'exception. Leur expertise, leur créativité et leur souci du détail se reflètent dans chaque bouchée, vous garantissant une expérience culinaire inoubliable.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                     <div class="service-item rounded pt-3">
                         <div class="p-4">
                             <i class="fa fa-3x fa-utensils text-primary primary mb-4"></i>
                             <h5>Qualité de la nourriture</h5>
                             <p>Chez Chez Alexia, nous nous engageons à vous offrir une expérience culinaire exceptionnelle. Notre équipe de chefs talentueux met tout en œuvre pour sélectionner les meilleurs ingrédients locaux et créer des plats savoureux qui éveilleront vos papilles.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                     <div class="service-item rounded pt-3">
                         <div class="p-4">
                             <i class="fa fa-3x fa-cart-plus text-primary primary mb-4"></i>
                             <h5>Commande en ligne, 24h/24</h5>
        <p>Profitez de la commodité de notre système de commande en ligne disponible 24h/24. Que ce soit pour un délicieux repas tardif ou une réservation anticipée, vous pouvez passer commande à tout moment, où que vous soyez. Nous nous assurons que votre repas soit préparé avec soin et prêt à être dégusté selon vos préférences.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                     <div class="service-item rounded pt-3">
                         <div class="p-4">
                             <i class="fa fa-3x fa-headset text-primary primary mb-4"></i>
                             <h5>Service 24/7</h5>
        <p>Chez Chez Alexia, nous comprenons que vos envies culinaires ne se limitent pas aux heures traditionnelles. C'est pourquoi nous sommes là pour vous servir 24 heures sur 24, 7 jours sur 7. Que vous ayez une fringale tard le soir ou une envie soudaine de délicieuse cuisine à l'aube, notre équipe est prête à préparer et à livrer votre commande à tout moment. Vous pouvez compter sur nous pour satisfaire votre appétit, peu importe l'heure.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Service End -->


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
                                    
                                    N'hésitez pas à personnaliser ce contenu en fonction de votre restaurant, de votre ville et des plats spécifiques que vous proposez. Bonne chance avec votre site de restaurant en ligne !
                                    
                                    
                                    
                                    
                                    
                                    
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
                                    <input type="datetime-local" name="date_heure" class="form-control datetimepicker-input"  value="{{ old('date', date('Y-m-d\TH:i:s', strtotime('+1 hours', time()))) }}">
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
                                      <option value="4">4 Personne </option>
                                      <option value="5">5 Personne </option>
                                      <option value="+5+">5 Personne et plus</option>
                                    </select>
                                    <label for="select1">Nbre de Personnes</label>
                                  </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="requete" class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                    <label for="message">Requete Speciale</label>
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
                        <a class="btn btn-square btn-primary b-primary mx-1" href="https://wa.me/+229{{$membre->numero}}"><i class="fab fa-whatsapp" style="color: #511f4d;"></i></a>
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
                            <a class="btn btn-square btn-primary b-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary b-primary mx-1" href="https://wa.me/+22969238265"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary b-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
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
                            <a class="btn btn-square btn-primary b-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary b-primary mx-1" href="https://wa.me/+22969238265"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary b-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
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
                            <a class="btn btn-square btn-primary b-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary b-primary mx-1" href="https://wa.me/+22969238265"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary b-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
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
                            <a class="btn btn-square btn-primary b-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary b-primary mx-1" href="https://wa.me/+22969238265"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary b-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            @endforelse

        </div>
    </div>
</div>
<!-- Team End -->


     <!-- Testimonial Start -->
     {{-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
         <div class="container">
             <div class="text-center">
                 <h5 class="section-title ff-secondary text-center text-primary primary  fw-normal">Temoignage</h5>
                 <h1 class="mb-5">Nos clients parlent!!!</h1>
             </div>
             <div class="owl-carousel testimonial-carousel">
                 <div class="testimonial-item bg-transparent border rounded p-4">
                     <i class="fa fa-quote-left fa-2x text-primary primary mb-3"></i>
                     <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                     <div class="d-flex align-items-center">
                         <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                         <div class="ps-3">
                             <h5 class="mb-1">Client Name</h5>
                             <small>Profession</small>
                         </div>
                     </div>
                 </div>
                 <div class="testimonial-item bg-transparent border rounded p-4">
                     <i class="fa fa-quote-left fa-2x text-primary primary mb-3"></i>
                     <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                     <div class="d-flex align-items-center">
                         <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                         <div class="ps-3">
                             <h5 class="mb-1">Client Name</h5>
                             <small>Profession</small>
                         </div>
                     </div>
                 </div>
                 <div class="testimonial-item bg-transparent border rounded p-4">
                     <i class="fa fa-quote-left fa-2x text-primary primary mb-3"></i>
                     <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                     <div class="d-flex align-items-center">
                         <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                         <div class="ps-3">
                             <h5 class="mb-1">Client Name</h5>
                             <small>Profession</small>
                         </div>
                     </div>
                 </div>
                 <div class="testimonial-item bg-transparent border rounded p-4">
                     <i class="fa fa-quote-left fa-2x text-primary primary mb-3"></i>
                     <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                     <div class="d-flex align-items-center">
                         <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                         <div class="ps-3">
                             <h5 class="mb-1">Client Name</h5>
                             <small>Profession</small>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div> --}}
     <!-- Testimonial End -->
    
@endsection