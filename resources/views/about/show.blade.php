@extends('layout.master')

@section('title','Detil Data')

@section('content')
<div class="col-lg-8">
	<div class="card card-primary card-outline">
		<div class="card-header">
			<h5 class="m-0">Article</h5>
		</div>
		<div class="card-body">
			<img width="150px" src="{{asset('storage/app/public/images/'.$abouts->image)}}">
                <div class="card-body">
                    <h5 class="card-title">{{ $abouts->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $abouts->nim }}</h6>
                    <p class="card-text">{{ $abouts->alamat }}</p>
                    <a href="/about" class="card-link">kembali</a>
                </div>
		</div>
	</div>
</div>
    
@endsection

