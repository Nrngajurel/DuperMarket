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
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/account', 'AccountController@index')->name('account');

Route::get('/test', function (){
return \App\User::get_user();

});

//Brand
Route::get('/brands','BrandController@manage')->name('brands.manage');



//product
Route::get('/products', 'ProductController@index')->name('product.index');
