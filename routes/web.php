<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/inventory', function () {
    return view('inventory');
})->name('inventory');

Route::get('/account-list', function () {
    return view('accountList');
})->name('accountList');

Route::get('/purchaseHistory', function () {
    return view('purchaseHistory');
})->name('purchaseHistory');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');