<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
 
    public function increment()
    {
        $cc = Cart::subtotal();
        $this->count++;
    }
 
    public function render()
    {
        return view('livewire.counter');
    }
}
