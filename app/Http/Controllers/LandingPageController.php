<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        
        $products = Product::inRandomOrder()->take(6)->get();
        return view('landing')->with('products',$products);
    }
}
