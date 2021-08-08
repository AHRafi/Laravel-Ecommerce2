<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Carbon\Carbon;
use App\Product;

class cartController extends Controller
{
  
    public function addtocart(Request $req)
    {
      if ( Cart::where('ip_address',request()->ip())->where('product_id',$req->product_id)->exists() ) {
        Cart::where('ip_address',request()->ip())->where('product_id',$req->product_id)->increment('quantity',$req->quantity);
        return back()->with('success_msg','Product Added to Cart!');
      }
      else {
        if ( $req->quantity > Product::find($req->product_id)->quantity) {
          return back()->with('sad_msg','You Can Not Add More Than Available Amount!');
        } else {
          Cart::insert([
            'product_id' => $req->product_id,
            'quantity' => $req->quantity,
            'ip_address' => request()->ip(),
            'created_at' => Carbon::now()
          ]);
          return back()->with('success_msg','Product Added to Cart!');

        }

      }


    }
    public function deleteCart($cart_id)
    {
      Cart::find($cart_id)->delete();
      return back();
    }
    public function cart()
    {
      return view('cart');
    }
    public function updateCartPage()
    {
      return view('updateCartPage');
    }
    public function updateCart(Request $req)
    {
      foreach ($req->cart_quantity as $cart_id => $cart_updated_quantity) {
        Cart::find($cart_id)->update([
          'quantity' => $cart_updated_quantity
        ]);
      }
      return redirect('/cart');
    }
}
