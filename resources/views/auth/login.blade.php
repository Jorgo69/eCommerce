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
                                 <img class="img-fluid" src="{{asset('img/met1.png')}}" alt="">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Navbar & Hero End -->

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    {{-- Template --}}
    
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Connexion</p>
      
                      <form class="mx-1 mx-md-4" method="POST" action="{{ route('login') }}">
                        @csrf
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                              <input type="email" id="form3Example3c" class="form-control @error('email') is-invalid @enderror" name="email" :value="old('email')" required autofocus autocomplete="username"/>
                              <label class="form-label" for="form3Example3c">Votre Email</label>
                              @error('email')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                      </div>
                      
      
                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <input type="password" id="form3Example4c" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                          <label class="form-label" for="form3Example4c">Mot de Passe</label>
                          @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                      
      
                        <div class="form-check d-flex justify-content-center mb-5">
                          <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" name="remember"/>
                          <label class="form-check-label" for="form2Example3">
                            <span>{{ __('Remember me') }}</span>
                          </label>
                          <div class="d-flex jusfity-content-right">
                            <a class="primary" href="{{route('register')}}">Vous n'avez pas de compte? Inscription</a>
                          </div>
                        </div>

                        @if (Route::has('password.request'))
                        <a class="primary" href="{{ route('password.request') }}">
                            {{ __('Mot de passe oublié?') }}
                        </a>
                        @endif
      
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <input type="submit" value="Connexion" class="btn btn-primary btn-lg">
                        </div>
      
                      </form>
      
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
      
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                        class="img-fluid" alt="Sample image">
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    {{-- End Template --}}

@endsection
