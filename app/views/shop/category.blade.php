@extends('shop/layout')

@section('content')
	<div class="row">

		<div class="col-sm-12">
			<div class="well">

				<div class="row">
					<div class="col-sm-4">
						<h4>{{$selectedCategory->name}}</h4>
					</div>

					<div class="col-sm-8">
						<div class="input-group">
							<input type="text" class="form-control">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">
									<span class="glyphicon glyphicon-search"></span>
								</button>
							</span>
						</div> <!-- /.input-group -->
					</div>

				</div>

			</div>
		</div>

		@forelse ($products as $product)
		<div class="col-sm-4 col-lg-4 col-md-4">
			<div class="thumbnail">
				<img src="{{asset('img/'.$product->image)}}" style="width: 320px; height: 150px" alt="">
				<div class="caption">
					<h4 class="pull-right">${{$product->price}}</h4>
					<h4><a href="{{url('/product/'.$product->id)}}">{{$product->name}}</a>
					</h4>
					<p>{{$product->description}}</p>
				</div>
				<div class="ratings">
					<p class="pull-right">15 reviews</p>
					<p>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
					</p>
				</div>
			</div>
		</div>
		@empty
		<div class="col-sm-12">
			<div class="alert alert-info" role="alert">
				<p>No se encontraron productos.</p>
			</div>
		</div>
		@endforelse

	</div>
@stop