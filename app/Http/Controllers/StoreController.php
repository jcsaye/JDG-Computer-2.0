<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class StoreController extends Controller
{
    public function index(){
        $categories=Category::all();
        $Products = Product::paginate(4);
        return view('store.index',compact('Products', 'categories'));

          
    }

    public function show($slug){
        $Product= Product::where('slug', $slug)->first();
        //dd($Product);
        return view('store.show',compact('Product'));
    }

    public function filtrado($id){
        $categories=Category::all();
        $products= Product::where('category_id',$id)->paginate(4);
        return view ('store.filtrado',compact('products','categories'));
    }
    
}
