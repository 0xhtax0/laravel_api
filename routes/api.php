<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//only: chỉ sử dụng các phương thức này
// Route::resource('customer', 'CustomerController')->only(['index','show','update','delete','store']);
//except: chạy tất cả ngoại trừ các phương thức này
// Route::resource('customer', 'CustomerController')->except(['edit','create']);


// Route::resource('customer', 'CustomerController')->only(['index','show','update','delete','store']);

//version
//version api v1
// Route::resource('v1/customer', 'Api\v1\CustomerController')->only(['index','show','update','delete','store']);

Route::prefix('v1')->group(function(){
    Route::resource('customer', 'Api\v1\CustomerController')->only(['index','show','update','delete','store']);

    Route::resource('category', 'Api\v1\CategoryPostController');

    Route::resource('post', 'Api\v1\PostController');

    Route::resource('bai-viet', 'Api\v1\BaivietController');

    Route::resource('danh-muc', 'Api\v1\DanhmucController');

});

//version api v2
Route::prefix('v2')->group(function(){
    Route::resource('customer', 'Api\v2\CustomerController')->only(['show']);
});
