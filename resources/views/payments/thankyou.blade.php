@extends('layouts.master')
@section('contenu')
<script src="https://cdn.kkiapay.me/k.js"></script>
<h1>     <form action="{{ route('checkout')}}" method="POST">
    @csrf

    <kkiapay-widget  amount="{{Cart::subtotal()}}"
        key="{{ env('KKIAPAY_PUBLIC_KEY')}}" url="<url-vers-votre-logo>"
        position="center" sandbox="true" data=""
        callback="{{ route('checkout') }}">
    </kkiapay-widget>

</form> </h1>

<p>

</p>
    
@endsection