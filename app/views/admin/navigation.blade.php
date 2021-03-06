<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="index.html">e-Commerce Admin</a>
</div>

<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{{Auth::user()->username}}} <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<li>
				<a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="{{url('/logout')}}"><i class="fa fa-fw fa-power-off"></i> Cerrar sesión</a>
			</li>
		</ul>
	</li>
</ul>

<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
	<ul class="nav navbar-nav side-nav">
		<li>
			<a href="{{url('/admin/')}}"><i class="fa fa-fw fa-home"></i> Inicio</a>
		</li>
		<li>
			<a href="{{url('/admin/categories')}}"><i class="fa fa-fw fa-tag"></i> Categorías</a>
		</li>
		<li>
			<a href="{{url('/admin/products')}}"><i class="fa fa-fw fa-cube"></i> Productos</a>
		</li>
		<li>
			<a href="{{url('/admin/')}}"><i class="fa fa-fw fa-file-text"></i> Pedidos</a>
		</li>
		<li>
			<a href="{{url('/admin/')}}"><i class="fa fa-fw fa-user"></i> Usuarios</a>
		</li>
	</ul>
</div>