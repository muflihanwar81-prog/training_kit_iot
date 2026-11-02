<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('beranda');

Route::get('/materi', function () {
    $materi = config('materi');
    return view('materi', compact('materi'));
})->name('materi');

Route::get('/materi/{slug}', function (string $slug) {
    $semua = collect(config('materi'));
    $materi = $semua->firstWhere('slug', $slug);
    abort_if(!$materi, 404);

    $i = $semua->search(fn ($m) => $m['slug'] === $slug);
    $sebelumnya = $i > 0 ? $semua[$i - 1] : null;
    $berikutnya = $semua[$i + 1] ?? null;

    return view('materi-detail', compact('materi', 'sebelumnya', 'berikutnya'));
})->name('materi.show');

Route::get('/praktik', function () {
    $misi = config('misi');
    return view('praktik', compact('misi'));
})->name('praktik');

Route::get('/praktik/{id}', function (int $id) {
    $semua = collect(config('misi'));
    $misi  = $semua->firstWhere('id', $id);
    abort_if(!$misi, 404);

    $sebelumnya = $semua->firstWhere('id', $id - 1);
    $berikutnya = $semua->firstWhere('id', $id + 1);

    return view('praktik-detail', compact('misi', 'sebelumnya', 'berikutnya'));
})->whereNumber('id')->name('praktik.show');