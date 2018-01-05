@extends('layouts.app')

@section('title', '| View Post')

@section('content')

<div class="container">

    <h1>{{ $post->title }}</h1>
    <hr>
    <p class="lead">{{ $post->body }} </p>
    <hr>
    
    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>

    @can('Edit Post')
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info" role="button">Edit
        </a>
    @endcan
    
    @can('Delete Post')
    
        <form action=" {{ route('posts.destroy', $post->id) }}" method = "POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-danger">Delete?</button>
        </form>
    
    @endcan
    

</div>

@endsection