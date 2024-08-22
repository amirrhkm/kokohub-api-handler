<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BroadcastController;

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
