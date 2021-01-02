<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomainOrSubdomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use App\Http\Controllers\StoreController;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomainOrSubdomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/{any}', [StoreController::class, 'index'])->where('any', '^(?!api.*$)');
    // Route::get('/home', [StoreController::class, 'index'])->where('any', '^(?!api.*$)'); //route for user dashboard 

    Auth::routes();
    
});


