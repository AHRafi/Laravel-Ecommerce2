@extends('layouts.dashboard_master')
@section('page_name')
  Category
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
              {{ 'Add Category' }}
            </div>
            <div class="card-body">
              <form action="{{ url('categoryPost') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if (session("success_msg"))
                  <div class="alert alert-success">
                    {{ session("success_msg") }}
                  </div>

                @endif
              <div class="form-group">
                <label for="exampleInputEmail1">Add New Category</label>
                <input type="text" class="form-control" placeholder="Category Name" name='category_name'>

              </div>
              @error ('category_name')
                <span class="text-danger"> {{  $message }}  </span>
                <br>
              @enderror
                <label for="exampleInputEmail1">Category Photo</label>
                <input type="file" class="form-control"  name='category_photo'>

              </div>
              @error ('category_photo')
                <span class="text-danger"> {{  $message }}  </span>
              @enderror

              <button type="submit" class="btn btn-primary">Submit</button>
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
                  <th>Category Name</th>
                  <th>Uploaded By</th>
                  <th>Image</th>
                  <th>Created At</th>
                  <th>Action</th>

                </tr>

            @forelse ($categories as $category)
                  <tbody>
                    <tr>
                      <td>{{ $loop->index + 1}}</td>
                      <td>{{ $category->name }}</td>
                      <td>{{ App\User::find($category->user_id)->name }}</td>
                      <td><img src="{{ asset('uploads/category') }}/{{ $category->photo }}" width='50' alt="Not Found!"></td>
                      <td>{{ $category->created_at }}</td>
                      <td>
                        <a href="{{ url("updateCategory") }}/{{ $category->id }}" type="button" class="btn btn-secondary">Update</a>
                        <a href="{{ url("removeCategory") }}/{{ $category->id }}" type="button" class="btn btn-secondary">Remove</a>
                      </td>
                    </tr>
                  </tbody>
                @empty
                  <tr>
                    <td>
                      <span class="text-danger"> There is no Category! </span>
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

                    @forelse ($deleted_categories as $category)
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
                        @endforelse

                </div>
              </div>

        </div>










@endsection
