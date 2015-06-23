<?php

class ShopController extends BaseController {

	public function showIndex()
	{
		$categories = Category::all();
		return View::make('shop.index', ['categories' => $categories]);
	}

	public function showCategory()
	{
		$categories = Category::all();
		return View::make('shop.category', ['categories' => $categories]);
	}

	public function showProductDetail()
	{
		$categories = Category::all();
		return View::make('shop.product', ['categories' => $categories]);
	}

}
