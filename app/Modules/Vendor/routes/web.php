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


    Route::get('/','VendorController@home')->name('home');

    Route::get('/gallery','VendorController@gallery')->name('gallery');

    Route::get('/about','VendorController@about')->name('about');

    Route::get('/rules','VendorController@rules')->name('rules');

    Route::get('/my-account','VendorController@myAccount')->name('myAccount');

    Route::get('/my-booking','VendorController@myBooking')->name('myBooking');


    // Booking Section

    Route::post('/venue-booking','VendorBooking@bookingStore')->name('bookingStore');

    Route::post('/venue-booking-filter','VendorBooking@bookingFilter')->name('bookingFilter');



});
