<?php

use App\Components\Shop\Cart;
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
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/account', 'AccountController@index')->name('account');

Route::post('/test', 'CartController@store');

//Brand
Route::get('/brands','BrandController@manage')->name('brands.manage');



//Shop
Route::get('/shop', 'ShopController@index')->name('shop.index');


//Cart Route List
Route::post('/cart','CartController@store')->name('cart.store');
Route::patch('/cart','CartController@update')->name('cart.update');
Route::delete('/cart','CartController@destroy')->name('cart.destroy');
