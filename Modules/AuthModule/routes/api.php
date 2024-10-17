<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\AuthModule\App\Http\Controllers\Api\AuthApiController;


Route::group(
    [

        'middleware' => 'api',
        'prefix' => 'auth'

    ],
    function ($router) {

        Route::post('login', [AuthApiController::class, 'login']);
        Route::post('logout', [AuthApiController::class, 'logout']);
        Route::post('me', [AuthApiController::class, 'me']);
    }
);

Route::middleware(['auth:sanctum'])->prefix('v1')->name('api.')->group(function () {
    Route::get('authmodule', fn(Request $request) => $request->user())->name('authmodule');
});
