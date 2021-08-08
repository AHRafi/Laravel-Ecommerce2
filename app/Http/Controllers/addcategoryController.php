<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Carbon\Carbon;
use Auth;
use Image;

class addcategoryController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function addcategory()
    {

      return view('category',[
        'categories' => Category::all(),
        'deleted_categories' => Category::onlyTrashed()->get()
      ]);
    }
    public function categoryPost(Request $req){
      $req->validate([
        "category_name"=> "required|unique:categories,name",
        "category_photo"=> "required|image"
      ],[
        'category_name.required'=>"Please, Insert Category!"
      ]);
      $category_id = Category::insertGetId([
        'name' => $req->category_name,
        'user_id' => Auth::user()->id,
        'photo' => $req->category_name,
        'created_at' => Carbon::now()
      ]);
      $uploaded_photo= $req->file('category_photo');
      $new_name= $category_id.".".$uploaded_photo->getClientOriginalExtension();
      $uploaded_location = base_path('public/uploads/category/'.$new_name);
      Image::make($uploaded_photo)->resize(600,470)->save($uploaded_location);

      Category::find($category_id)->update([
        'photo'=>$new_name
      ]);
      return back()->with('success_msg',"Category Added Successfully!");

    }
    public function removeCategory($category_id)
    {
      Category::find($category_id)->delete();
      return back();
    }
    public function restoreCategory($category_id)
    {
      Category::onlyTrashed()->find($category_id)->restore();
      return back();
    }
    public function updateCategory($category_id)
    {
      return view('updatecategory',[
        "category_name" => Category::find($category_id)->name,
        "category_id" => $category_id,
        "category_photo" => Category::find($category_id)->photo
      ]);
    }
    public function updateCategoryPost(Request $req)
    {
      if ($req->hasFile('new_category_photo')) {
        $oldphoto_deleted_location = base_path('public/uploads/category/'.Category::find($req->category_id)->photo);
        unlink($oldphoto_deleted_location);

        $uploaded_photo= $req->file('new_category_photo');
        $new_name= $req->category_id.".".$uploaded_photo->getClientOriginalExtension();
        $uploaded_location = base_path('public/uploads/category/'.$new_name);
        Image::make($uploaded_photo)->resize(600,470)->save($uploaded_location);

      };
      Category::find($req->category_id)->update([
        'name' => $req->category_name
      ]);
      return back()->with('update_success_msg','Category Updated Successfully!');
    }
    public function deleteCategory($category_id)
    {
      $oldphoto_deleted_location = base_path('public/uploads/category/'.Category::onlyTrashed()->find($category_id)->photo);
      unlink($oldphoto_deleted_location);
      Category::onlyTrashed()->find($category_id)->forceDelete();
      return back();
    }
}
