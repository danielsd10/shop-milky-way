@extends('shop/layout')

@section('content')
	<div class="thumbnail">
		<img class="img-responsive" src="{{asset('img/'.$product->image)}}" alt="">
		<div class="caption-full">
			<h4 class="pull-right">${{$product->price}}</h4>
			<h3>{{$product->name}}</h3>
			<p>{{$product->description}}</p>
		</div>
		<div class="ratings">
			<p class="pull-right">3 reviews</p>
			<p>
				<span class="glyphicon glyphicon-star-empty"></span>
				<span class="glyphicon glyphicon-star-empty"></span>
				<span class="glyphicon glyphicon-star-empty"></span>
				<span class="glyphicon glyphicon-star-empty"></span>
				<span class="glyphicon glyphicon-star-empty"></span>
				{{$product->rate}} stars
			</p>
		</div>
	</div>

	<div class="well">

		<div class="text-right">
			<a class="btn btn-success">Leave a Review</a>
		</div>

		<hr>

		<div class="row">
			<div class="col-md-12">
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star-empty"></span>
				Anonymous
				<span class="pull-right">10 days ago</span>
				<p>This product was great in terms of quality. I would definitely buy another!</p>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-md-12">
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star-empty"></span>
				Anonymous
				<span class="pull-right">12 days ago</span>
				<p>I've alredy ordered another one!</p>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-md-12">
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star-empty"></span>
				Anonymous
				<span class="pull-right">15 days ago</span>
				<p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
			</div>
		</div>

	</div>
@stop