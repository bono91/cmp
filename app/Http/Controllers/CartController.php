<?php

namespace cmp\Http\Controllers;

use Illuminate\Http\Request;

use cmp\Http\Requests;
use cmp\Http\Controllers\Controller;
use cmp\Product;

class CartController extends Controller
{
	public function __construct()
	{
       if (!\Session::has('cart')) \Session::put('cart', array());
	}
    //show cart muestra en el carrito
    public function show()
    {
        $cart = \Session::get('cart');
        $total = $this->total();
        return view('carro.cart', compact('cart', 'total'));
    }
    //add item agrega en el carrito
    public function add(Product $product)
    {
        $cart = \Session::get('cart');
        $product->quantity = 1;
        $cart[$product->slug] = $product;
        \Session::put('cart', $cart);
        
        return redirect()->route('cart-show');

    }

    //delete item elimina en el carrito
    public function delete(Product $product)
    {
        $cart = \Session::get('cart');
        unset($cart[$product->slug]);
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');

    }
    //update item
    public function update(Product $product, $quantity)
    {
        $cart = \Session::get('cart');
        $cart[$product->slug]->quantity = $quantity;
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');

    }

    //trash item limipie el carrito
    public function trash()
    {
        \Session::forget('cart');
        return redirect()->route('cart-show');
    }


    //total  total del carrito

    private function total()
    {
        $cart = \Session::get('cart');
        $total = 0;
        foreach ($cart as  $item) {
            $total += $item->price * $item->quantity;
        }
        return $total;
    }
    public function orderDetail()
    {
        if (count(\Session::get('cart')) <=0) return redirect()->route('home'); 
           $cart = \Session::get('cart');
           $total = $this->total();

        return view('carro.orde-detail', compact('cart','total'));
    }


}
