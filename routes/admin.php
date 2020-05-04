<?php

use Illuminate\Support\Facades\Route;


Route::middleware('auth')->name('admin.')->group(function (){

    Route::get('/', 'DashboardController@index')->name('dashboard');
//    Brand Routes
    Route::resource('brands','BrandController');
//    Product Routes
    Route::resource('products','ProductController');
//    Coupon Routes
    Route::resource('coupons','CouponController');
    //    Tag Routes
    Route::resource('tags','TagController');
//    Category Routes
    Route::resource('categories','CategoryController');
//    Filters Routes
    Route::resource('filters','FilterController');



    Route::fallback(function () {
        return view('admin.404');
    });
});

