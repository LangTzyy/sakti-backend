<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OrganizationController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/leadership', [OrganizationController::class, 'leadership']);
Route::get('/board', [OrganizationController::class, 'board']);
Route::get('/departments', [OrganizationController::class, 'departments']);
Route::get('/departments/{slug}', [OrganizationController::class, 'department']);
Route::get('/demissioners', [OrganizationController::class, 'demissioners']);