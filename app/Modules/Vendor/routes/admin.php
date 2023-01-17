<?php

use Illuminate\Support\Facades\Route;

Route::group(
[
    'prefix' => config('vendorRoute.prefix.admin'),
    'namespace' => config('vendorRoute.namespace.admin'),
    'as' => config('vendorRoute.as.admin'),
    'middleware' => ['web']
],
function () {
    Route::get('approvedlists', 'ApplicationApprovalController@approvalLists')->name('approvalLists');

    Route::get('view/{id}', 'ApplicationApprovalController@view')->name('view');


    //application
    Route::get('application-modal/{id}/{bookingid}', 'ApplicationApprovalController@sendApplicationNotification')->name('applicationModal');

    Route::post('application-submit/{id}', 'ApplicationApprovalController@submitApplicationNotification')->name('submitApplication');


    Route::get('changeStatus/{id}', 'ApplicationApprovalController@changeStatus')->name('approvalLists.changeStatus');

    Route::get('change-venue-status/{id}', 'ApplicationApprovalController@changeVenueStatus')->name('approvalLists.change.venueStatus');

    Route::get('paymentChangeStatus/{id}', 'ApplicationApprovalController@paymentChangeStatus')->name('approvalLists.paymentChangeStatus');
});
