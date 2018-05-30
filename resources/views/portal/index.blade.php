@extends('main')

@section('title', ' |Recent Posts')

@section('content')


<div class="col-md-2 col-md-offset-8">
		<a href="{{route('posts.create')}}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create new Post</a>
	</div>

<div class="col-md-12">
	<h1>Post</h1>
</div>

	@foreach($posts as $post)
	<div class="row">
	  <div class="col-md-4 col-md-offset-2">		
		<h2>{{$post->title}}</h2> 
		<h5>Published: {{date('M j, Y', strtotime($post->created_at))}}</h5>
		<!-- Truncating a string -->
		<p>{{substr($post->body, 0, 50)}}</p>
			<!-- Add a ... at the truncated string -->
		{{strlen($post->body)>50?" . . .":""}}
		<a href="{{route('portal.single', $post->id)}}" class="btn btn-primary">Read More</a>
	  <hr>
	</div>
	</div>
		
	@endforeach
	<div class="row">
	  <div class="col-md-12">
		<div class="text-center">	
					{!!$posts->links(); !!}
		</div>
	</div>
</div>
			


@endsection 
<!--or use stop-->