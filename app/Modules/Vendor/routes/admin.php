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

    Route::get('changeStatus/{id}', 'ApplicationApprovalController@changeStatus')->name('approvalLists.changeStatus');
});
