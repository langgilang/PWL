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
			<div class="card mb-4">
				<div class="card-body">
					<h2 class="card-title">{{ $art->title }}</h2>
					<p class="card-text">
						{{ $art->content }}
					</p>
				</div>
				<div class="card-footer text-muted">
					Posted on {{ $art->created_at }}
				</div>
			</div>
		@endforeach
		</div>
	</div>
</div>
@endsection
{{-- <div class="col-lg-8">
	<div class="card card-primary card-outline">
		<div class="card-header">
			<h5 class="m-0">Article</h5>
		</div>
		<div class="card-body">
		
		</div>
	</div>
</div> --}}