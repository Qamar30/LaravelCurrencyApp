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


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('products', 'ProductController');
Route::get('cart', 'CartController@show')->name('cart.show');
Route::get('mail', 'HomeController@mail')->name ('mail');
Route::get('cart/checkout', 'CartController@checkout')->name('cart.checkout');
Route::post('cart/{product}/add', 'CartController@add')->name('cart.add');
Route::get('cart/{rowId}/remove', 'CartController@remove_item')->name('cart.remove_item');
Route::get('cart/{rowId}/minusOne', 'CartController@minusOne')->name('cart.minusOne');
Route::get('cart/{rowId}/plusOne', 'CartController@plusOne')->name('cart.plusOne');


