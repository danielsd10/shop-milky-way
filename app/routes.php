<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Shop routes */
Route::get('/', 'ShopController@showIndex');
Route::get('/category/{id}', 'ShopController@showCategory')->where('id', '[0-9]+');
Route::get('/product/{id}', 'ShopController@showProductDetail')->where('id', '[0-9]+');

/* Authentication routes */
Route::get('/login', function(){
	return View::make('admin.login');
});
Route::post('/login', function(){
	if(Auth::attempt(Input::only('username', 'password'))) {
		return Redirect::intended('/admin');
	} else {
		return Redirect::back()
			->withInput()
			->with('error', "Invalid credentials");
	}
});
Route::get('/logout', function(){
	Auth::logout();
	return Redirect::to('/admin')
		->with('message', 'You are now logged out');
});

/* Admin routes */
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function() {
	Route::get('/', 'AdminController@showIndex');

	Route::get('/categories', 'AdminController@showCategories');
	Route::get('/categories/create', ['as' => 'createCategory', 'uses' => 'AdminController@createCategory']);
	Route::get('/categories/{id}', 'AdminController@showCategory')->where('id', '[0-9]+');
	Route::post('/categories', 'AdminController@saveCategory');
	Route::post('/categories/{id}', 'AdminController@saveCategory')->where('id', '[0-9]+');
	Route::delete('/categories/{id}', 'AdminController@deleteCategory')->where('id', '[0-9]+');

	Route::get('/products', 'AdminController@showProducts');
	Route::get('/products/create', 'AdminController@createProduct');
	Route::get('/products/{id}', 'AdminController@showProduct')->where('id', '[0-9]+');
	Route::post('/products', 'AdminController@saveProduct');
	Route::post('/products/{id}', 'AdminController@saveProduct')->where('id', '[0-9]+');
	Route::delete('/products/{id}', 'AdminController@deleteProduct')->where('id', '[0-9]+');
});