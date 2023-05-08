<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Disponibilite;
use App\Models\Product;
use App\Models\Quartier;
use App\Models\Ville;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        $disponibilites = Disponibilite::all();
        // Pour recuperer de façon aleatoires mais par 6
        // $products = Product::inRandomOrder()->take(6)->get();

        $categories = 'App\Models\Category';

        if(request()->categorie){
            $products = Product::with('categories')->whereHas('categories', function($query) {
                $query->where('slug', request()->categorie);
            })->orderBy('created_at', 'DESC')->paginate(6);
        }else{
            $products = Product::with('categories')->orderBy('created_at', 'DESC')->paginate(6);
        }


         return view('products.index', compact('products', 'categories', 'contacts', 'disponibilites'));
        // return view('products.index')->with('products', $products, 'categories', $categories);
    }

    public function restau_index()
    {
        $contacts = Contact::all();
        $disponibilites = Disponibilite::all();
        // Pour recuperer de façon aleatoires mais par 6
        // $products = Product::inRandomOrder()->take(6)->get();

        $categories = 'App\Models\Category';

        if(request()->categorie){
            $products = Product::with('categories')->whereHas('categories', function($query) {
                $query->where('slug', request()->categorie);
            })->orderBy('created_at', 'DESC')->paginate(6);
        }else{
            $products = Product::with('categories')->orderBy('created_at', 'DESC')->paginate(6);
        }


         return view('template.index', compact('products', 'categories', 'contacts', 'disponibilites'));
        // return view('products.index')->with('products', $products, 'categories', $categories);
    }

    public function show($slug)
    {
        $contacts = Contact::all();
        $disponibilites = Disponibilite::all();

        $product = Product::where('slug', $slug)->firstOrFail();

        return view('products.show', compact('product', 'contacts', 'disponibilites'));
    }

    public function search(){
        $contacts = Contact::all();
        $disponibilites = Disponibilite::all();
        request()-> validate([
            'q' => 'required|min:3'
        ]);

        $q = request()->input('q');
        $products = Product::where('title', 'like', "%$q%")
            ->orWhere('description', 'like', "%$q%")
            ->paginate(8);
        return view('products.search', compact('products', 'contacts', 'disponibilites'));
    }
    public function thanks(Request $request){
        $contacts = Contact::all();
        $disponibilites = Disponibilite::all();
        $villes = Ville::all();
        $quartiers = Quartier::all();

        if(Cart::count() <= 0){
            return back();
        }else{
            return view('payments.thankyou', compact('contacts', 'disponibilites', 'villes', 'quartiers'));
        }
    }
}
