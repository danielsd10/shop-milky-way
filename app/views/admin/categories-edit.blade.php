@extends('admin/layout')

@section('title')
	<span class="fa fa-tag"></span>
    @if(!isset($category))
        Nueva categoría
    @else
        Editar categoría
    @endif
@stop

@section('actions')
	<div class="row">
		<div class="col-md-9">
			<ol class="breadcrumb">
				<li>
					<i class="fa fa-home"></i>  <a href="{{url('/admin/')}}">Inicio</a>
				</li>
				<li>
					<i class="fa fa-tag"></i> <a href="{{url('admin/categories')}}">Categorías</a>
				</li>
				<li class="active">
                    @if(!isset($category))
                        <i class="fa fa-plus"></i>
                        Nueva categoría
                    @else
                        <i class="fa fa-pencil-square-o"></i>
                        Editar categoría
                    @endif
				</li>
			</ol>
		</div>
		<div class="col-md-1">
			<a href="{{url('admin/categories')}}" class="btn btn-block btn-default">
				<span class="fa fa-arrow-left"></span>
			</a>
		</div>
		<div class="col-md-2">
			<button id="save" form="formCategory" type="submit" class="btn btn-block btn-success">
				<span class="fa fa-check"></span> Guardar
			</button>
		</div>

	</div>
@stop

@section('content')
	<div class="row">
		<div class="col-md-6">
			<form id="formCategory" role="form" method="post" action="{{url('admin/categories/'.(isset($category) ? $category->id : ''))}}">

				<input type="hidden" name="id" value="{{$category->id or ''}}">

				<div class="form-group">
					<label>Nombre</label>
					<input name="name" class="form-control" placeholder="Nombre de la categoría" value="{{$category->name or ''}}">
				</div>

				<div class="form-group">
					<label>Imagen</label>
					<input name="image" class="form-control" placeholder="Archivo de imagen" value="{{$category->image or ''}}">
					<p class="help-block">Nombre y extensión del archivo en la carpeta <code>/img</code>.</p>
				</div>

			</form>
		</div>
	</div>
@stop

@section('script')
<script>
	$(document).ready(function(){
		$("#formCategory").submit(function(){
			//alert('submit');
			//return false;
		});
	});
</script>
@stop
