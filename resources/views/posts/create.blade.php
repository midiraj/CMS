@extends('layouts.app')

@section('title', '| Create New Post')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <h1>Create New Post</h1>
        <hr>

    {{-- Using the Laravel HTML Form Collective to create our form --}}
           {{ Form::open(['route' => 'posts.store']) }}
                    
                    {{ csrf_field() }}
                        
                        
                      <div class="form-group">
                        <label for="title">Title:- </label>
                        <input type="text" class="form-control" id="title" name="title">
                      </div>

                      <div class="form-group">
                        <label for="body">Body</label>
                        <textarea type="textarea" class="form-control" id="body" name="body" rows="15" cols="30"></textarea>
                      </div>


                      <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
                      </div>
                      
            {{ Form::close() }}

                @include('layouts.errors')

        </div>

    </div>

@endsection