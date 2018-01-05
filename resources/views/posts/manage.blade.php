@extends('layouts.app')


@section('content')

<div class="container">
	


	
	<table class="table">
            
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    
                </tr>
            </thead>

            <tbody>

	            @foreach($posts as $post)
	                <tr>
	                    
	                    <th>{{ $post->id }}</th>
	                    
	                    <th>{{ $post->title }}</th>
	                    
	                    <th>

	                    <a href="{{ route('posts.edit', $post->id) }} " class="btn btn-primary">Edit</a>
	                    
	                    <a href="{{ route('posts.show', $post->id) }} " class="btn btn-primary">View</a>
	                    </th>
	                    <th>
	                    	<a href="#" class="btn btn-primary">Publish</a>
	                    </th>
	                    <th>
	                    <form action=" {{ route('posts.destroy', $post->id) }}" method = "POST">
						<input type="hidden" name="_method" value="DELETE">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button type="submit" class="btn btn-danger">Delete?</button>
						</form>

	                    
	                    </th>

	                </tr>

	            @endforeach

            </tbody>

   		</table>
	
</div>

@endsection