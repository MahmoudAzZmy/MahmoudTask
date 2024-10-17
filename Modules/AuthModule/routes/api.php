<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\AuthModule\App\Http\Controllers\Api\AuthApiController;



Route::post('login', [AuthApiController::class, 'login']);

Route::post('logout', [AuthApiController::class, 'logout'])->middleware('auth:api');




Route::middleware(['auth:sanctum'])->prefix('v1')->name('api.')->group(function () {
    Route::get('authmodule', fn(Request $request) => $request->user())->name('authmodule');
});
