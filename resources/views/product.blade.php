@extends('layouts.dashboard_master')
@section('page_name')
  Product
@endsection
@section('dashboard_content')



<div class="container">


  <div class="row">

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

      <div class="card">
        <div class="card-header">
          {{-- <h3 class="card-title">Earnings</h3> --}}
          <div class="card">
            <div class="card-header text-white bg-secondary">
              {{ 'Add Product' }}
            </div>
            <div class="card-body">
              <form action="{{ url('productPost') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if (session("success_msg"))
                  <div class="alert alert-success">
                    {{ session("success_msg") }}
                  </div>

                @endif

                <div class="form-group">
                  <label for="exampleInputEmail1">Product Name</label>
                  <input type="text" class="form-control" name='name'>

                </div>

                  <label for="exampleInputEmail1">Category Name</label>
                  <select class="form-control" name="category_id">
                    <option value="">-Select One-</option>
                    @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{$category->name}}</option>
                    @endforeach

                  </select>

                  <label for="exampleInputEmail1">Product Price</label>
                  <input type="number" class="form-control"  name='price'>

                  <label for="exampleInputEmail1">Product Quantity</label>
                  <input type="number" class="form-control"  name='quantity'>


                  <label for="exampleInputEmail1">Product Short Description</label>
                  <textarea name="short_description" class="form-control" rows="3"></textarea>


                  <label for="exampleInputEmail1">Product Long Description</label>
                  <textarea name="long_description" class="form-control" rows="3"></textarea>

                  <label for="exampleInputEmail1">Product Thumbnail Photo</label>
                  <input type="file" class="form-control"  name='thumbnail_photo'>

                  {{-- <label for="exampleInputEmail1">Product Multiple Photo</label>
                  <input type="file" class="form-control"  name='product_multiple_photo[]' multiple> --}}
                  <div class="row mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
            </form>



          </div>
        </div>
        </div>

        <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="text-danger">Category List</th>
                </tr>
                <tr>
                  <th>Serial</th>
                  <th>Product Name</th>
                  <th>Category Id</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Photo</th>
                  <th>Short Des</th>
                  <th>long Des</th>
                  <th>Created At</th>
                  <th>Action</th>

                </tr>

            @forelse ($products as $product)
                  <tbody>
                    <tr>
                      <td>{{ $loop->index + 1}}</td>
                      <td>{{ $product->name }}</td>
                      <td>{{ $product->category_id }}</td>
                      <td>{{ $product->price }}</td>
                      <td>{{ $product->quantity }}</td>
                      <td><img src="{{ asset('uploads/product') }}/{{ $product->thumbnail_photo }}" width='50' alt="Not Found!"></td>
                      <td>{{ $product->short_description }}</td>
                      <td>{{ $product->long_description }}</td>
                      <td>{{ $category->created_at }}</td>
                      <td>
                        <a href="{{ url("updateCategory") }}/{{ $product->id }}" type="button" class="btn btn-secondary">Update</a>
                        <a href="{{ url("removeCategory") }}/{{ $product->id }}" type="button" class="btn btn-secondary">Remove</a>
                      </td>
                    </tr>
                  </tbody>
                @empty
                  <tr>
                    <td>
                      <span class="text-danger"> There is no Product! </span>
                    </td>
                  </tr>
                @endforelse

                <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th class="text-danger">Deleted Category List</th>
                        </tr>
                        <tr>
                          <th>Serial</th>
                          <th>Category Name</th>
                          <th>Uploaded By</th>
                          <th>Image</th>
                          <th>Created At</th>
                          <th>Action</th>

                        </tr>

                    {{-- @forelse ($deleted_categories as $category)
                          <tbody>
                            <tr>
                              <td>{{ $loop->index + 1}}</td>
                              <td>{{ $category->name }}</td>
                              <td>{{ App\User::find($category->user_id)->name }}</td>
                              <td><img src="{{ asset('uploads/category') }}/{{ $category->photo }}" width='50' alt="Not Found!"></td>
                              <td>{{ $category->created_at }}</td>
                              <td>
                                <a href="{{ url("restoreCategory") }}/{{ $category->id }}" type="button" class="btn btn-secondary">Restore</a>
                                <a href="{{ url("deleteCategory") }}/{{ $category->id }}" type="button" class="btn btn-secondary">Delete</a>
                              </td>
                            </tr>
                          </tbody>
                        @empty
                          <tr>
                            <td>
                              <span class="text-danger"> There is no Deleted Category! </span>
                            </td>
                          </tr>
                        @endforelse --}}

                </div>
              </div>

        </div>










@endsection
