<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ShopPageController extends Controller
{
    public function index(){

        $products = Product::inRandomOrder()->take(12)->get();
        return view('shop')->with('products',$products);
    }
    public function show($slug){
        $product = Product::where('slug',$slug)->firstOrFail();
        $MungkinSuka = Product::where('slug','!=',$slug)->AndaMungkin()->get();

        return view('product')->with([
            'product'=>$product,
            'MungkinSuka'=>$MungkinSuka,
            ]);
    }
}
