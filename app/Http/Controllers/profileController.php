<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;

class profileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
      return view('editprofile');
    }
    public function editprofilePost(Request $req)
    {
      $req->validate([
        'name' => 'required'
      ]);
      User::find(Auth::id())->update([
        'name' => $req->name
      ]);
      return back()->with('success_msg','Name Updated Successfully!');

    }
    public function editprofilepasswordPost(Request $req){
      $req->validate([
        'old_password'=> 'required',
        'password'=> 'required|confirmed',
        'password_confirmation'=> 'required'
      ]);
      $old_password_frm_user = $req->old_password;
      $new_password_frm_user = $req->password;
      if ( $old_password_frm_user== $new_password_frm_user ) {
        return back()->with('error_msg','Old Password and New Password can not be same!');
      };
      $old_password_frm_bd = User::find(Auth::id())->password;
      if (Hash::check($old_password_frm_user,$old_password_frm_bd)) {
        User::find(Auth::id())->update([
          'password' => Hash::make($new_password_frm_user)
        ]);
        return back()->with('success_msg_ok','Password changed successfully!');
      }else {
        return back()->with('error_msg_sad','Old Password Did not match!');
      }


    }
}
