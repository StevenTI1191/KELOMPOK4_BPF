<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\UserBukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PengembaliController;
use App\Http\Controllers\UserPengajuanBukuController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin/buku', [BukuController::class, 'index']);
// web.php

Route::get('/admin/register', [AdminAuthController::class, 'showRegisterForm'])->name('admin.register');
Route::post('/admin/register', [AdminAuthController::class, 'register'])->name('admin.register.submit');




// Halaman Register Admin
Route::get('/admin/register', [AdminAuthController::class, 'showRegistrationForm'])->name('admin.register');
Route::post('/admin/register', [AdminAuthController::class, 'register'])->name('admin.register.submit');

Route::prefix('admin')->group(function () {
    // Utama
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('buku', BukuController::class);
    Route::get('/admin/buku', [AdminController::class, 'create'])->name('admin.buku');
    Route::get('buku/create', [BukuController::class, 'create'])->name('admin.buku');
    Route::get('/admin/buku/create', [BukuController::class, 'create'])->name('admin.buku_create');
    // List

    Route::get('/admin/buku', [BukuController::class, 'index'])->name('admin.buku.index');

// Rute untuk form tambah buku
Route::get('/admin/buku/create', [BukuController::class, 'create'])->name('admin.buku.create');

// Rute untuk menyimpan data buku
Route::post('/admin/buku', [BukuController::class, 'store'])->name('admin.buku.store');


    Route::patch('/admin/pengajuan/{id}/updateStatus', [AdminController::class, 'updateStatus'])->name('admin.pengajuan.updateStatus');
    Route::patch('/peminjaman/{id}/update-status', [PeminjamController::class, 'updateStatus'])->name('peminjaman.updateStatus');

    Route::resource('pengajuan', PengajuanController::class);
    Route::resource('pengajuan', PengajuanController::class);
    Route::get('/admin/pengajuan', [PengajuanController::class, 'index'])->name('admin.pengajuan');
    Route::resource('peminjaman', PeminjamController::class);
    Route::resource('peminjam', PeminjamController::class);
    Route::get('/admin/peminjaman', [PeminjamController::class, 'index'])->name('admin.peminjaman');
    Route::resource('pengembalian', PengembaliController::class);
    Route::get('/admin/pengembalian', [PengembaliController::class, 'index'])->name('admin.pengembalian');
    // Riwayat
    Route::get('/riwayatpengajuan', [adminController::class, 'riwayatPengajuan'])->name('admin.riwayatPengajuan');
    Route::get('/riwayatpeminjaman', [adminController::class, 'riwayatPeminjaman'])->name('admin.riwayatPeminjaman');
});


// User
Route::middleware('auth')->prefix('user')->name('user.')->group(function () {
    Route::resource('pengajuanBuku', UserPengajuanBukuController::class);
    Route::get('/user/pengajuanBuku', [UserPengajuanBukuController::class, 'index'])->name('user.pengajuanBuku');
    Route::get('pengembalian', [PeminjamanController::class, 'indexPengembalian'])->name('user.pengembalian');
    Route::get('/user/pengembalian', [PeminjamanController::class, 'indexPengembalian'])->name('user.pengembalian');
    Route::resource('peminjaman', PeminjamanController::class);
    Route::resource('buku', UserBukuController::class);
    Route::get('/dashboard', [UserBukuController::class, 'indexDashboard'])->name('user.dashboard');

    Route::get('/user/peminjaman', [PeminjamanController::class, 'index'])->name('user.peminjaman');
    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('user.peminjaman.index');

    Route::get('riwayatPeminjaman', [PeminjamanController::class, 'indexRiwayatPeminjaman'])->name('user.riwayatPeminjaman');
    Route::get('/user/riwayatPeminjaman', [PeminjamanController::class, 'indexRiwayatPeminjaman'])->name('user.riwayatPeminjaman');

    Route::get('riwayatPengajuan', [UserPengajuanBukuController::class, 'indexRiwayatPengajuan'])->name('user.riwayatPengajuan');
    Route::get('/user/riwayatPengajuan', [PeminjamanController::class, 'indexRiwayatPengajuan'])->name('user.riwayatPengajuan');
});
