@extends('layout.main')

@section('title','Home')

@section('header')
	<center>
		@include('layout.header')
	</center>
@endsection

@section('halaman','Halaman')

@section('keterangan','Home')

@section('konten')
	@foreach ( $article as $art)
		<div class="card mb-4">
			<img class="reziz" src="{{ $art->featured_image }}" alt="Card image cap">
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
@endsection

@section('sidebar')
	@include('layout.sidebar')
@endsection

@section('footer')
	<center>
		@include('layout.footer')
	</center>
@endsection