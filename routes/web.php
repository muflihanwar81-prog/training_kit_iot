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

Route::get('/praktik', function () {
    return view('praktik');
})->name('praktik');

Route::get('/praktik/{id}', function ($id) {
    return view('praktik-detail', ['id' => $id]);
})->name('praktik.detail');