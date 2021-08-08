@extends('layouts.dashboard_master')
@section('page_name')
  home
@endsection

@section('dashboard_content')

  <div class="container">
    <div class="row">
      <table class="table table-border">
        <thead>
          <tr>
            <th>Serial</th>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Action</th>

          </tr>
        </thead>
        @foreach ($users as $user)
          <tbody>
            <tr>
              <td>{{ $loop->index + 1}}</td>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->created_at }}</td>
              <td>
                <a href="{{ url("deleteUser") }}/{{ $user->id }}" type="button" class="btn btn-secondary">Delete</a>
              </td>
            </tr>
          </tbody>
        @endforeach

    </div>

  </div>

@endsection
