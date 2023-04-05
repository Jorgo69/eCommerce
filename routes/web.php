<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\FadepayController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\KkiapayController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

// Restau Template
Route::get('Accueil', [PostController::class, 'home'])->name('restau.index');
Route::get('A propos', [PostController::class, 'about'])->name('restau.about');
Route::get('Contactez_Nous', [PostController::class, 'contact'])->name('restau.contact');
Route::get('Reservation', [PostController::class, 'reservation'])->name('restau.reservation');



// end Restau

/* Product Routes */
Route::get('/boutique', [ProductController::class, 'index'])->name('products.index');
Route::get('/boutique/{slug}', [ProductController::class, 'show'])->name('products.show');
Route::get('/search', [ProductController::class, 'search'])->name('products.search');

// Cart Routes
Route::get('monPanier', [CartController::class, 'index']) ->name('cart.index');
Route::post('monPanier/ajouter', [CartController::class, 'store'])->name('cart.store');
Route::delete('monPanier{rowId}', [CartController::class, 'remove'])->name('cart.remove');
Route::patch('monPanier{rowId}', [CartController::class, 'update'])->name('cart.update');
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

Route::post('checkout', [KkiapayController::class, 'checkout'])-> name('checkout');

Route::post('show', 'FadepayController@fedapay')->name('payment.show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
