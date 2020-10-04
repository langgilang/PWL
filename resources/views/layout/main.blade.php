<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>@yield('title')</title>

	<!-- Bootstrap core CSS -->
	<link href="{{ ('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ ('/css/blog-home.css') }}" rel="stylesheet">

</head>

<body>

    <header class="py-5 bg-light">
		<div class="container">
			<p class="m-0 text-center text-white">@yield('header')</p>
		</div>
		<!-- /.container -->
	</header>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">Start Bootstrap</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item ">
						<a class="nav-link" href="{{ url('/') }}">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ url('about') }}">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ url('article') }}">Article</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Page Content -->
	<div class="container">

		<div class="row">

			<!-- Blog Entries Column -->
			<div class="col-md-8">

				<h1 class="my-4">@yield('halaman')
					<small>@yield('keterangan')</small>
				</h1>

				<!-- Blog Post -->
                @yield('konten')

				<!-- Pagination -->
				<ul class="pagination justify-content-center mb-4">
					<li class="page-item">
						<a class="page-link" href="#">&larr; Older</a>
					</li>
					<li class="page-item disabled">
						<a class="page-link" href="#">Newer &rarr;</a>
					</li>
				</ul>

			</div>

			<!-- Sidebar Widgets Column -->
			<div class="col-md-4">

				<!-- Categories Widget -->
				<div class="card my-4">
					<h5 class="card-header">Sidebar</h5>
					@yield('sidebar')
				</div>

			</div>

		</div>
		<!-- /.row -->

	</div>
	<!-- /.container -->

	<!-- Footer -->
	<footer class="py-5 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">@yield('footer')</p>
		</div>
		<!-- /.container -->
	</footer>

	<!-- Bootstrap core JavaScript -->
	<script src="{{ ('/vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ ('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
