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
    Route::get('approvedlists', 'ApplicationApprovalController@approvalLists')->name('appovalLists');
});
