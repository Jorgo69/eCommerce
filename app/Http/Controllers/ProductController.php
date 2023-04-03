<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function index()
    {
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


         return view('products.index', compact('products', 'categories'));
        // return view('products.index')->with('products', $products, 'categories', $categories);
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('products.show')->with('product', $product);
    }
}
