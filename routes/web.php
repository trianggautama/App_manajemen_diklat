<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::prefix('/auth')->name('auth.')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::prefix('/user-admin')->name('userAdmin.')->group(function () {
    Route::get('/beranda', [MainController::class, 'admin_beranda'])->name('beranda');
    Route::resource('jenis_diklat', '\App\Http\Controllers\JenisDiklatController');
    Route::resource('penyakit', '\App\Http\Controllers\PenyakitController');
    Route::resource('widyaiswara', '\App\Http\Controllers\WidyaiswaraController');
    Route::resource('pelatihan', '\App\Http\Controllers\PelatihanController');
});
