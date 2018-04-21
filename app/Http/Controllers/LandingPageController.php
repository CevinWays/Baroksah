<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){

        $products = Product::where('rating', 5)->get();
        return view('landing')->with('products',$products);
    }
}
