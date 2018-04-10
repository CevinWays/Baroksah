<?php

use Gloudemans\Shoppingcart\Facades\Cart;
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
Route::post('/cart', 'CartPageController@store')->name('cart.store');

Route::delete('/cart/{product}', 'CartPageController@destroy')->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}', 'CartPageController@switchToSaveForLater')->name('cart.switchToSaveForLater');

Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/saveForLater/switchToCart/{product}', 'SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');

Route::post('/coupon','CouponsController@store')->name('coupon.store');
Route::delete('/coupon','CouponsController@destroy')->name('coupon.destroy');

Route::get('/checkout', 'CheckoutPageController@index')->name('checkout.index');
Route::post('/checkout', 'CheckoutPageController@store')->name('checkout.store');

// Route::get('empty', function(){
//     Cart::instance('saveForLater')->destroy();
// });

Route::get('/product', 'ProductPageController@index')->name('product.index');
Route::get('/thankyou', 'ThanksPageController@index')->name('thankyou.index');
Route::get('/checkout', 'CheckoutPageController@index')->name('checkout.index');