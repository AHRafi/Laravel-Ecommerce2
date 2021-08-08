@extends('layouts.dashboard_master')
@section('page_name')
  Category Update
@endsection
@section('dashboard_content')

<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
<div class="card ">
<div class="card-header text-white bg-primary mb-3">
  <h1>Update Category</h1>
</div>

<div class="card-body">

<form action="{{ url('updateCategoryPost') }}" method="post" enctype="multipart/form-data">
    @csrf
  {{-- enctype="multipart/form-data"   --}}
  <div class="form-group">
    @if (session('update_success_msg'))
      <div class="alert alert-success">
        {{ session('update_success_msg') }}
      </div>
    @endif
    <div class="form-group">


    <label for="exampleInputEmail1">Category Name</label>
    <input type="text"  name="category_name" value="{{ $category_name }}">
    <input type="hidden"  name="category_id" value="{{ $category_id }}">
  </div>

  </div>
  {{-- <div class="form-group" >
    <label for="exampleInputEmail1">Product Price</label>
    <input type="text" class="form-control" name="product_price" value="{{$product_price}}">


  </div> --}}
  <div class="form-group" >
    <label for="exampleInputEmail1">Current Category Photo</label>

    <img type='file' class="form-group" src="{{ asset('uploads/category') }}/{{ $category_photo }}" width='400' alt="Not Found">

  </div>
  <div class="form-group" >
    <label for="exampleInputEmail1">New Category Photo</label>
    <input class="form-control" type="file" name="new_category_photo" >
    </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>
</div>
</div>
</div>
@endsection
