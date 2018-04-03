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
Route::get('/', 'LandingPageController@index')->name('landing-page');
Route::get('/shop', 'ShopPageController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopPageController@show')->name('shop.show');
Route::get('/cart', 'CartPageController@index')->name('cart.index');

Route::get('/product', 'ProductPageController@index')->name('product.index');
Route::get('/thankyou', 'ThanksPageController@index')->name('thanks.index');
Route::get('/checkout', 'CheckoutPageController@index')->name('checkout.index');