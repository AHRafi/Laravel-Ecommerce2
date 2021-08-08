<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use Carbon\Carbon;

class couponController extends Controller
{
  
    public function coupon()
    {
      return view('coupon',[
        'coupons' => Coupon::get()
      ]);
    }
    public function couponPost(Request $req)
    {
      Coupon::insert([
        'name' => $req->coupon_name,
        'persentage' => $req->persentage,
        'deadline' => $req->dead_line,
        'created_at' => Carbon::now()
      ]);
      return back()->with('success_msg','Coupon Added Succesfully!');
    }
    function couponfunction($coupon_name = ""){


        if ($coupon_name) {
          if (Coupon::where('name',$coupon_name)->exists()) {
                  if (Coupon::where('name',$coupon_name)->first()->deadline >= Carbon::now()->format('Y-m-d')) {
                   return view('cart',[
                     'discount_persentage'=> Coupon::where('name',$coupon_name)->first()->persentage,
                     'coupon_name'=> Coupon::where('name',$coupon_name)->first()->name
                   ]);
                  }
                  else
                  {
                  return redirect('coupon')->with('invalid_coupon_date','Coupon Dedline Is Over!');
                  }
          } else {
            return redirect('coupon')->with('invalid_coupon','Invalid Coupon!');
          }

        }else {
          return view('cart');
          }


    }
}
