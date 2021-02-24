<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

// Posts:
Route::get('/', [PostController::class, 'index']);
Route::get('/post/{id}', [PostController::class, 'show']);
Route::get('/create', [PostController::class, 'create']);
Route::post('/add', [PostController::class, 'store']);
Route::get('/edit/{id}', [PostController::class, 'edit']);
Route::put('/update/{id}', [PostController::class, 'update']);
Route::get('/delete/{id}', [PostController::class, 'destroy']);

// users:
Route::get('/users', [UserController::class, 'index']);
Route::get('/user/{user}/posts', [UserController::class, 'posts']);
Route::get('/user/{user}', [UserController::class, 'destroy']);



