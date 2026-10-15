<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/', function () {
    return view('dashboard');
})->name('beranda');

Route::get('/materi', function () {
    return view('materi');
})->name('materi');