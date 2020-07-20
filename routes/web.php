<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'api'], function () {
    Route::resource('/products', 'ProductController')->only(['index', 'show']);
    Route::resource('/cart', 'CartController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('/coupons', 'CouponController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('/orders', 'OrderController')->only(['index', 'store', 'update']);
});
