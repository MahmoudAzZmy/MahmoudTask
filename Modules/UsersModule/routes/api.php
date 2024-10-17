<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\UsersModule\App\Http\Controllers\Api\UsersApiController;

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

Route::middleware('auth:api')->post('users/restore/{id}', [UsersApiController::class, 'restore']);
Route::middleware('auth:api')->delete('users/force/delete/{id}', [UsersApiController::class, 'forceDelete']);
Route::middleware('auth:api')->apiResource('users', UsersApiController::class);


Route::middleware(['auth:sanctum'])->prefix('v1')->name('api.')->group(function () {
    Route::get('usersmodule', fn(Request $request) => $request->user())->name('usersmodule');
});
