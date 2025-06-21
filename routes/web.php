<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PurchaseHistoryController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory');

Route::get('/accountList', [UserController::class, 'index'])->name('accountList');

Route::get('/purchaseHistory', [PurchaseHistoryController::class, 'index'])->name('purchaseHistory');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');