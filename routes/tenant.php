<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

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
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', function () {
        
        // DB::table('posts')
        //     ->insert(['user_id' => 1, 'title' => "post de ".tenant('id'), 'slug' => 'wdadawda'.tenant('id'), 'body' => 'lorem ipsum etc'.tenant('id')]);

        return 'This is your multi-tenant application. The id of the current tenant is ' . tenant('id');
    });
});
