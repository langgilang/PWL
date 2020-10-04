@extends('layout.main')

@section('title','Detil Data')

@section('header')
	<center>
		@include('layout.header')
	</center>
@endsection

@section('halaman','Detil')

@section('keterangan','Data')

@section('konten')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $abouts->nama }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $abouts->nim }}</h6>
            <p class="card-text">{{ $abouts->alamat }}</p>
            <a href="#" class="badge badge-primary">edit</a>
            <a href="#" class="badge badge-danger">hapus</a>
            <a href="/about" class="card-link">kembali</a>
        </div>
    </div><br>
@endsection

@section('sidebar')
	@include('layout.sidebar')
@endsection

@section('footer')
	<center>
		@include('layout.footer')
	</center>
@endsection