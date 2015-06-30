<!DOCTYPE html>
<html lang="es">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="shop admin">
		<meta name="author" content="Daniel Salas <danielsd10@gmail.com>">

		<title>e-Commerce Admin</title>

		<!-- Bootstrap Core CSS -->
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="{{asset('css/layout-admin.css')}}" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		@include('admin/navigation')
		</nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
							@yield('title')
						</h1>
                    </div>
                </div>
				<!-- /.row -->

				<!-- Breadcrumb & Actions -->
				@yield('actions')
                <!-- /.row -->

				<!-- Content -->
				@yield('content')
				<!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

	<!-- View scripts -->
	@yield('script')

</body>

</html>
