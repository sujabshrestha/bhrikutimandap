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


    Route::get('/', 'VendorController@index')->name('home');

    Route::get('create', 'VendorController@create')->name('create');

    Route::post('store', 'VendorController@store')->name('store');

    Route::get('edit/{slug}', 'VendorController@edit')->name('edit');

    Route::post('update/{slug}', 'VendorController@update')->name('update');

    Route::get('delete/{slug}', 'VendorController@delete')->name('delete');


});
