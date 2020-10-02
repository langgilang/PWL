<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><center>@include('layout.header')</center></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				@include('layout.sidebar')
			</div>
			<div class="col-md-9">
				<p><center>Selamat Datang</center></p>
                <p><center>@include('layout.konten')</center></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h2><center>@include('layout.footer')</center></h2>
			</div>

		</div>
</div>
</body>
</html>