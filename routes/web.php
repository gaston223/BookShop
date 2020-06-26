<?php

use App\Http\Controllers\ShopController;
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

Route::get('/', 'ShopController@home')->name('shop_home');
Route::get('/wishlist', 'ShopController@wishlist')->name('shop_wishlist');
Route::get('/cart', 'ShopController@cart')->name('shop_cart');
Route::get('/checkout', 'ShopController@checkout')->name('shop_checkout');
Route::get('/product_single', 'ShopController@productSingle')->name('shop_product_single');


Route::get('/admin', 'AdminController@admin')->name('admin');
