<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'DashboardController@index')->name('dashboard');


Route::fallback(function () {
    return view('admin.404');
});
