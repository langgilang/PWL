@extends('layout.main')

@section('title','About')

@section('header')
	<center>
		@include('layout.header')
	</center>
@endsection

@section('halaman','Halaman')

@section('keterangan','About')

@section('konten')
	<div class="card mb-4">
		<div class="card-body">
		<div class="card mb-4">
			<table class="table">
				<thead class="thead-dark">
				<th scope="col">#</th>
					<th scope="col">NIM</th>
					<th scope="col">NAMA</th>
					<th scope="col">AKSI</th>
				</thead>
				<tbody>
				@foreach( $abouts as $b )
					<tr>
						<th scope="row">{{ $loop->iteration }}</th>
						<td>{{ $b->nim }}</td>
						<td>{{ $b->nama }}</td>
						<td>
							<a href="/about/{{ $b->id }}" class="btn btn-info">detil</a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
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