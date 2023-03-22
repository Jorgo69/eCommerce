<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Fedapay\Authentication\BasicAuth;
use Gloudemans\Shoppingcart\Facades\Cart;

class FadepayController extends Controller
{
    
    public function fedapay(){
        /* Remplacez VOTRE_CLE_API par votre véritable clé API */
        \FedaPay\FedaPay::setApiKey("env(PUBLIC_KEY)");

        /* Précisez si vous souhaitez exécuter votre requête en mode test ou live */
        \FedaPay\FedaPay::setEnvironment('sandbox'); //ou setEnvironment('live');

        /* Créer la transaction */
        $fedapay = \FedaPay\Transaction::create(array(
        "description" => "Transaction for john.doe@example.com",
        "amount" => Cart::total(),
        "currency" => ["iso" => "XOF"],
        "callback_url" => "{{ route('products.index) }}",
        "customer" => [
            "firstname" => "John",
            "lastname" => "Doe",
            "email" => "john.doe@example.com",
            "phone_number" => [
                "number" => "+22997808080",
                "country" => "bj"
            ]
        ]
        ));

        
        dd($fedapay);
        }
}
