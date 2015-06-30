@extends('admin/layout')

@section('title')
	<span class="fa fa-tag"></span> Categorías
@stop

@section('actions')
	<div class="row">
		<div class="col-md-10">
			<ol class="breadcrumb">
				<li>
					<i class="fa fa-home"></i>  <a href="{{url('/admin/')}}">Inicio</a>
				</li>
				<li class="active">
					<i class="fa fa-tag"></i> Categorías
				</li>
			</ol>
		</div>
		<div class="col-md-2">
			<a href="{{route('createCategory')}}" class="btn btn-block btn-primary">
				<span class="fa fa-plus"></span> Nueva categoría
			</a>
		</div>
	</div>
@stop

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-bordered table-hover">
					<thead>
					<tr>
						<th style="width: 30px;"></th>
						<th>Nombre</th>
					</tr>
					</thead>
					<tbody>
					@foreach($categories as $category)
					<tr>
						<td>
							<div class="btn-group">
								<button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
									<span class="fa fa-bars"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="fa fa-pencil-square-o"></i> Editar</a></li>
									<li><a href="#"><i class="fa fa-trash-o"></i> Eliminar</a></li>
								</ul>
							</div>
						</td>
						<td>{{$category->name}}</td>
					</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@stop
