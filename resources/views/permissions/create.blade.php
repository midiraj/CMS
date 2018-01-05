@extends('layouts.app')

@section('title', '| Create Permission')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    <h1><i class='fa fa-key'></i> Add Permission</h1>
    <br>

    <form class="form-horizontal" method="POST" action="{{route('permissions.store')}}">
    
        {{ csrf_field() }}

    <div class="form-group">
        
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name">
      
    </div><br>
    @if(!$roles->isEmpty()) //If no roles exist yet
        <h4>Assign Permission to Roles</h4>

        @foreach ($roles as $role) 

            <input name="roles[]" type="checkbox" class = "fancy-checkbox-default" value={{ $role->id }} multiple> {{ $role->name }}
            </input><br>

        @endforeach
    @endif
    <br>

    <div class="form-group">
        <center><button type="submit" class="btn btn-primary">Add</button></center>
    </div>

    </form>

    @include('layouts.errors')
    
</div>

@endsection