<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LaporanAktualisasiPesertaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PelatihanWidyaiswaraController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
})->name('welcome');

Route::prefix('/auth')->name('auth.')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => ['admin']], function () {
    Route::prefix('/user-admin')->name('userAdmin.')->group(function () {
        Route::get('/beranda', [MainController::class, 'admin_beranda'])->name('beranda');
        Route::resource('skpd', '\App\Http\Controllers\SkpdController');
        Route::resource('jenis_diklat', '\App\Http\Controllers\JenisDiklatController');
        Route::resource('penyakit', '\App\Http\Controllers\PenyakitController');
        Route::resource('widyaiswara', '\App\Http\Controllers\WidyaiswaraController');
        Route::resource('peserta', '\App\Http\Controllers\PesertaController');
        Route::resource('pelatihan', '\App\Http\Controllers\PelatihanController');
        Route::resource('anggaran', '\App\Http\Controllers\AnggaranController');
        Route::resource('laporan_aktualisasi', '\App\Http\Controllers\LaporanAktualisasiAdminController');
    });
});

Route::group(['middleware' => ['widyaiswara']], function () {
    Route::prefix('/user-widyaiswara')->name('userWidyaIswara.')->group(function () {
        Route::get('/beranda', [MainController::class, 'widyaiswara_beranda'])->name('beranda');
        Route::get('/profil', [MainController::class, 'widyaiswara_profil'])->name('profil');
        Route::resource('pelatihan_widyaiswara', '\App\Http\Controllers\PelatihanWidyaiswaraController');
        Route::get('/pelatihan_widyaiswaras/riwayat', [PelatihanWidyaiswaraController::class, 'riwayat'])->name('pelatihan_widyaiswara.riwayat');
        Route::resource('kegiatan_harian', KegiatanController::class)->except([
            'index',
        ]);

        Route::prefix('/kegiatan_harian')->name('kegiatan_harian.')->group(function () {
            Route::get('/index/{id}', [KegiatanController::class, 'index'])->name('index');
        });
        Route::resource('laporan_aktualisasi', LaporanAktualisasiPesertaController::class);
    });
});

Route::prefix('/user-peserta')->name('userPeserta.')->group(function () {
    Route::get('/beranda', [MainController::class, 'peserta_beranda'])->name('beranda');
    Route::get('/profil', [MainController::class, 'peserta_profil'])->name('profil');
    Route::resource('kegiatan_harian_peserta', '\App\Http\Controllers\KegiatanPesertaController');
    Route::resource('laporan_aktualisasi', '\App\Http\Controllers\LaporanAktualisasiPesertaController');
});
