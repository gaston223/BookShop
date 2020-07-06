<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
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
Route::get('/product_single/{product}', 'ShopController@showProductSingle')->name('shop_product_single');


// Routes Admin
Route::get('/admin', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/create-product', [ProductsController::class, 'create'])->name('create_product');
Route::get('/create-category', [CategoriesController::class, 'create'])->name('create_category');
Route::post('/store-category', [CategoriesController::class, 'store'])->name('store_category');

//Routes Panier

Route::post('/panier/ajouter', 'CartController@store')->name('cart.store');
