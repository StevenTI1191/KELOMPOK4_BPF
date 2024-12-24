<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
});



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [adminController::class, 'index'])->name('admin.dashboard');
    Route::get('/pengajuan', [adminController::class, 'pengajuan'])->name('admin.pengajuan');
    Route::get('/peminjaman', [adminController::class, 'peminjaman'])->name('admin.peminjaman');
    Route::get('/pengembalian', [adminController::class, 'pengembalian'])->name('admin.pengembalian');
});
