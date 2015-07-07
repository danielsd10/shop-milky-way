<p class="lead">Categorías</p>
<div class="list-group">
	@foreach($categories as $category)
	<a href="/category/{{$category->id}}" class="list-group-item">{{$category->name}}</a>
	@endforeach
</div>