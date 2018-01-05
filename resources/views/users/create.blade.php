@extends('layouts.app')

@section('title', '| Add User')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    <h1><i class='fa fa-user-plus'></i> Add User</h1>
    <hr>

    <form class="form-horizontal" method="POST" action="{{route('users.store')}}">

    {{ csrf_field() }}

     <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name">
     </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email">
      </div>

    <div class='form-group'>
        @foreach ($roles as $role)
            <input name="roles[]" type="checkbox" class = "fancy-checkbox-default" value={{ $role->id }} multiple> {{ $role->name }}
            </input><br>
        @endforeach
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password_confirmation" class="form-control" id="password_confirmation" name="password_confirmation">
    </div>

    <div class="form-group">
        <center><button type="submit" class="btn btn-primary">Add New User</button></center>
    </div>
    </form>

    @include('layouts.errors')


</div>

@endsection