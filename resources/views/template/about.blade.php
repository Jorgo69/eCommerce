@extends('layouts.main')
@section('contenu')


               <!-- Navbar & Hero Start -->
               <div class="container-xxl position-relative p-0">

                @include('layouts.navbar')
     
                 <div class="container-xxl py-5 bg-dark hero-header mb-5">
                     <div class="container text-center my-5 pt-5 pb-4">
                         <h1 class="display-3 text-white mb-3 animated slideInDown">A propos</h1>
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb justify-content-center text-uppercase">
                                 <li class="breadcrumb-item"><a href="{{ route('restau.index') }}">Accueil</a></li>
                                 <li class="breadcrumb-item"><a href="{{ route('restau.about') }}">Pages</a></li>
                                 <li class="breadcrumb-item text-white active" aria-current="page">A propos</li>
                             </ol>
                         </nav>
                     </div>
                 </div>
             </div>
             <!-- Navbar & Hero End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
     <div class="container">
         <div class="row g-5 align-items-center">
             <div class="col-lg-6">
                 <div class="row g-3">
                     <div class="col-6 text-start">
                         <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="{{asset('img/about-1.jpg')}}">
                     </div>
                     <div class="col-6 text-start">
                         <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="{{asset('img/about-2.jpg')}}" style="margin-top: 25%;">
                     </div>
                     <div class="col-6 text-end">
                         <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="{{asset('img/about-3.jpg')}}">
                     </div>
                     <div class="col-6 text-end">
                         <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="{{asset('img/about-4.jpg')}}">
                     </div>
                 </div>
             </div>
             <div class="col-lg-6">
                 <h5 class="section-title ff-secondary text-start text-primary primary fw-normal">A propos de nous</h5>
                 <h1 class="mb-4">Bienvenu <i class="fa fa-utensils text-primary primary me-2"></i>Chez Alexia</h1>
                 <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                 <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                 <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia deleniti deserunt sequi itaque. Soluta ex eligendi placeat distinctio nam inventore sapiente explicabo earum, quidem perferendis dolores minima quasi quibusdam debitis, fugiat sunt harum minus nisi cum assumenda consectetur odio autem quia? Ipsa dignissimos assumenda ipsam saepe ut veritatis corporis impedit excepturi. Cum animi rerum odio doloribus nesciunt! Illo eaque neque veritatis perspiciatis, atque commodi. Facilis, fugiat. Numquam sed doloremque maxime tempora alias sint rerum ab nesciunt quibusdam maiores quaerat illum blanditiis ad architecto placeat deserunt rem id, dolorem est possimus iste ipsum, eius doloribus? Assumenda molestias aliquam in laudantium cupiditate impedit, magnam praesentium sint aspernatur est et eos doloribus animi architecto ex corporis alias eligendi. Dicta repudiandae exercitationem modi facere excepturi molestiae, neque tempore eaque commodi delectus voluptatem dolor ex. Dicta ut est odio explicabo doloribus dolore quo eveniet nihil distinctio reiciendis tempore suscipit, error voluptate unde provident autem ullam facere soluta excepturi labore eius dignissimos asperiores. Placeat sit non aliquam nostrum suscipit assumenda nobis exercitationem doloribus enim! Eligendi voluptas odio, adipisci ea earum saepe fuga qui repellat voluptates sed doloremque reiciendis ipsa suscipit dolor asperiores officia non ullam, quia iure commodi mollitia. Consectetur odit aperiam architecto sequi quaerat exercitationem?
                 </p>
                 <div class="row g-4 mb-4">
                     <div class="col-sm-6">
                         <div class="d-flex align-items-center  px-3">
                             <h1 class="flex-shrink-0 display-5 text-primary primary mb-0" data-toggle="counter-up">15</h1>
                             <div class="ps-4">
                                 <p class="mb-0">Years of</p>
                                 <h6 class="text-uppercase mb-0">Experience</h6>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-6">
                         <div class="d-flex align-items-center  px-3">
                             <h1 class="flex-shrink-0 display-5 text-primary primary mb-0" data-toggle="counter-up">50</h1>
                             <div class="ps-4">
                                 <p class="mb-0">Popular</p>
                                 <h6 class="text-uppercase mb-0">Master Chefs</h6>
                             </div>
                         </div>
                     </div>
                 </div>
                 
             </div>
         </div>
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
                         <a class="btn btn-square btn-primary  b-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                         <a class="btn btn-square btn-primary  b-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                         <a class="btn btn-square btn-primary  b-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
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
                         <a class="btn btn-square btn-primary  b-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                         <a class="btn btn-square btn-primary  b-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                         <a class="btn btn-square btn-primary  b-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
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
                         <a class="btn btn-square btn-primary  b-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                         <a class="btn btn-square btn-primary  b-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                         <a class="btn btn-square btn-primary  b-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Team End -->
    
@endsection