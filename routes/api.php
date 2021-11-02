<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;

Route::post('register', [RegisterController::class, 'store']);

Route::apiResource('categories',CategoryController::class);
Route::apiResource('posts',PostController::class);
