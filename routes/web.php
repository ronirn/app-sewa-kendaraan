<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\KwitansiController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('penyewa', PenyewaController::class);
Route::resource('kendaraan', KendaraanController::class);
Route::resource('kwitansi', KwitansiController::class);
