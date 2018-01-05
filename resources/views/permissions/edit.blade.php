@extends('layouts.app')

@section('title', '| Edit Permission')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    <h1><i class='fa fa-key'></i> Edit {{$permission->name}}</h1>
    <br>
    <form class="form-horizontal" method="POST" action="{{ route('permissions.update',['permission'=>$permission->id]) }}">
        
        {{method_field('PUT')}}
        
        {{ csrf_field() }}

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $permission->name}}">
      </div>
    <br>
   
   <div class="form-group">
        <center><button type="submit" class="btn btn-primary">Update</button></center>
   </div>

   </form>
      
      
    @include('layouts.errors')

</div>

@endsection