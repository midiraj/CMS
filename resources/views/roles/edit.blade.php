@extends('layouts.app')

@section('title', '| Edit Role')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>
    <h1><i class='fa fa-key'></i> Edit Role: {{$role->name}}</h1>
    <hr>

    {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}
        
        {{method_field('PUT')}}
        
        {{ csrf_field() }}

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $role->name}}">
    </div>

    <h5><b>Assign Permissions</b></h5>
    @foreach ($permissions as $permission)

        {{-- <input name="permissions[]" type="checkbox" class = "fancy-checkbox-default" value={{ $permission->id }} multiple> {{ $permission->name }}
        </input><br> --}}
        {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
        {{Form::label($permission->name, ucfirst($permission->name)) }}<br>

    @endforeach
    <br>

    <div class="form-group">
        <center><button type="submit" class="btn btn-primary">Edit</button></center>
    </div>

    {{ Form::close() }}

    @include('layouts.errors')

</div>

@endsection