<?php
use RealRashid\SweetAlert\Facades\Alert;



route::get('/','TestController@welcome');


Auth::routes();


Route::get('/search', 'SearchController@show');
Route::get('/products/json', 'SearchController@data');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products/{id}', 'ProductController@show'); 
Route::get('/categories/{category}', 'CategoryController@show'); 


Route::post('/cart', 'cartDetailController@store'); 
Route::delete('/cart', 'cartDetailController@destroy');
Route::post('/order', 'carrtController@update'); 

Route::middleware(['auth', 'admin'])->prefix('admin')->namespace('admin')->group(function () {
	Route::get('/products', 'ProductController@index'); //listado
	Route::get('/products/create', 'ProductController@create'); // formulario
	Route::post('/products', 'ProductController@store'); // registrar
	Route::get('/products/{id}/edit', 'ProductController@edit'); // formulario edición
	Route::post('/products/{id}/edit', 'ProductController@update'); // actualizar
	Route::delete('/products/{id}', 'ProductController@destroy'); // form eliminar

	Route::get('/products/{id}/images', 'ImageController@index');
	Route::post('/products/{id}/images', 'ImageController@store'); // registrar
	Route::delete('/products/{id}/images', 'ImageController@destroy'); // form eliminar
	Route::get('/products/{id}/images/select/{image}', 'ImageController@select');

	Route::get('/categories', 'categoryController@index'); //listado
	Route::get('/categories/create', 'categoryController@create'); // formulario
	Route::post('/categories', 'categoryController@store'); // registrar
	Route::get('/categories/{id}/edit', 'categoryController@edit'); // formulario edición
	Route::post('/categories/{id}/edit', 'categoryController@update'); // actualizar
	Route::delete('/categories/{id}', 'categoryController@destroy'); // form eliminar


	Route::get('/sliders', 'slidersController@index'); //listado
	Route::post('/sliders', 'slidersController@store');
	Route::delete('/sliders/{id}', 'slidersController@destroy');


	//usuarios
	
	Route::get('/users', 'UserController@index'); //listado
	Route::get('/users/create', 'UserController@create'); // formulario
	Route::post('/users', 'userController@store'); // registrar
	Route::get('/users/{id}/edit', 'UserController@edit'); // formulario edición
	Route::post('/users/{id}/edit', 'UserController@update'); // actualizar
	Route::delete('/users/{id}', 'UserController@destroy'); // form eliminar*/

	});









/*Route::get('/admin/products', 'productController@index');//lista productos
Route::get('/admin/products/create', 'productController@create');//formulario de productos
Route::post('/admin/products', 'productController@store');//creacion de productos
Route::get('/admin/products/{id}/edit', 'productController@edit');//FOR DE EDICION
Route::post('/admin/products/{id}/edit', 'productController@update');//ACTUALIZA
Route::get('/admin/products/{id}/delete', 'productController@destroy');//elimina
*/