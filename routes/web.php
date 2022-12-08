<?php
use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::namespace ('App\Http\Controllers')->group(function () {
    // Route::get('pics', 'Usercontroller@show');
    Route::get('/exm1120', 'SiteController@test');
    Route::get('/pics', 'Usercontroller@inc');
    Route::resource('/posts', 'PostController');
    Route::any('/any', 'PostController@doany');
    Route::resource('/articles', 'ArticleController');

});

route::get('/url', function () {
    //取得網址
    // return url('/pics');
    return action([Usercontroller::class, 'inc']);
});
Route::namespace ('App\Http\Controllers')->group(function () {
    // Route::get('pics', 'Usercontroller@show');
    Route::get('/exm1120', 'SiteController@test');
    Route::get('/pics', 'Usercontroller@inc');
    Route::resource('/posts', 'PostController');
    Route::any('/any', 'PostController@doany');
    Route::resource('/articles', 'ArticleController');

});

route::get('/url', function () {
    //取得網址
    // return url('/pics');
    return action([Usercontroller::class, 'inc']);
});