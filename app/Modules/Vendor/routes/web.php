<?php

use Illuminate\Support\Facades\Route;

Route::group(
[
    'prefix' => config('vendorRoute.prefix.vendor'),
    'namespace' => config('vendorRoute.namespace.vendor'),
    'as' => config('vendorRoute.as.vendor'),
    'middleware' => ['web']
],
function () {


    Route::get('/', 'VendorController@home')->name('home');

    Route::get('/gallery', 'VendorController@gallery')->name('gallery');

    Route::get('/about', 'VendorController@about')->name('about');


   

});
