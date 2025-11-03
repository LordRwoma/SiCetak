<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/dashboard/katalog', function () {
    return view('dashboard.katalog');
})->name('dashboard.katalog');

Route::get('/dashboard/si-bot', function () {
    return view('dashboard.si-bot');
})->name('dashboard.si-bot');

Route::get('/dashboard/lacak-pesanan', function () {
    return view('dashboard.lacak-pesanan');
})->name('dashboard.lacak-pesanan');

Route::get('/dashboard/keranjang', function () {
    return view('dashboard.keranjang');
})->name('dashboard.keranjang');

Route::get('/dashboard/checkout', function () {
    return view('dashboard.checkout');
})->name('dashboard.checkout');
