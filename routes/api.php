<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OrganizationController;
use App\Http\Controllers\Api\SubmissionController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/leadership', [OrganizationController::class, 'leadership']);
Route::get('/board', [OrganizationController::class, 'board']);
Route::get('/departments', [OrganizationController::class, 'departments']);
Route::get('/departments/{slug}', [OrganizationController::class, 'department']);
Route::get('/demissioners', [OrganizationController::class, 'demissioners']);
Route::get('/events', [OrganizationController::class, 'events']);
Route::get('/stats', [OrganizationController::class, 'stats']);
Route::get('/achievements', [OrganizationController::class, 'achievements']);
Route::get('/gallery', [OrganizationController::class, 'gallery']);
Route::get('/contact-info', [OrganizationController::class, 'contactInfo']);
Route::post('/contact-submissions', [SubmissionController::class, 'storeContact']);
Route::post('/pendaftaran-submissions', [SubmissionController::class, 'storePendaftaran']);