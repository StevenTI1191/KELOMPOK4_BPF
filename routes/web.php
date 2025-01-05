<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\PengajuController;
use App\Http\Controllers\PengembaliController;
use App\Http\Controllers\UserPengajuanBukuController;

use App\Models\Pengaju;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Admin
Route::prefix('admin')->group(function () {
    // Utama
    Route::get('/dashboard', [adminController::class, 'index'])->name('admin.dashboard');
    Route::resource('buku', BukuController::class);

    // List
    Route::resource('pengaju', PengajuController::class);
    Route::resource('peminjam', PeminjamController::class);
    Route::resource('pengembali', PengembaliController::class);

    // Riwayat
    Route::get('/riwayat-pengajuan', [adminController::class, 'riwayatPengajuan'])->name('admin.riwayatPengajuan');
    Route::get('/riwayat-peminjaman', [adminController::class, 'riwayatPeminjaman'])->name('admin.riwayatPeminjaman');
});


// User
Route::middleware('auth')->prefix('user')->name('user.')->group(function () {
    Route::resource('pengajuanBuku', UserPengajuanBukuController::class);
    Route::get('/user/pengajuanBuku', [UserPengajuanBukuController::class, 'index'])->name('user.pengajuanBuku');
    Route::get('pengembalian', [PeminjamanController::class, 'indexPengembalian'])->name('user.pengembalian');
    Route::get('/user/pengembalian', [PeminjamanController::class, 'indexPengembalian'])->name('user.pengembalian');
    Route::resource('peminjaman', PeminjamanController::class);

    Route::get('/user/peminjaman', [PeminjamanController::class, 'index'])->name('user.peminjaman');
    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('user.peminjaman.index');

    Route::get('riwayatPeminjaman', [PeminjamanController::class, 'indexRiwayatPeminjaman'])->name('user.riwayatPeminjaman');
    Route::get('/user/riwayatPeminjaman', [PeminjamanController::class, 'indexRiwayatPeminjaman'])->name('user.riwayatPeminjaman');

    Route::get('riwayatPengajuan', [UserPengajuanBukuController::class, 'indexRiwayatPengajuan'])->name('user.riwayatPengajuan');
    Route::get('/user/riwayatPengajuan', [UserPengajuanBukuController::class, 'indexRiwayatPengajuan'])->name('user.riwayatPengajuan');
});
