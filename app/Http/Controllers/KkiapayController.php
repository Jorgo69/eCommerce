<?php

namespace App\Http\Controllers;

use App\Models\Order;
use DateTime;
use DateTimeZone;
use Kkiapay\Kkiapay;


use Illuminate\Http\Request;
use Kkiapay\KkiapayApi;
use Gloudemans\Shoppingcart\Facades\Cart;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class KkiapayController extends Controller
{
    public function checkout(Request $request)
    {
        // initialiser l'API Kkiapay
    $public_key = env('KKIAPAY_PUBLIC_KEY');
    $private_key = env('KKIAPAY_PRIVATE_KEY');
    $secret = env('KKIAPAY_SECRET_KEY');
    $sandbox = true;
    $transaction_id = request('transaction_id');

    $kkiapay = new Kkiapay($public_key, $private_key, $secret, $sandbox, $transaction_id);

        // pour tout recuperer en JsOn{}
    $transactionId = $kkiapay->verifyTransaction($transaction_id);

   
    
    
    // dd($transactionId);


        // Recuperation des Infos de User
        //  Exemple de code s'incersion dans la bdd
    $status = $kkiapay->verifyTransaction($transaction_id)->status;
    $source = $kkiapay->verifyTransaction($transaction_id)->source;
    $source_common_name = $kkiapay->verifyTransaction($transaction_id)->source_common_name;
    $amount = $kkiapay->verifyTransaction($transaction_id)->amount;
    $fees = $kkiapay->verifyTransaction($transaction_id)->fees;
    $country = $kkiapay->verifyTransaction($transaction_id)->country;
    $transactionId = $kkiapay->verifyTransaction($transaction_id)->transactionId;

    // Pour eviter l'erreur du CodeStatus
    /* if (property_exists($transactionId, 'statusCode')) {
        $statusCode = $transactionId->statusCode;
        // Faites quelque chose avec $statusCode
        $statusCode;
    } else {
        // La propriété n'existe pas, afficher un message d'erreur ou effectuer une autre action
        $statusCode ='La propriété n\'existe pas sur cet objet.';
    }
 */
    // dd($status);


    // Recuperation de l'heure en precisant le GMT + 1
    $performed_at = new DateTime($kkiapay->verifyTransaction($transaction_id)->performed_at, new DateTimeZone('UTC'));
    $formatted_date = $performed_at->setTimezone(new DateTimeZone('GMT+1'))->format('Y-m-d H:i:s');

    $payment = new Order();
    // $payment->status = $status;
    // $payment->source = $source;
    $payment->montant = $amount;
    // $payment->source_common_name = $source_common_name;
    // $payment->fees = $fees;
    // $payment->country = $country;
    $payment->id_transaction = $transactionId;
    $payment->date_transaction = $formatted_date;
    // $payment->transactionId = $statusCode;

    // Recuperation des products
    $products = [];
    $i = 0;
        foreach( Cart::content() as $product ){
            $products['product_' .$i][] = $product ->model->title;
            $products['product_' .$i][] = $product ->model->price;
            // $products['product_' .$i][] = $product ->model->title;
            $i++;
        }

    $payment->products = serialize($products);

    $payment->user_id = Auth() ->user() ->id;

    $payment->save();
    // dd($payment);

    // 
    if(  $status === "SUCCESS"){
        Cart::destroy();
    return redirect()->route('products.index')->with('success', 'Prise en compte');

    // $cool = session()->flash('success', 'L\'opération a été effectuée avec succès.');
        // return back();
        // return redirect()->route('products.index')->with($cool);
        // dd($cool);
        
        // return Session::has('success') ? view('products.index'):redirect()->route('products.index');
        // return response()->json(['success' => 'Merci a bientot']);
    }else{
        return response()->json(['success' => 'Non non pas traiter du tout']);
    }

    
    // redirect()->route('products.index');
    redirect()->route('products.index')->with('success', 'Prise en compte');

 


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
