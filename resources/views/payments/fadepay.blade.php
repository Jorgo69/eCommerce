@extends('layouts.master')

@section('content')
    <h1>Effectuer un paiement</h1>

    <form action="{{ route('payement.index') }}" method="POST">
        @csrf
        <input type="hidden" name="field" value="test">
        <script
            src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
            data-public-key="{{ env('FEDAPAY_PUBLIC_KEY') }}"
            data-button-text="Payer {{ Cart::subtotal() }}"
            data-button-class="button-class"
            data-transaction-amount="{{ Cart::subtotal() }}"
            data-transaction-description="Description de la transaction"
            data-currency-iso="XOF">
        </script>
    </form>
@endsection
