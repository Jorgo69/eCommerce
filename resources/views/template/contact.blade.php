@extends('layouts.main')
@section('contenu')

<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">

    @include('layouts.navbar')

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
            </div>
        </div>
</div>
<!-- Navbar & Hero End -->

{{-- Contact Us --}}
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary primary fw-normal">Contactez nous</h5>
            <h1 class="mb-5">Pour n'importe quelle question</h1>
        </div>
        <div class="row g-4">
            <div class="col-12">
                <div class="row gy-4">
                    <div class="col-md-4">
                        <h5 class="section-title ff-secondary fw-normal text-start text-primary primary">Réservation via Whatsapp</h5>
                        <p><i class="fa fa-envelope-open text-primary me-2 primary"></i>69238265</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="section-title ff-secondary fw-normal text-start text-primary primary">Général</h5>
                        <p><i class="fa fa-envelope-open text-primary me-2 primary"></i>info@example.com</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="section-title ff-secondary fw-normal text-start text-primary primary">Problème Technique</h5>
                        <p><i class="fa fa-envelope-open text-primary me-2 primary"></i>tech@example.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7930.242991879233!2d2.4041974!3d6.378314124850407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102355c8e889d1b1%3A0xfeb9d17f65b097bf!2sRestaurant%20Chez%20Alexia!5e0!3m2!1sfr!2sbj!4v1682326020150!5m2!1sfr!2sbj" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Votre nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Votre Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Sujet</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3 b-primary" type="submit">Envoyez</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
    
@endsection