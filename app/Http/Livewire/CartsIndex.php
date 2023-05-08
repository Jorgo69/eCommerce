<?php

namespace App\Http\Livewire;

use App\Models\Quartier;
use App\Models\Ville;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartsIndex extends Component
{
    public $selectedVille;
    public $selectedQuartier;
    public $villes = [];
    public $quartiers = [];


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
        // $villes = Ville::find($this->selectedVille);
        
        // if ($villes) {
        //     $this->ville = $villes->ville;
        //     $this->pays = $villes->pays;
        //     $this->quartiers = $villes->quartiers;
        // } else {
        //     $this->ville = '';
        //     $this->pays = '';
        //     $this->quartiers = collect();
        // }
        
        // $selectedQuartier = Quartier::find($this->selectedQuartier);
        $ville = Ville::find($this->selectedVille);
        $quartier = Quartier::find($this->selectedQuartier);
        
        if ($ville) {
            $this->quartiers = $ville->quartiers;
        } else {
            $this->quartiers = collect();
        }

        $this->villes = Ville::all();
        $this->quartiers = Quartier::all();

        return view('livewire.carts-index', compact('ville', 'quartier'));
    }
}
