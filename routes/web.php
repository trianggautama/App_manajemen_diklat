<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    MainController,AuthController
};

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/auth')->name('auth.')->group(function (){
    Route::get('/login', [AuthController::class, 'login'])->name('login'); 
});

Route::prefix('/user-admin')->name('userAdmin.')->group(function (){
    Route::get('/beranda', [MainController::class, 'admin_beranda'])->name('beranda'); 
    Route::resource('jenis_diklat', '\App\Http\Controllers\JenisDiklatController');
    Route::resource('penyakit', '\App\Http\Controllers\PenyakitController');
    Route::resource('widyaiswara', '\App\Http\Controllers\WidyaiswaraController');
    Route::resource('pelatihan', '\App\Http\Controllers\PelatihanController');
});