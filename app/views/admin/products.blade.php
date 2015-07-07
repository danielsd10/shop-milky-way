@extends('admin/layout')

@section('title')
	<span class="fa fa-cube"></span> Productos
@stop

@section('actions')
	<div class="col-md-10">
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-home"></i> <a href="{{url('/admin/')}}">Inicio</a>
			</li>
			<li class="active">
				<i class="fa fa-cube"></i> Productos
			</li>
		</ol>
	</div>
	<div class="col-md-2">
		<a href="{{url('/admin/products/create')}}" class="btn btn-block btn-primary">
			<span class="fa fa-plus"></span> Nuevo producto
		</a>
	</div>
@stop

@section('content')
	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table table-bordered table-hover">
				<thead>
				<tr>
					<th style="width: 30px;"></th>
					<th>Nombre</th>
					<th>Categoría</th>
					<th>Precio</th>
					<th>Registrado</th>
					<th>Modificado</th>
				</tr>
				</thead>
				<tbody>
				@forelse($products as $product)
				<tr>
					<td>
						<div class="btn-group">
							<button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
								<span class="fa fa-bars"></span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="/admin/products/{{$product->id}}"><i class="fa fa-pencil-square-o"></i> Editar</a></li>
								<li><a href="#delete/{{$product->id}}" data-id="{{$product->id}}"><i class="fa fa-trash-o"></i> Eliminar</a></li>
							</ul>
						</div>
					</td>
					<td>{{$product->name}}</td>
					<td>{{$product->category()->first()->name}}</td>
					<td class="text-right">{{$product->price}}</td>
					<td class="text-center">{{$product->created_at}}</td>
					<td class="text-center">{{$product->updated_at}}</td>
				</tr>
				@empty
				<tr>
					<td colspan="6">No se encontraron productos</td>
				</tr>
				@endforelse
				</tbody>
			</table>
		</div>
	</div>
@stop

@section('script')
	<script>
		$(document).ready(function(){
			$("a[href^=#delete]").click(function(e){
				var id = $(this).attr('data-id');
				var row = $(this).parents("tr");
				$.ajax({
					url: '/admin/products/' + id,
					method: 'DELETE',
					statusCode: {
						204: function() {
							row.remove();
						}
					}
				});
				e.preventDefault();
			});
		});
	</script>
@stop