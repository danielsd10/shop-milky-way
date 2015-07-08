<?php

class AdminController extends BaseController {

	public function showIndex()
	{
		return View::make('admin.index');
	}

	public function showCategories()
	{
		$categories = Category::all();
		return View::make('admin.categories', ['categories' => $categories]);
	}

	public function createCategory()
	{
		return View::make('admin.categories-edit');
	}

	public function showCategory($categoryId)
	{
		$category = Category::find($categoryId);
		return View::make('admin.categories-edit', ['category' => $category]);
	}

	public function saveCategory($categoryId = null)
	{
		if(is_null($categoryId)){
			$category = new Category();
		} else {
			$category = Category::find($categoryId);
		}
		$category->name = Input::get('name');
		$category->image = Input::get('image');
		$category->save();
		return Redirect::to('admin/categories');
	}

	public function deleteCategory($categoryId)
	{
		$category = Category::find($categoryId);
		$category->delete();
        $response = Response::make("", "204");
		return $response;
	}

	public function showProducts()
	{
		$products = Product::with('category')->get();
		return View::make('admin.products', ['products' => $products]);
	}

	public function createProduct()
	{
		$product = new Product;
		$categories = Category::all();
		return View::make('admin.products-edit', ['product' => $product, 'categories' => $categories]);
	}

	public function showProduct($productId)
	{
		$product = Product::find($productId);
		$categories = Category::all();
		return View::make('admin.products-edit', ['product' => $product, 'categories' => $categories]);
	}

	public function saveProduct($productId = null)
	{
		if(is_null($productId)){
			$product = new Product();
		} else {
			$product = Product::find($productId);
		}
		$product->name = Input::get('name');
		$product->category = Input::get('category');
		$product->description = Input::get('description');
		$product->image = Input::get('image');
		$product->price = Input::get('price');
		$product->save();
		return Redirect::to('admin/products');
	}

	public function deleteProduct($productId)
	{
		$product = Product::find($productId);
		$product->delete();
		$response = Response::make("", "204");
		return $response;
	}

}
