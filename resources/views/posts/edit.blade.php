@extends('layouts.app')

@section('title', '| Edit Post')

@section('content')
<div class="row">

    <div class="col-md-8 col-md-offset-2">

        <h1>Edit Post</h1>
        <hr>
            <form method="POST" action="{{ route('posts.update',$post->id) }}"> 

                {{method_field('PUT')}}

                {{ csrf_field() }}
                    
                    
                  <div class="form-group">
                    <label for="title">Title of the Post :- </label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                  </div>

                  <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" id="body" name="body" rows="15" cols="30">{{ $post->body }}</textarea>
                  </div>


                  <button type="submit" class="btn btn-primary">Update</button>
                  

            </form>

            @include('layouts.errors')

    </div>
    </div>
</div>

@endsection