<?php

class ShopController extends BaseController {

	public function showIndex()
	{
		$categories = Category::all();
		$products = Product::all();
		return View::make('shop.index', ['categories' => $categories, 'products' => $products]);
	}

	public function showCategory($categoryId)
	{
		$categories = Category::all();
		$selectedCategory = Category::find($categoryId);
		$products = Product::where('category', '=', $categoryId)->get();
		return View::make('shop.category', ['categories' => $categories,
			'selectedCategory' => $selectedCategory, 'products' => $products]);
	}

	public function showProductDetail($productId)
	{
		$categories = Category::all();
		$product = Product::find($productId);
		$selectedCategory = Category::find($product->category);
		return View::make('shop.product', ['categories' => $categories,
			'product' => $product, 'selectedCategory' => $selectedCategory]);
	}

}
