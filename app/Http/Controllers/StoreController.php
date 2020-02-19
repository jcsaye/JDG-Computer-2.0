<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class StoreController extends Controller
{
    public function index(){
        $Products = Product::all();
        return view('store.index',compact('Products'));

          
    }

    public function show($slug){
        $Product= Product::where('slug', $slug)->first();
        //dd($Product);
        return view('store.show',compact('Product'));
    }
}
