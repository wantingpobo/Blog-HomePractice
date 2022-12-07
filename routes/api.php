<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//指令:php artisan make:controller SiteController
//一次套用所有resouce的七種方法
//指令:php artisan route:list確認

//指令:php artisan make:controller Api/PostController --api
// Route::ApiResource('posts', 'App\Http\Controllers\Api\PostController');

Route::Any('/getclientpics', 'App\Http\Controllers\Api\PostController@getfiles');

// Route::ApiResource('items', 'App\Http\Controllers\Api\ItemController');

Route::namespace ('App\Http\Controllers\Api')->group(function () {
    Route::ApiResource('posts', 'PostController');
    Route::ApiResource('items', 'ItemController');

});
//指令:php artisan make:controller SiteController
//一次套用所有resouce的七種方法
//指令:php artisan route:list確認

//指令:php artisan make:controller Api/PostController --api
// Route::ApiResource('posts', 'App\Http\Controllers\Api\PostController');

Route::Any('/getclientpics', 'App\Http\Controllers\Api\PostController@getfiles');

// Route::ApiResource('items', 'App\Http\Controllers\Api\ItemController');

Route::namespace ('App\Http\Controllers\Api')->group(function () {
    // Route::ApiResource('posts', 'PostController');
    Route::ApiResource('items', 'ItemController');

});