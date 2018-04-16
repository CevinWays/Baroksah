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

Route::get('/checkout', 'CheckoutPageController@index')->name('checkout.index')->middleware('auth');
Route::post('/checkout', 'CheckoutPageController@store')->name('checkout.store');

Route::get('/guestCheckout', 'CheckoutPageController@index')->name('guestCheckout.index');

Route::get('/product', 'ProductPageController@index')->name('product.index');
Route::get('/thankyou', 'ThanksPageController@index')->name('thankyou.index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mailable',function(){
    $order = App\Order::find(1);

    return new App\Mail\OrderPlaced($order);
});

Route::get('/search','ShopPageController@search')->name('search');

Route::get('/profile','UserController@profile')->name('profile');
Route::post('/profile','UserController@update')->name('profile.update');