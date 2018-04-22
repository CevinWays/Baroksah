<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ShopPageController extends Controller
{
    public function index()
    {
        $pagination = 18;
        $categories = Category::all();

        if (request()->category) {
            $products = Product::with('categories')->whereHas('categories',function ($query){
                $query->where('slug', request()->category);
            });
            $categoryName = $categories->where('slug',request()->category)->first()->kategori;
        } else {
            $products = Product::take(12);
            $categoryName = 'Produk Reksadana';
        }

        if (request()->sort == 'low_high') {
            $products = $products->orderBy('price')->paginate($pagination);
        } elseif (request()->sort == 'high_low'){
            $products = $products->orderBy('price', 'desc')->paginate($pagination);
        } else{
            $products = $products->paginate($pagination);
        }
        

        return view('shop')->with([
            'products'=>$products,
            'categories'=>$categories,
            'categoryName'=>$categoryName,
        ]);
    }
    public function show($slug)
    {
        $product = Product::where('slug',$slug)->firstOrFail();
        $MungkinSuka = Product::where('slug','!=',$slug)->AndaMungkin()->get();

        return view('product')->with([
            'product'=>$product,
            'MungkinSuka'=>$MungkinSuka,
            ]);
    }
    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required | min:3',

        ]);

        $query = $request->input('query');
        $products = Product::where('name','like',"%$query%")->get();

        return view('search-result')->with('products',$products);
    }
}
