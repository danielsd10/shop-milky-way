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

}
