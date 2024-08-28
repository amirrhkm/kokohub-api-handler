<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KokoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BroadcastController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AchievementController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Posts routes
Route::get('/posts', [PostController::class, 'index']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::put('/posts/{id}', [PostController::class, 'update']);
Route::delete('/posts/{id}', [PostController::class, 'destroy']);

// Broadcast routes
Route::get('/broadcasts', [BroadcastController::class, 'index']);
Route::post('/broadcasts', [BroadcastController::class, 'store']);
Route::get('/broadcasts/{id}', [BroadcastController::class, 'show']);
Route::put('/broadcasts/{id}', [BroadcastController::class, 'update']);
Route::delete('/broadcasts/{id}', [BroadcastController::class, 'destroy']);

// Attendance routes
Route::get('/attendances', [AttendanceController::class, 'index']);
Route::post('/attendances', [AttendanceController::class, 'store']);
Route::get('/attendances/{id}', [AttendanceController::class, 'show']);
Route::put('/attendances/{id}', [AttendanceController::class, 'update']);
Route::delete('/attendances/{id}', [AttendanceController::class, 'destroy']);

// Achievement routes
Route::get('/achievements', [AchievementController::class, 'index']);
Route::post('/achievements', [AchievementController::class, 'store']);
Route::get('/achievements/{id}', [AchievementController::class, 'show']);
Route::put('/achievements/{id}', [AchievementController::class, 'update']);
Route::delete('/achievements/{id}', [AchievementController::class, 'destroy']);

// User routes
Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::put('users/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'destroy']);

// Koko routes
Route::get('kokos', [KokoController::class, 'index']);
Route::post('kokos', [KokoController::class, 'store']);
Route::get('kokos/{id}', [KokoController::class, 'show']);
Route::put('kokos/{id}', [KokoController::class, 'update']);
Route::delete('kokos/{id}', [KokoController::class, 'destroy']);