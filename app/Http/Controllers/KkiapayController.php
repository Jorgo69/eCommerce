<?php

namespace App\Http\Controllers;
use Kkiapay\Kkiapay;


use Illuminate\Http\Request;
use Kkiapay\KkiapayApi;
use Gloudemans\Shoppingcart\Facades\Cart;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;

class KkiapayController extends Controller
{
    public function checkout(Request $request)
    {
        
        // récupérer le montant à partir du backend
    $amount = Cart::total();
    // $amount = $this->getAmount();

    // initialiser l'API Kkiapay
    $public_key = env('KKIAPAY_PUBLIC_KEY');
    $private_key = env('KKIAPAY_PRIVATE_KEY');
    $secret = env('KKIAPAY_SECRET_KEY');
    $sandbox = true;
    $transaction_id = request('transaction_id');
    

    $kkiapay = new Kkiapay($public_key, $private_key, $secret, $sandbox, $transaction_id);


    //  Ici pour tout recuperer
    dd($kkiapay->verifyTransaction($transaction_id));

    // les elements a mettre en bdd

    // source; transactionId; amount

    // $amount = $kkiapay->verifyTransaction($transaction_id)->amount;
    // $fullname = $kkiapay->verifyTransaction($transaction_id)->client->fullname;
    // $fullname = $transaction->client->fullname;

    // dd($amount);


    
/*  Exemple de code s'incersion dans la bdd
    $transaction_id = request('transaction_id');
    $kkiapay = new Kkiapay($public_key, $private_key, $secret, $sandbox, $transaction_id);
    $amount = $kkiapay->verifyTransaction($transaction_id)->amount;

    $payment = new Payment();
    $payment->transaction_id = $transaction_id;
    $payment->amount = $amount;
    $payment->save(); */

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
