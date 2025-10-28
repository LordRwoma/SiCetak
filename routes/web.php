<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.dashboard');
});

route::get('/katalog', function () {
    return view('user.katalog');
})->name('katalog');