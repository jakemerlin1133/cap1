<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsertController;

Route::apiResource('users', UserController::class);
Route::apiResource('products', ProductController::class);
