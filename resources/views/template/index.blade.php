@extends('layouts.main')
@section('contenu')
               <!-- Navbar & Hero Start -->
               <div class="container-xxl position-relative p-0">
                @include('layouts.navbar')     
                 <div class="container-xxl py-5 bg-dark hero-header mb-5">
                     <div class="container my-5 py-5">
                         <div class="row align-items-center g-5">
                             <div class="col-lg-6 text-center text-lg-start">
                                 <h4 class="display-3 text-white animated slideInLeft">SERVICE<br> TRAITEUR & LIVRAISON</h4>
                                 <p class="text-white animated slideInLeft mb-4 pb-2">Spécialité Africaine ‘AMALA - Télibô’</p>
                                 <a href="#reservation" class="btn btn-primary b-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Reservez une Table</a>
                             </div>
                             <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                                 <img class="img-fluid" src="img/hero.png" alt="">
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
                                    <a href="{{ route('products.show', $product ->slug)}}"> <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('storage/' .$product ->image) }}" alt="" style="width: 80px;"> </a>
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
                             <h5>Chefs Custos</h5>
                             <p>Nous sommes composes de meilleure chefs dans notre restau</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                     <div class="service-item rounded pt-3">
                         <div class="p-4">
                             <i class="fa fa-3x fa-utensils text-primary primary mb-4"></i>
                             <h5>Qualite de la nourriture</h5>
                             <p>Votre meilleure alimenrtation est notre raison voila la raison pour laquelle nous avons opte pour de super meilleures qualite</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                     <div class="service-item rounded pt-3">
                         <div class="p-4">
                             <i class="fa fa-3x fa-cart-plus text-primary primary mb-4"></i>
                             <h5>Online Order</h5>
                             <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                     <div class="service-item rounded pt-3">
                         <div class="p-4">
                             <i class="fa fa-3x fa-headset text-primary primary mb-4"></i>
                             <h5>24/7 Service</h5>
                             <p>Pour vous mieux vous servire nous avons opte pour un service libre et ouvert en plus proche de vous durant la semaine</p>
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
             <div class="row g-5 align-items-center">
                 <div class="col-lg-6">
                     <div class="row g-3">
                         <div class="col-6 text-start">
                             <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg">
                         </div>
                         <div class="col-6 text-start">
                             <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg" style="margin-top: 25%;">
                         </div>
                         <div class="col-6 text-end">
                             <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                         </div>
                         <div class="col-6 text-end">
                             <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <h5 class="section-title ff-secondary text-start text-primary primary fw-normal">A propos de Nous</h5>
                     <h1 class="mb-4">Bienvenu  <i class="fa fa-utensils text-primary primary me-2"></i>Chez Alexia</h1>
                     <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                     <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                     <div class="row g-4 mb-4">
                         <div class="col-sm-6">
                             <div class="d-flex align-items-center px-3">
                                 <h1 class="flex-shrink-0 display-5 text-primary primary mb-0" data-toggle="counter-up">15</h1>
                                 <div class="ps-4">
                                     <p class="mb-0">Years of</p>
                                     <h6 class="text-uppercase mb-0">Experience</h6>
                                 </div>
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="d-flex align-items-center px-3">
                                 <h1 class="flex-shrink-0 display-5 text-primary primary mb-0" data-toggle="counter-up">50</h1>
                                 <div class="ps-4">
                                     <p class="mb-0">Popular</p>
                                     <h6 class="text-uppercase mb-0">Master Chefs</h6>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <a class="btn btn-primary b-primary py-3 px-5 mt-2" href="{{ route('restau.about') }}">Read More</a>
                 </div>
             </div>
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


     <!-- Team Start -->
     <div class="container-xxl pt-5 pb-3">
         <div class="container">
             <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                 <h5 class="section-title ff-secondary text-center text-primary primary fw-normal"> Membres de notre Equipe</h5>
                 <h1 class="mb-5">Nos Chefs Custos</h1>
             </div>
             <div class="row g-4">
                 <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                     <div class="team-item text-center rounded overflow-hidden">
                         <div class="rounded-circle overflow-hidden m-4">
                             <img class="img-fluid" src="img/team-1.jpg" alt="">
                         </div>
                         <h5 class="mb-0">Full Name</h5>
                         <small>Designation</small>
                         <div class="d-flex justify-content-center mt-3">
                             <a class="btn btn-square btn-primary b-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                             <a class="btn btn-square btn-primary b-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                             <a class="btn btn-square btn-primary b-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                     <div class="team-item text-center rounded overflow-hidden">
                         <div class="rounded-circle overflow-hidden m-4">
                             <img class="img-fluid" src="img/team-2.jpg" alt="">
                         </div>
                         <h5 class="mb-0">Full Name</h5>
                         <small>Designation</small>
                         <div class="d-flex justify-content-center mt-3">
                             <a class="btn btn-square btn-primary b-primary  mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                             <a class="btn btn-square btn-primary b-primary  mx-1" href=""><i class="fab fa-twitter"></i></a>
                             <a class="btn btn-square btn-primary b-primary  mx-1" href=""><i class="fab fa-instagram"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                     <div class="team-item text-center rounded overflow-hidden">
                         <div class="rounded-circle overflow-hidden m-4">
                             <img class="img-fluid" src="img/team-3.jpg" alt="">
                         </div>
                         <h5 class="mb-0">Full Name</h5>
                         <small>Designation</small>
                         <div class="d-flex justify-content-center mt-3">
                             <a class="btn btn-square btn-primary b-primary  mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                             <a class="btn btn-square btn-primary b-primary  mx-1" href=""><i class="fab fa-twitter"></i></a>
                             <a class="btn btn-square btn-primary b-primary  mx-1" href=""><i class="fab fa-instagram"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                     <div class="team-item text-center rounded overflow-hidden">
                         <div class="rounded-circle overflow-hidden m-4">
                             <img class="img-fluid" src="img/team-4.jpg" alt="">
                         </div>
                         <h5 class="mb-0">Full Name</h5>
                         <small>Designation</small>
                         <div class="d-flex justify-content-center mt-3">
                             <a class="btn btn-square btn-primary b-primary  mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                             <a class="btn btn-square btn-primary b-primary  mx-1" href=""><i class="fab fa-twitter"></i></a>
                             <a class="btn btn-square btn-primary b-primary  mx-1" href=""><i class="fab fa-instagram"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Team End -->


     <!-- Testimonial Start -->
     <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
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
     </div>
     <!-- Testimonial End -->
    
@endsection