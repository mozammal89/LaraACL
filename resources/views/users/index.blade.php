@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
  <tr>
    <th>No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Roles</th>
    <th width="280px">Action</th>
  </tr>
  @foreach($data as $key => $user)
  <tr>
    <td>{{$key+1}}</td>
    <td>{{ $user->name }}</td>
    <td>{{$user->email}}</td>
    <td>
     @if(!empty($user->roles))
        @foreach($user->roles as $v)
          <label class="label label-success">{{ $v->display_name }}</label>
        @endforeach
      @endif
    </td>
    <td>
      <a class="btn btn-info btn-sm" href="#">Show</a>
      <a class="btn btn-warning btn-sm" href="#">Edit</a>
      <a class="btn btn-danger btn-sm" href="#">Delete</a>
    </td>
  </tr>
  @endforeach
</table>
  



@endsection