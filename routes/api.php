<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// проверить есть ли пользователь, если есть выдаст по нему данные
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Post
Route::apiResource('posts', PostController::class);
// Auth
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
