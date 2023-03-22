<?php

namespace App\Http\Controllers;
use Kkiapay\Kkiapay;


use Illuminate\Http\Request;
use Kkiapay\KkiapayApi;
use Gloudemans\Shoppingcart\Facades\Cart;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;

class KkiapayController extends Controller
{
    public function checkout()
    {
        
        // récupérer le montant à partir du backend
    $amount = Cart::total();
    // $amount = $this->getAmount();

    // initialiser l'API Kkiapay
    $public_key = env('KKIAPAY_PUBLIC_KEY');
    $private_key = env('KKIAPAY_PRIVATE_KEY');
    $secret = env('KKIAPAY_SECRET_KEY');
    $sandbox = env('sandbo');

    $kkiapay = new Kkiapay($public_key, $private_key, $secret, $sandbox);

    // effectuer une transaction
    /* $kkiapay->refundTransaction([
        "amount" => $amount,
        "currency" => "XOF",
        "description" => "Achat sur mon site",
        "metadata" => [
            "order_id" => "12345"
        ],
        "return_url" => "https://monsite.com/merci"
    ]); */

    dd($kkiapay);

    // récupérer l'ID de la transaction
    // $transaction_id = $transaction['id'];

    // rediriger l'utilisateur vers la page de paiement Kkiapay
    // return redirect($transaction['redirect_url']);
    // dd($transaction);
    }

    private function getAmount()
    {
        // logique pour récupérer le montant à partir du backend
    }

    public function callback(Request $request)
    {
        $data = $request->json()->all();
        $data = response() ->json()->all();
    $statusCode = $data['statusCode'];
    
    if ($statusCode == 400) {
        return redirect()->route('home');
    }
    }

    public function cancel(Request $request)
    {
        // logique pour gérer l'annulation du paiement

        // rediriger l'utilisateur vers la page d'annulation
        return redirect()->route('payment.confirmation', ['status' => 'cancelled']);
    }

    public function confirmation(Request $request)
    {
        $status = $request->status;
        // logique pour afficher la page de confirmation avec le statut de la transaction
    }
}
