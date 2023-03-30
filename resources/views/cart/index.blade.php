@extends('layouts.master')
@livewireStyles

@section('contenu')

@livewire('carts-index')

@livewire('counter')

<script src="https://cdn.kkiapay.me/k.js"></script>
@livewireScripts
@endsection