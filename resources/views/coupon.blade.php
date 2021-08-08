@extends('layouts.dashboard_master')
@section('page_name')
  Coupon
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
              <form action="{{ url('couponPost') }}" method="post">
                @csrf
                @if (session("success_msg"))
                  <div class="alert alert-success">
                    {{ session("success_msg") }}
                  </div>

                @endif
              <div class="form-group">
                <label for="exampleInputEmail1">Add New Coupon</label>
                <input type="text" class="form-control" placeholder="Coupon Name" name='coupon_name'>

              </div>
              @error ('category_name')
                <span class="text-danger"> {{  $message }}  </span>
                <br>
              @enderror
              <div class="form-group">
                <label for="exampleInputEmail1">Coupon Persentage</label>
                <input type="text" class="form-control" placeholder="Persentage" name='persentage'>

              </div>
              @error ('persentage')
                <span class="text-danger"> {{  $message }}  </span>
                <br>
              @enderror
              <div class="form-group">
                <label for="exampleInputEmail1">Deadline</label>
                <input type="date" class="form-control"  name='dead_line'>

              </div>
              @error ('dead_line')
                <span class="text-danger"> {{  $message }}  </span>
                <br>
              @enderror


              <button type="submit" class="btn btn-primary">Submit</button>
            </form>



          </div>
        </div>
        </div>

        <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="text-danger">Coupon List</th>
                </tr>
                <tr>
                  <th>Serial</th>
                  <th>Coupon Name</th>
                  <th>Persentage</th>
                  <th>Deadline</th>
                  <th>Status</th>
                  <th>Action</th>

                </tr>

            @forelse ($coupons as $coupon)
                  <tbody>
                    <tr>
                      <td>{{ $loop->index + 1}}</td>
                      <td>{{ $coupon->name }}</td>
                      <td>{{ $coupon->persentage }}</td>

                      <td>{{ $coupon->deadline }}</td>
                      <td>
                        @if ($coupon->deadline >= Carbon\Carbon::now()->format('Y-m-d'))
                          <span class="label label-success">Valid</span>
                        @else
                          <span class="label label-danger">Invalid</span>
                        @endif
                      </td>
                      <td>
                        <a href="{{ url("removeCoupon") }}/{{ $coupon->id }}" type="button" class="btn btn-secondary">Remove</a>
                      </td>
                    </tr>
                  </tbody>
                @empty
                  <tr>
                    <td>
                      <span class="text-danger"> There is no Coupon! </span>
                    </td>
                  </tr>
                @endforelse


              </div>

        </div>










@endsection
