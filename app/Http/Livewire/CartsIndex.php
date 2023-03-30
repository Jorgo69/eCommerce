<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartsIndex extends Component
{
    public function sous($rowId){
        $product = Cart::get($rowId);
        $qty = $product ->qty -1;
        Cart::update($rowId, $qty);
    }
    public function add($rowId){
        $product = Cart::get($rowId);
        $qty = $product ->qty +1;
        Cart::update($rowId, $qty);
    }

    public function render()
    {
        return view('livewire.carts-index');
    }
}
