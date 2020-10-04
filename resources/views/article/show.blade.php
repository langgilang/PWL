@extends('layout.main')

@section('title','Show Data')

@section('header')
	<center>
		@include('layout.header')
	</center>
@endsection

@section('halaman','Detil')

@section('keterangan','Article')

@section('konten')
    <div class="card mb-4">
        <img class="card-img-top" src="{{ $article->featured_image }}" alt="Card image cap">
        <div class="card-body">
            <h2 class="card-title">{{ $article->title }}</h2>
            <p class="card-text">
                {{ $article->content }}
            </p>
        </div>
        <div class="card-footer text-muted">
            Posted on {{ $article->created_at }}
        </div>
    </div>
@endsection

@section('sidebar')
	@include('layout.sidebar')
@endsection

@section('footer')
	<center>
		@include('layout.footer')
	</center>
@endsection