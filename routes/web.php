<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\KwitansiController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\InvoiceController;

use App\Http\Controllers\DashboardController;

// Rute-rute terkait Laravel Breeze
Route::get('/', function () {
    return view('welcome');
});

// Rute dashboard dan profil dengan autentikasi
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rute-rute CRUD kendaraan
Route::resource('penyewa', PenyewaController::class);
Route::resource('kendaraan', KendaraanController::class);
Route::resource('kwitansi', KwitansiController::class);
Route::resource('sewa', SewaController::class);
Route::resource('invoice', InvoiceController::class);

// Mengimpor file rute autentikasi dari Breeze
require __DIR__.'/auth.php';
