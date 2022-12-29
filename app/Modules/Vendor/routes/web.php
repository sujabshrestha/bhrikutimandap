<?php

use Illuminate\Support\Facades\Route;

Route::group(
[
    'prefix' => config('vendorRoute.prefix.vendor'),
    'namespace' => config('vendorRoute.namespace.vendor'),
    'as' => config('vendorRoute.as.vendor'),
    'middleware' => ['web','vendorMiddleware']
],
function () {
    Route::get('/','VendorController@home')->name('home');

    Route::get('/gallery','VendorController@gallery')->name('gallery');

    Route::get('/about','VendorController@about')->name('about');

    Route::get('/rules','VendorController@rules')->name('rules');

    Route::get('/my-account','VendorController@myAccount')->name('myAccount');

    Route::get('/my-booking','VendorController@myBooking')->name('myBooking');
    
    Route::get('/my-booking-details/{id}','VendorController@myBookingDetails')->name('myBookingDetails');

    Route::post('/profile-update','VendorController@profileUpdate')->name('profileUpdate');


    // Booking Section
    Route::post('/venue-booking-filter','VendorBookingController@bookingFilter')->name('bookingFilter');

    Route::post('/venue-booking','VendorBookingController@bookingStore')->name('bookingStore');


    //application

    Route::group([
        'prefix' => 'application',
        'as' => 'application.'
    ], function(){
        Route::get('/', 'ApplicationController@application');

        Route::post('store', 'ApplicationController@applicationStore')->name('store');

        Route::get('proceed-to-payment/{id}', 'ApplicationController@proceedToPayment')->name('proceedToPayment');
    });


    Route::group([
        'prefix' => 'payment',
        'as' => 'payment.'
    ], function(){

        Route::post('store/{id}', 'PaymentController@store')->name('store');

    });


});
