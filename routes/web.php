<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\PengajuController;
use App\Http\Controllers\PengembaliController;
use App\Models\Pengaju;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
});
Route::resource('buku', BukuController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/buku', [BukuController::class, 'index']);

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [adminController::class, 'index'])->name('admin.dashboard');
    Route::get('/buku', [BukuController::class, 'index'])->name('admin.buku');

    // List
    Route::get('/pengajuan', [PengajuController::class, 'index'])->name('admin.pengajuan');
    Route::resource('peminjam', PeminjamController::class);
    Route::resource('pengembali', PengembaliController::class);


    // Riwayat
    Route::get('/riwayat-pengajuan', [adminController::class, 'riwayatPengajuan'])->name('admin.riwayatPengajuan');
    Route::get('/riwayat-peminjaman', [adminController::class, 'riwayatPeminjaman'])->name('admin.riwayatPeminjaman');
});
