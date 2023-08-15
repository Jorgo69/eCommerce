
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chez Alexia</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/logoMaelan.png')}}" rel="icon">
    {{-- <link rel="stylesheet" href="{{asset('css/color.css')}}"> --}}


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin>
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap')}}" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css')}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <link href="blog.css" rel="stylesheet">
    <link href="cart.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    @livewireStyles
</head>

<body>
    @if (session('success'))
<div id="alert" class="alert alert-success text-center mt-5">
    {{ session('success')}}
    <button id="closeBtn" type="button" class="close btn btn-outline-danger justify-content-right">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
        </svg>
        Fermer
    </button>
</div>
@endif

{{-- Message Delete --}}
@if (session('delete'))
<div id="alert" class="alert alert-danger text-center mt-5">
    {{ session('delete')}}
    <button id="closeBtn" type="button" class="close btn btn-outline-danger justify-content-right">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
        </svg>
        Fermer
    </button>
</div>
@endif

    <div class="container-xxl bg-white p-0" id="up">
        <!-- Spinner Start -->
        {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> --}}
        <!-- Spinner End -->





        {{-- Contenu --}}

        @yield('contenu')

        {{-- End Contenu --}}

                <!-- Footer Start -->
                <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="container py-5">
                        <div class="row g-5">
                            <div class="col-lg-3 col-md-6">
                                <h4 class="section-title ff-secondary text-start text-primary primary fw-normal mb-4">Company</h4>
                                @auth
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Deconnexion</button>
                                </form>
                                @else
                                
                                @guest
                                <form method="GET" action="{{ route('login') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-light">Se Connecter</button>
                                </form>
                                {{-- <a href="{{ route('login')}}" class="btn btn-light mt-2 mx-1">{{__('Se Connecter')}} </a> --}}
                                @endguest
                                @endauth
                                {{-- <a class="btn btn-link" href="{{ route('about')}}">A propos</a>
                                <a class="btn btn-link" href="{{ route('contact')}}">Contactez nous</a>
                                <a class="btn btn-link" href="{{ route('reservation')}}">Reservation</a> --}}
                                <a class="btn btn-link" href="">Politique de Confidentialité</a>
                                <a class="btn btn-link" href="">Terms & Condition</a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <h4 class="section-title ff-secondary text-start text-primary primary fw-normal mb-4">Contact</h4>
                                @forelse ($contacts as $contact)
                                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{$contact->emplacement}}</p>
                                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ $contact->numero}}</p>
                                <p class="mb-2"><i class="fa fa-envelope me-3"></i></p>
                                @empty
                                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> Deuxieme von apres carrefour AGONTIGON </p>
                                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i> 69 23 82 65</p>
                                    <p class="mb-2"><i class="fa fa-envelope me-3"></i> chezalexia@gmail.com</p>
                                @endforelse

                                <div class="d-flex pt-2">
                                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <h4 class="section-title ff-secondary text-start text-primary primary fw-normal mb-4">Ouvrable</h4>
                                @forelse ($disponibilites as $disponibilite)
                                <h5 class="text-light fw-normal">{{ $disponibilite->jours}}</h5>
                                <p>{{ $disponibilite->heure}}</p>
                                
                                @empty
                                <h5 class="text-light fw-normal">Lundi au Vendredi</h5>
                                <p> 09h - 21h </p>
                                <h5 class="text-light fw-normal">Samedi</h5>
                                <p> 12h - 23h </p>
                            @endforelse
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <h4 class="section-title ff-secondary text-start text-primary primary fw-normal mb-4">Newsletter</h4>
                                <p>Entrez ici votre gmail pour chaque fois recevoir nos News.</p>
                                <div class="position-relative mx-auto" style="max-width: 400px;">
                                    <input class="form-control border-primary   w-100 py-3 ps-4 pe-5" style="border: #000;" type="text" placeholder="Votre Mail">
                                    <button type="button" class="btn btn-primary bord-none b-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="copyright">
                            <div class="row">
                                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                    &copy; <a class="border-bottom" href="#">Chez Alexia</a>, Tout Droit Reservez. 
                                    
                                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                    {{-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> --}}
                                    Designed par <span class="text-info"> Ibralejorgo@gmail.com </span>
                                </div>
                                <div class="col-md-6 text-center text-md-end">
                                    <div class="footer-menu">
                                        <a href="{{ route('restau.index')}}">Home</a>
                                        {{-- <a href="">Cookies</a> --}}
                                        <a href="">Help</a>
                                        <a href="">FQAs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End -->
        
        
                <!-- Back to Top -->
                <a href="{{ ('#up')}}" class="btn btn-lg btn-primary b-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
        
            <!-- JavaScript Libraries -->
            <script src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}"></script>
            <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{asset('lib/wow/wow.min.js')}}"></script>
            <script src="{{asset('lib/easing/easing.min.js')}}"></script>
            <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
            <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
            <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
            <script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>
            <script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
            <script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
        
            <!-- Template Javascript -->
            <script src="{{asset('js/main.js')}}"></script>
            @livewireScripts

            <script>
                document.getElementById('closeBtn').addEventListener('click', function() {
                    document.getElementById('alert').style.display = 'none';
                });
            </script>
            
        </body>
        
        </html>