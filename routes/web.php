<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/order', function () {
    return view('order');
})->name('order');

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