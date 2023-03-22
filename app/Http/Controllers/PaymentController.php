<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Http\Request;
// use Gloudemans\Shoppingcart\Cart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Routing\Controller;
use Illuminate\Support\Arr;

class PaymentController extends Controller
{
    public function payer(Request $request){
        $data = $request->json()->all();
        dd($data);
        // $data = response() ->json()->all();
    $statusCode = $data['statusCode'];
    
    if ($statusCode == 400) {
        return redirect()->route('home');
    }

    }
}
