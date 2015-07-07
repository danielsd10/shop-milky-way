@extends('admin/layout')

@section('title')
	<span class="fa fa-cube"></span>
    @if(!isset($category))
        Nuevo producto
    @else
        Editar producto
    @endif
@stop

@section('actions')
	<div class="col-md-9">
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-home"></i> <a href="{{url('admin')}}">Inicio</a>
			</li>
			<li>
				<i class="fa fa-cube"></i> <a href="{{url('admin/products')}}">Productos</a>
			</li>
			<li class="active">
                    @if(!isset($product))
                        <i class="fa fa-plus"></i>
                        Nuevo producto
                    @else
                        <i class="fa fa-pencil-square-o"></i>
                        Editar producto
                    @endif
			</li>
		</ol>
	</div>
	<div class="col-md-1">
		<a href="{{url('admin/products')}}" class="btn btn-block btn-default">
			<span class="fa fa-arrow-left"></span>
		</a>
	</div>
	<div class="col-md-2">
		<button id="save" form="formProduct" type="submit" class="btn btn-block btn-success">
			<span class="fa fa-check"></span> Guardar
		</button>
	</div>
@stop

@section('content')
	<div class="col-md-6">
		<form id="formProduct" role="form" method="post" action="{{url('admin/products/'.$product->id)}}">

			<input type="hidden" name="id" value="{{$product->id}}">

			<div class="form-group">
				<label>Nombre</label>
				<input name="name" class="form-control" placeholder="Nombre del producto" value="{{$product->name}}">
			</div>

			<div class="form-group">
				<label>Categoría</label>
				<select name="category" class="form-control">
					@foreach ($categories as $category)
					<option value="{{$category->id}}" @if ($category->id == $product->category_id) selected="selected" @endif >{{$category->name}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label>Precio</label>
				<input name="price" class="form-control" placeholder="0.00" value="{{$product->price}}">
			</div>

			<div class="form-group">
				<label>Imagen</label>
				<input name="image" class="form-control" placeholder="Archivo de imagen" value="{{$product->image}}">
				<p class="help-block">Nombre y extensión del archivo en la carpeta <code>/img</code>.</p>
			</div>

			<div class="form-group">
				<label>Descripción</label>
				<textarea name="description" class="form-control" placeholder="Descripción" rows="4">{{$product->description}}</textarea>
			</div>

		</form>
	</div>
@stop