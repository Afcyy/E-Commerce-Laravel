<?php

use Gloudemans\Shoppingcart\Facades\Cart;

Route::get('/', 'LandingPageController@index')->name('landing-page');


Route::get('/products', 'ShopController@index')->name('shop.index');
Route::get('/product/{slug}', 'ShopController@show')->name('shop.show');


Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');

Route::delete('/saveForLater/{product}', 'CartController@destroySavedForLater')->name('cart.destroySavedForLater');
Route::post('/saveForLater/switchToCart/{product}', 'CartController@switchToCart')->name('cart.switchToCart');

Route::get('empty', function () {
    Cart::destroy();
    Cart::instance('saveForLater')->destroy();
});

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');


Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');


