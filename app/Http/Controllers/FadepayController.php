<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Fedapay\Authentication\BasicAuth;
use Gloudemans\Shoppingcart\Facades\Cart;

class FadepayController extends Controller
{
    
    public function fedapay(Request $request){


         // initialiser l'API Kkiapay
    $public_key = env('KKIAPAY_PUBLIC_KEY');
    $private_key = env('KKIAPAY_PRIVATE_KEY');
    $secret = env('KKIAPAY_SECRET_KEY');
    $sandbox = env('sandbo');
        $kkiapay = new \Kkiapay\Kkiapay($public_key,
                                $private_key, 
                                $secret, 
                                $sandbox = true);
        dd($request->all());
        return view();
    }
}
