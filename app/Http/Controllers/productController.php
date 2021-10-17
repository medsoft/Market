<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product ; 
class productController extends Controller
{
        public function index () 
        {
            $products =  Product::InRandomOrder()->take(8)->get();
            dd($products);
            return view('products.index');
        }
}
