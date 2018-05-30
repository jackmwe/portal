
@extends('main')

@section('title', ' |View Contact')

@section('stylesheets')
    {!! Html::style('css/parsley.css')!!}
@endsection

@section('content')
	<div class="row">
		<div class="col-md-8">
	
			<h1> {{$post->title}}</h1>
			<p class="lead"> {{$post->body}} </p>
			<hr>
			<p> Posted In: {{ $post->category->name}}</p>
			
@if(auth()->user()->isAdmin())
	<a href="{{route('posts.index')}}" class="btn btn-lg btn-block btn-info btn-h1-spacing"><< See All Posts Here</a>
@endif
	
		</div>
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
			  <dt>Category</dt>
			  <dd>{{$post->category->name}}</dd>
			</dl>
			
			<dl class="dl-horizontal">
			  <dt>Created at</dt>
			  <dd>{{date('M j, Y H:i', strtotime($post->created_at))}}</dd>
			</dl>
			<dl class="dl-horizontal">
			  <dt>Last Update</dt>
			  <dd>{{date('M j, Y H:i', strtotime($post->updated_at))}}</dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					{!! Html::linkRoute('posts.edit','Edit', array($post->id), array('class'=>'btn btn-primary btn-block'))!!}
					
				</div>
				<div class="col-sm-6">
					{!!Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'DELETE'])!!}

					
					{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-block']) !!}

					{!!Form::close()!!}
				</div>

		</div>
	</div>
</div>
</div>
@endsection

