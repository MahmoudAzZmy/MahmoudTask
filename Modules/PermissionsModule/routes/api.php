<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\PermissionsModule\App\Http\Controllers\Api\AdminGroupRolesApiController;
use Modules\PermissionsModule\App\Http\Controllers\Api\AdminGroupsApiController;

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

Route::middleware('auth:api')->post('admin-group-roles/restore/{id}', [AdminGroupRolesApiController::class, 'restore']);
Route::middleware('auth:api')->delete('admin-group-roles/force/delete/{id}', [AdminGroupRolesApiController::class, 'forceDelete']);
Route::middleware('auth:api')->apiResource('admin-group-roles', AdminGroupRolesApiController::class);

Route::middleware('auth:api')->post('admin-groups/restore/{id}', [AdminGroupsApiController::class, 'restore']);
Route::middleware('auth:api')->delete('admin-groups/force/delete/{id}', [AdminGroupsApiController::class, 'forceDelete']);
Route::middleware('auth:api')->apiResource('admin-groups', AdminGroupsApiController::class);


Route::middleware(['auth:sanctum'])->prefix('v1')->name('api.')->group(function () {
    Route::get('permissionsmodule', fn(Request $request) => $request->user())->name('permissionsmodule');
});
