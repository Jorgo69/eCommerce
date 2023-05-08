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

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <section class="vh-100" style="background-color: #eee;">
            <div class="container h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                  <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                      <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
          
                          <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Inscription</p>
          
                          <form class="mx-1 mx-md-4">
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="text" id="form3Example1c" class="form-control @error('name') is-invalid @enderror" name="name" :value="old('name')" required autofocus autocomplete="name"/>
                                <label class="form-label" for="form3Example1c">Votre Nom</label>
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                              </div>

                                {{-- <x-input-error :messages="$errors->get('name')" class="mt-2" /> --}}

                            </div>
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="email" id="form3Example3c" class="form-control @error('email') is-invalid @enderror" name="email"  :value="old('email')" required autocomplete="username"/>
                                <label class="form-label" for="form3Example3c">Votre Email</label>
                                @error('email')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                              </div>

                                {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
                              
                            </div>
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="password" id="form3Example4c" class="form-control @error('password') is-invalid @enderror" name="password"
                                required autocomplete="new-password" />
                                <label class="form-label" for="form3Example4c">Mot de passe</label>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                              </div>

                                {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}

                            </div>
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="password" id="form3Example4cd" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password"/>
                                <label class="form-label" for="form3Example4cd">Retaper le mot de pass</label>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                              </div>

                                {{-- <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" /> --}}

                            </div>

                            <div>
                                Vous aviez un compte?
                                <a class="primary" href="{{ route('login') }}"> Se Connecter</a>
                            </div>
          
                            <div class="form-check d-flex justify-content-center mb-5">
                              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                              <label class="form-check-label" for="form2Example3">
                                I agree all statements in <a href="#!" class="primary">Terms of service</a>
                              </label>
                            </div>
          
                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                              <input class="btn btn-primary b-primary" type="submit" value="Inscription">
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

        {{-- <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div> --}}
    </form>

@endsection
