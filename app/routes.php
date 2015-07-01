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

Route::get('/', 'ShopController@showIndex');
Route::get('/category', 'ShopController@showCategory');
Route::get('/product', 'ShopController@showProductDetail');

/* Admin routes */
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
/*Route::filter('auth', function($route, $request) {
	if (Auth::guest()) return Redirect::guest('/admin/login'); // /login url
});*/
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function() {
	Route::get('/', 'AdminController@showIndex');

	Route::get('/categories', 'AdminController@showCategories');
	Route::get('/categories/create', ['as' => 'createCategory', 'uses' => 'AdminController@createCategory']);
	Route::get('/categories/{id}', 'AdminController@showCategory')->where('id', '[0-9]+');
	Route::post('/categories', 'AdminController@saveCategory');
	Route::post('/categories/{id}', 'AdminController@saveCategory')->where('id', '[0-9]+');
	Route::delete('/categories/{id}', 'AdminController@deleteCategory')->where('id', '[0-9]+');
});