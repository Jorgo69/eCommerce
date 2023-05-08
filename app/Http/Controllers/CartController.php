<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Coupon;
use App\Models\Disponibilite;
use App\Models\Product;
use App\Models\Quartier;
use App\Models\Ville;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villes = Ville::all();
        $quartiers = Quartier::all();
        $contacts = Contact::all();
        $disponibilites = Disponibilite::all();

        if( Cart::count() <= 0 ){
            return redirect() ->route('products.index');
        }
        $price = Cart::total();

        return view('cart.index',  compact('price', 'contacts', 'disponibilites', 'villes', 'quartiers'));
    }

    public function coupon(Request $request){
        if (session()->has('ville')) {
            session()->forget('ville');
        }
        
        $ville = $request->input("ville");
        $ville = Ville::find($ville)->ville;
        session()->put('ville', $ville);

        if (session()->has('quartier')) {
            session()->forget('quartier');
        }
    
        $quartier = $request->input("quartier");
        $quartier = Quartier::find($quartier)->quartier;
        session()->put('quartier', $quartier);
    
        $coupon_code = $request->input("coupon_code");
        // session()->put('coupon_code', $coupon_code);

    
        if ($coupon_code) {
            $coupon = Coupon::where('code', $coupon_code)->first();
    
            if (!$coupon) {
                return back()->with('success', 'Coupon Invalid');
            }
    
            if ($coupon->stock <= 0) {
                return back()->with('success', 'Desole Coupon Epuise');
            }
            $request->session()->put('coupon',[
                'code' => $coupon->coupon_code,
                'remise' =>$coupon->discount(Cart::subtotal())
            ]);
    
            /* $reduction = $coupon->reduction;
            $reduc = Cart::subtotal() * $reduction / 100; */
            // dd($to);
    
            // $coupon->stock--;
            // $coupon->save();
        }
        
        if(session('coupon')){
            return redirect()->route('thanks')->with('success', 'Coupon prise en compte avec Success');
        }else{
            return redirect()->route('thanks');
        }
        
    }
    public function destroyCart(){
        if (session()->has('coupon')) {
            session()->forget('coupon');
            // return back()->with('success', 'Coupon supprimer avec success');
        }
        if (session()->has('ville')) {
            session()->forget('ville');
        }
        if (session()->has('quartier')) {
            session()->forget('quartier');
        }
        return back()->with('success', 'Coupon supprimer avec success');
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_qty' => 'required|integer|min:1',
        ]);
    
        $product = Product::find($request->product_id);
    
        $duplicata = Cart::search(function ($cartItem, $rowId) use($request) {
            return $cartItem->id == $request->product_id;
        });
    
        if($duplicata->isNotEmpty()) {
            return redirect()->route('products.index')->with('success', 'Le produit existe déjà dans le panier');
        }
    
        if ($product->stocks < $request->product_qty) {
            return redirect()->route('products.index')->with('success', 'Le stock est insuffisant');
        }
    
        Cart::add($product->id, $product->title, $request->product_qty, $product->price)->associate(Product::class);
    
        // $product->decrement('stocks', $request->product_qty);
    
        return redirect()->route('products.index')->with('success', 'Le Produit a été ajouté avec success');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rowId)
    {

        $data = $request->json()->all();
        Cart::update($rowId, $data['qty']);

        Session::flash('success', 'La quantité du produit est passée à ' . $data['qty'] . '.');
        // return response()->json(['success' => 'Cart Quantity Has Been Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function remove($rowId){
        Cart::remove($rowId);
        return back() ->with('successd', 'Le produit a bien été supprimé');
     }


    public function destroy()
    {
        Cart::destroy();
        return redirect() ->route('products.index') ->with('success', 'Panier Vider avec Success1');
    }
}
