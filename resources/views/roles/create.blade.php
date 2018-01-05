@extends('layouts.app')

@section('title', '| Add Role')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    <h1><i class='fa fa-key'></i> Add Role</h1>
    <hr>

    <form class="form-horizontal" method="POST" action="{{route('roles.store')}}">
    
        {{ csrf_field() }}

    <div class="form-group">
        
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name">
      
    </div>

    <h5><b>Assign Permissions</b></h5>

    <div class='form-group'>
        @foreach ($permissions as $permission)

            <input name="permissions[]" type="checkbox" class = "fancy-checkbox-default" value={{ $permission->id }} multiple> {{ $permission->name }}
            </input><br>

        @endforeach
    </div>

    <div class="form-group">
        <center><button type="submit" class="btn btn-primary">Add</button></center>
    </div>

    </form>

    @include('layouts.errors')

</div>

@endsection