<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('admin.pages.index');
});

//Route::group(['prefix' => 'admin'], function (){
//    Route::resource('category', 'CategoryController');
//});

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', function () {
        return view('admin.pages.index');
    });

    Route::resources([
        'category' => 'CategoryController',
        'productType' => 'ProductTypeController',
        'user' => 'UserController',
        'order' => 'OrderController',
        'product' => 'ProductController']);
});
//
//Route::group(['prefix' => 'admin'], function () {
//    Route::get('posts', 'PostController@index');
//    Route::get('posts/create', 'PostController@create');
//    Route::post('posts/store', 'PostController@store');
//    Route::get('posts/{id}/edit', 'PostController@edit');
//    Route::get('post/{id}', 'PostController@update');
//    Route::patch('posts/{id}', 'PostController@update');
//    Route::patch('posts/{id}', 'PostController@destroy');
//});
