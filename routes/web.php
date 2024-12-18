<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\auth_controller;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
| 
| Here is where you can register web routes for your application.
|
*/


Route::middleware('auth')->group(function () {
Route::get('/', [TransaksiController::class, 'deskripsi'])->name('deskripsi.deskripsi');

    // Resource routes untuk CRUD Pasien, Dokter, dan Janji Temu
Route::resource('obat', ObatController::class);
Route::resource('transaksi', TransaksiController::class);
    
    // Rute untuk deskripsi
Route::get('deskripsi.deskripsi', [TransaksiController::class, 'deskripsi'])->name('deskripsi');
Route::get('transaksi.index', [TransaksiController::class, 'index'])->name('index');
Route::get('obat.index', [ObatController::class, 'index'])->name('index');
});

// Halaman login untuk guest (belum login)
Route::get('/login', function () {
    return view('Auth.Login');
})->middleware('guest')->name('login');


Route::get('pelanggan.transaksi', [TransaksiController::class, 'create'])->name('pelanggan.transaksi');
Route::post('/transaksi/store', [TransaksiController::class, 'store'])->name('transaksi.store');

// Proses login
Route::post('/login-proses', [auth_controller::class, 'login'])->name('loginproccess');

// Logout
Route::post('/logout', [auth_controller::class, 'logout'])->name('logout');
