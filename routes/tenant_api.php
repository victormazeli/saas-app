<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;



Route::group(['middleware' => ['tenant_api']], function() {

    Route::apiResource('products', ProductController::class);
});