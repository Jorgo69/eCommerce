<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\FadepayController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\KkiapayController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Product Routes */
Route::get('/boutique', [ProductController::class, 'index'])->name('products.index');
Route::get('/boutique/{slug}', [ProductController::class, 'show'])->name('products.show');

// Cart Routes
Route::get('monPanier', [CartController::class, 'index']) ->name('cart.index');
Route::post('panier/ajouter', [CartController::class, 'store'])->name('cart.store');
Route::delete('panier{rowId}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('videPanier', [CartController::class, 'destroy']) ->name('cart.destroy');

// Payments Routes
Route::get('payement', [FadepayController::class, 'index']) -> name('payement.index');
// Route::post('payemen', [FadepayController::class, 'pay']) -> name('payement.index');


/* Route::get('paiement', [PaymentController::class, 'index']) ->name('payments.index');
Route::get('paiemen', [PaymentController::class, 'store']) ->name('payments.store'); */

Route::get('/merci', function(){
    return view('payments.thankyoi');
});



Route::get('/checkout', [KkiapayController::class, 'checkout'])->name('checkout');
Route::post('/payment', [KkiapayController::class, 'payment'])->name('payment');
Route::post('/payment/callback', [KkiapayController::class, 'callback'])->name('payment.callback');

Route::get('voir', function(){
    $public_key = env('KKIAPAY_PUBLIC_KEY');
        $private_key = env('KKIAPAY_PRIVATE_KEY');
        $secret = env('KKIAPAY_SECRET_KEY');
        $sandbox = env('sandbox');
        $number = 69238265;
    $kkiapay = new \Kkiapay\Kkiapay($public_key,
                                $private_key, 
                                $secret,
                                $number,
                                $sandbox);
                                $transaction_id = 10;
                             
                                
                                
    return dd($kkiapay->verifyTransaction($transaction_id));
});

Route::post('checkout', [KkiapayController::class, 'checkout'])-> name('checkout');