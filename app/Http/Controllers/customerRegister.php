<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Hash;

class customerRegister extends Controller
{
    public function customerReg()
    {
      return view('customerReg');
    }
    public function customerRegistrationPost(Request $req)
    {
      if (User::where('email',$req->email)->exists()) {
        return back()->with('unsuccess_email_msg',"This email has been already used!");
      }else {

                                    if ($req->password == $req->con_password ) {
                                        User::insert([
                                          'name' => $req->name,
                                          'email' => $req->email,
                                          'password' => Hash::make($req->password),
                                          'role' => 2,
                                          'created_at' =>  Carbon::now()
                                        ]);
                                        return back()->with('success_msg',"Registered Successfull!");
                                      }else {
                                        return back()->with('unsuccess_msg',"Password & Confirm Password did not match!");
                                      }
        }


    }
}
