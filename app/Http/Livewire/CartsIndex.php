<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartsIndex extends Component
{
    public $subtotal;
    public function updateSubtotal()
    {
        $this->subtotal = (float) str_replace(',', '', Cart::subtotal());
    }

    public function sous($rowId){
        $product = Cart::get($rowId);
        $qty = $product ->qty -1;
        Cart::update($rowId, $qty);

        $this->updateSubtotal();
    }
    public function add($rowId){
        $product = Cart::get($rowId);
        $qty = $product ->qty +1;
        Cart::update($rowId, $qty);

        $this->updateSubtotal();
    }

    public function render()
    {
        return view('livewire.carts-index');
    }
}
