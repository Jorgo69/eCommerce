<?php

namespace App\Http\Livewire;

use App\Models\Ville;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class Counter extends Component
{
    public $selectedVille;
    public $selectedQuartier;
    public $villes = [];
    public $quartiers = [];

    
    public $count = 0;
 
    public function increment()
    {
        $cc = Cart::subtotal();
        $this->count++;
    }
 
    public function render()
    {
        $ville = Ville::find($this->selectedVille);
        
        if ($ville) {
            $this->quartiers = $ville->quartiers;
        } else {
            $this->quartiers = collect();
        }

        $this->villes = Ville::all();
        return view('livewire.counter', compact('ville'));
    }
}
