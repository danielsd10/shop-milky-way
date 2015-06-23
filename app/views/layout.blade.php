<!DOCTYPE html>
<html lang="es">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="shop">
		<meta name="author" content="Daniel Salas <danielsd10@gmail.com>">

		<title>e-Commerce</title>

		<!-- Bootstrap Core CSS -->
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="{{asset('css/layout.css')}}" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>

		<!-- Navigation -->
		@include('navbar');


		<!-- Page Content -->
		<div class="container">

			<div class="row">

				<div class="col-md-3">
					<!-- Categories menu -->
					@include('categories-menu');
				</div>

				<div class="col-md-9">

					<!-- Section content -->
					@yield('content');

				</div>

			</div>

		</div>
		<!-- /.container -->

		<div class="container">

			<hr>

			<!-- Footer -->
			<footer>
				@include('footer');
			</footer>

		</div>
		<!-- /.container -->

		<!-- jQuery -->
		<script src="{{asset('js/jquery.js')}}"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="{{asset('js/bootstrap.min.js')}}"></script>

	</body>

</html>
