@extends('layout.master')

@section('title','Detil Data')

@section('content')
<div class="col-lg-8">
	<div class="card card-primary card-outline">
		<div class="card-header">
			<h5 class="m-0">Detail User</h5>
		</div>
		<div class="card-body">
			<img width="668px" src="{{ asset('storage/'.$about->featured_image)}}">
                <div class="card-body">
                    <h5 class="card-title">{{ $about->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $about->nim }}</h6>
                    <p class="card-text">{{ $about->alamat }}</p>
                    <a href="/about" class="btn btn-primary">Kembali</a>
                </div>
		</div>
	</div>
</div>
@endsection

