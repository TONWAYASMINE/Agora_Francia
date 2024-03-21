<?php

namespace App\Http\Controllers;


use App\Models\Product;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        $products = Product::orderBy('created_at', 'DESC')->take(18)->get();
        return view('index', ['products' => $products]);
    }

    public function productDetails($slug){
        $product = Product::where('slug', $slug )->first();
        $rproducts = Product::where('slug', '!=', $slug)->inRandomOrder('id')->get()->take(8);
        return view('details',['product'=>$product, 'rproducts'=>$rproducts]);
    }
}
