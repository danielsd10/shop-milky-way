<?php

class ShopController extends BaseController {

	public function showIndex()
	{
		return View::make('shop.index');
	}

	public function showCategory()
	{
		return View::make('shop.category');
	}

	public function showProductDetail()
	{
		return View::make('shop.product');
	}

}
