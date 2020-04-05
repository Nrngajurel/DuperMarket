<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('/Brands', 'BrandController@index')->name('admin.brands.index');

Route::fallback(function () {
    return view('admin.404');
});

