<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function __construct()
    {
        if(!\Session::has('cart')) \Session::put('cart',array());
    }
//metodo show para mostrar el contenido
    public function show()
    {
     $cart =  \Session::get('cart');
     $total=$this->total();
     return view('store.cart',compact('cart','total'));

    }

    public function add(product $Product)
    {
     $cart = \Session::get('cart');
     $Product->quantity = 1;
     $cart[$Product->slug] = $Product;
    \Session::put('cart', $cart);

    return redirect()->route('cart-show');
    }
    public function delete(product $Product)
    {
      $cart = \Session::get('cart');
      unset($cart[$Product->slug]);
      \Session::put('cart', $cart);
      
      return redirect()->route('cart-show');

    }
    
    public function update(Product $product , $quantity)
    {
        $cart = \Session::get('cart');
        $cart[$product->slug]->quantity = $quantity;
        \Session::put('cart', $cart);
      
        return redirect()->route('cart-show');
    }
    public function orderDetail(){
        if(count(\Session::get('cart'))<=0) return redirect()->route('home');
        $cart = \Session::get('cart');
        $total = $this->total();

        return view ('store.order-detail', compact('cart','total'));
    }


// vaciar carrito-------------
    public function trash(){
        \Session::forget('cart');

        return redirect()->route('cart-show');
    }
    private function total(){
        $cart = \Session::get('cart');
        $total=0;
        foreach ($cart as $item) {
            $total  += $item->price * $item->quantity;
        }
        return $total;
    }

   public function exito(){
    if(count(\Session::get('cart'))<=0) return redirect()->route('home');
    $cart = \Session::get('cart');
    $total = $this->total();

    return view ('store.compra-exitosa', compact('cart','total'));
   }
}
