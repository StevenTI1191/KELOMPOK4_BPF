<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

route::get('andika',[App\Http\Controllers\IndexController::class,'andika']);
route::get('steven',[App\Http\Controllers\IndexController::class,'steven']);
route::get('fitra', [App\Http\Controllers\IndexController::class,'fitra']);
route::get('mifta', [App\Http\Controllers\IndexController::class,'mifta']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
