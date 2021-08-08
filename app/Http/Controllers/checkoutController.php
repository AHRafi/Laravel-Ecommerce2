<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Cart;
use App\Product;
use App\Order_list;
use Carbon\Carbon;
use Auth;

class checkoutController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function checkout(Request $req)
    {
            if (Auth::user()->role == 1) {
              return redirect('/')->with('invalid_user',"You are an admin, You Can not Buy Any Product!");
            }else {
            return view('checkout',[
              'total_from_cart' => $req->total
            ]);
            }
    }
    public function checkoutPost(Request $req)
    {
      // print_r($req->all());

      if ($req->payment_method ==1 ) {
        $order_id = Order::insertGetId([
          'first-name' => $req->first_name,
          'last-name' => $req->last_name,
          'city' => $req->city,
          'postcode' => $req->postcode,
          'phone' => $req->phone,
          'email-address' => $req->email_address,
          'notes' => $req->notes,
          'payment_method' => $req->payment_method,
          'total' => $req->total,
          'Sub_total' => $req->sub_total,
          'created_at' => Carbon::now()

        ]);
        foreach (Cart::where('ip_address',request()->ip())->get() as $cart) {
          Order_list::insert([
            'order_id' => $order_id,
            'user_id' => Auth::id(),
            'product_id' => $cart->product_id,
            'quantity' => $cart->quantity,
            'created_at' => Carbon::now()
          ]);
          Product::find($cart->product_id)->decrement('quantity',$cart->quantity);
          Cart::find($cart->id)->delete();
        }
        return redirect('/');
      }else {
        // print_r($req->all());
        return view('stripe',[
          'request_all_data' => $req->all()
        ]);
      }




    }
}
