<p class="lead">Categorías</p>
<div class="list-group">
	@foreach($categories as $category)
	<a href="{{url('/category/'.$category->id)}}" class="list-group-item @if (isset($selectedCategory) && $selectedCategory->id == $category->id) active @endif">{{$category->name}}</a>
	@endforeach
</div>