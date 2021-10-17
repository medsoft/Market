<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product ; 
class productController extends Controller
{
        public function index () 
        {
            $products =  Product::InRandomOrder()->take(8)->get();
            return view('products.index')->with('products', $products);
        }

        public function show ($slug) 
        {
            $product  = Product::where('slug' , $slug)->firstOrFail() ; 
            return view ('products.show')->with('product', $product) ;  
        }
}
