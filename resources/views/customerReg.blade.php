@extends('layouts.frontend_master')
@section('frontend_content')
  <main class="main">
      <div class="page-content">
  <div class="container">
      <div class="row">
        @if (session('success_msg'))
          <div class="alert alert-success text-white">
            <span>{{ session('success_msg') }}</span>
          </div>
        @endif
        @if (session('unsuccess_msg'))
          <div class="alert alert-danger text-white">
            <span>{{ session('unsuccess_msg') }}</span>
          </div>
        @endif
        @if (session('unsuccess_email_msg'))
          <div class="alert alert-danger text-white">
            <span>{{ session('unsuccess_email_msg') }}</span>
          </div>
        @endif


                  <form method="post" action="customerRegistrationPost">
                    @csrf
                  <div  class="form-group">
                    <label class="text-primary" >Name</label>
                    <input name="name" class="form-control"  placeholder="Enter Name">
                    <br>
                  </div>
                  <div class="form-group">
                    <label class="text-primary">Email address</label>
                    <input type="email" name="email" class="form-control"   placeholder="Enter email">
                    <br>
                  </div>
                  <div class="form-group">
                    <label class="text-primary">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <br>
                  </div>
                  <div class="form-group">
                    <label class="text-primary">Confirm Password</label>
                    <input type="password" name="con_password" class="form-control"  placeholder="Confirm Password">
                    <br>
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>

          </div>
      </div>
  </div>
  </div>
</main>
@endsection
