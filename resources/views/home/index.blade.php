@extends('layout.master')

@section('title_content', 'Home')


@section('content')
<div class="col-lg-8">
	<div class="card card-primary card-outline">
		<div class="card-header">
			<h5 class="m-0">Home</h5>
		</div>
		<div class="card-body">
		@foreach ( $article as $art)
		<div class="card mb-3">
			<img height="350px" src="{{ asset('storage/'.$art->featured_image)}}">
			<div class="card-body">
				<h5 class="card-title">{{ $art->title }}</h5>
				<p class="card-text">{{ $art->content }}</p>
				<p class="card-text"><small class="text-muted">Posted on {{ $art->created_at }}</small></p>
			</div>
		</div>
		@endforeach
		</div>
	</div>
</div>
@endsection