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

Route::get('/', 'HomeController@index');

Route::get('/bai-viet/{id}', 'BaivietController@show');

//Auth
Auth::routes();
Route::get('/home', 'LoginController@index')->name('home');
Route::get('/tim-kiem', 'HomeController@tim_kiem')->name('home');

// Route::prefix('v1')->group(function(){
//     Route::resource('customer', 'Api\v1\CustomerController')->only(['index','show','update','delete','store']);

//     Route::resource('category', 'Api\v1\CategoryPostController');

// });

// Route::prefix('v2')->group(function(){
//     Route::resource('customer', 'Api\v2\CustomerController')->only(['show']);
// });
