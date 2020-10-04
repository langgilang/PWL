@extends('layout.main')

@section('title','Article')

@section('header')
	<center>
		@include('layout.header')
	</center>
@endsection

@section('halaman','Halaman')

@section('keterangan','Article')

@section('konten')
	<div class="card mb-4">
		<div class="card-body">
			<table class="table">
				<thead class="thead-dark">
					<th scope="col">#</th>
					<th scope="col">Title</th>
					<th scope="col">Content</th>
					<th scope="col">Action</th>
				</thead>
				<tbody>
					@foreach ( $article as $art)
						<tr>
							<th scope="row">{{ $loop->iteration }}</th>
							<td scope="row">{{ $art->title }}</td>
							<td scope="row">{{ $art->content }}</td>
							<td>
								<a href="/article/{{ $art->id }}" class="btn btn-info">detil</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
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