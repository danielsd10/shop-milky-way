<?php

class ShopController extends BaseController {

	public function showIndex()
	{
		return View::make('index');
	}

	public function showCategory()
	{
		return View::make('category');
	}

	public function showProductDetail()
	{
		return View::make('product');
	}

}
