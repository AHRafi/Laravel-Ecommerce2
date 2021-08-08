<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use App\Order;
use App\Order_list;
use App\Product;
use App\Cart;
use Carbon\Carbon;
use Auth;

class StripePaymentController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function stripe()
  {
      return view('stripe');
  }

  public function stripePost(Request $req)
  {
    // print_r($request->all());
      Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
      Stripe\Charge::create ([
              "amount" => $req->total * 100,
              "currency" => "usd",
              "source" => $req->stripeToken,
              "description" => "from 2nd project"
      ]);

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

      // Session::flash('success', 'Payment successful!');

      return redirect('/');
  }
}
