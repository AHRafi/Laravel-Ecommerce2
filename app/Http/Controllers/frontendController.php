<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class frontendController extends Controller
{
    public function shop()
    {
      return view('shop',[
        'categories' => Category::all(),
        'products' => Product::all()
      ]);
    }
    public function productDetails($product_id)
    {
      $category_id = Product::find($product_id)->category_id;
      return view('product_details',[
        'product_info' => Product::find($product_id),
        'related_products' => Product::where('category_id',$category_id)->where('id','!=',$product_id)->get()
      ]);
    }
    public function categoryDetails($category_id)
    {
      return view('category_details',[
        'categories' => Category::all(),
        'category_products' => Product::where('category_id',$category_id)->get()
      ]);
    }
}
