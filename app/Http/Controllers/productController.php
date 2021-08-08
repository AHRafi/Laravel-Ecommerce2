<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Carbon\Carbon;
use Image;

class productController extends Controller
{
  public function __construct()
{
    $this->middleware('auth');
}
    public function product(){
      return view('product',[
        'categories' => Category::all(),
        "products" => Product::all()
      ]);
    }
    public function productPost(Request $req){
      $product_id = Product::insertGetId([
        'name' => $req->name,
        'category_id' => $req->category_id,
        'price' => $req->price,
        'quantity' => $req->quantity,
        'thumbnail_photo' => $req->name,
        'thumbnail_photo' => $req->name,
        'short_description' => $req->short_description,
        'long_description' => $req->long_description,
        'created_at' => Carbon::now()
      ]);

      $uploaded_photo= $req->file('thumbnail_photo');
      $new_name= $product_id.".".$uploaded_photo->getClientOriginalExtension();
      $uploaded_location = base_path('public/uploads/product/'.$new_name);
      Image::make($uploaded_photo)->resize(600,470)->save($uploaded_location);

      Product::find($product_id)->update([
        'thumbnail_photo'=>$new_name
      ]);

      return back()->with('success_msg',"Product Uploaded Successfully!");
    }
}
