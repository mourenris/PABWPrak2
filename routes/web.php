<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanBanjirController;

// Nomor 1
Route::get('/lapor-banjir', [LaporanBanjirController::class, 'form']);
Route::post('/lapor-banjir/proses', [LaporanBanjirController::class, 'proses']);

// Nomor 2
Route::get('/hyd', function () {
    return view('hyd.home');
});

Route::get('/hyd/about', function () {
    return view('hyd.about');
});

Route::get('/hyd/edukasi', function () {
    return view('hyd.edukasi');
});
