<?php

use Illuminate\Support\Facades\Route;

Route::group(
[
    'prefix' => config('vendotRoute.prefix.vendor'),
    'namespace' => config('vendotRoute.namespace.vendor'),
    'as' => config('vendotRoute.as.vendor'),
    'middleware' => ['web']
],
function () {

});
