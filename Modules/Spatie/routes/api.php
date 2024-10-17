<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Spatie\App\Http\Controllers\Api\PermissionController;
use Modules\Spatie\App\Http\Controllers\Api\RoleController;

/*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | is assigned the "api" middleware group. Enjoy building your API!
    |
*/


Route::group(
    ['middleware' => 'api'],
    function () {
        Route::apiResource('permissions', PermissionController::class);


        Route::apiResource('roles', RoleController::class);
    }
);
