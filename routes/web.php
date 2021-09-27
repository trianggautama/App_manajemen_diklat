<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KegiatanPesertaController;
use App\Http\Controllers\LaporanAktualisasiPesertaController;
use App\Http\Controllers\LaporanAktualisasiWidyaiswaraController;
use App\Http\Controllers\LaporanAktualisasiAdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PelatihanWidyaiswaraController;
use App\Http\Controllers\ReportController;
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
        Route::resource('peserta', '\App\Http\Controllers\PesertaController');
        Route::resource('anggaran', '\App\Http\Controllers\AnggaranController');
        Route::resource('objek_penilaian', '\App\Http\Controllers\ObjekPenilaianController');
        Route::resource('laporan_aktualisasi', '\App\Http\Controllers\LaporanAktualisasiAdminController');
        Route::get('/laporan_aktualisasi/filter/report', [LaporanAktualisasiAdminController::class, 'filter'])->name('laporan_aktualisasi.filter');
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
        Route::resource('peserta_widyaiswara', '\App\Http\Controllers\PesertaWidyaiswaraController');
        Route::prefix('/kegiatan_harian')->name('kegiatan_harian.')->group(function () {
            Route::get('/index/{id}', [KegiatanController::class, 'index'])->name('index');
        });
        Route::resource('penilaian_peserta', '\App\Http\Controllers\PenilaianPesertaController');
        Route::resource('laporan_aktualisasi', LaporanAktualisasiWidyaiswaraController::class);
    });
});
 
Route::prefix('/user-peserta')->name('userPeserta.')->group(function () {
    Route::get('/beranda', [MainController::class, 'peserta_beranda'])->name('beranda');
    Route::get('/profil', [MainController::class, 'peserta_profil'])->name('profil');
    Route::resource('kegiatan_harian_peserta', '\App\Http\Controllers\KegiatanPesertaController')->except([
        'index',
    ]);
    Route::prefix('/kegiatan_harian_peserta')->name('kegiatan_harian_peserta.')->group(function () {
        Route::get('/index/{id}', [KegiatanPesertaController::class, 'index'])->name('index');
    });
 
    Route::resource('laporan_aktualisasi', '\App\Http\Controllers\LaporanAktualisasiPesertaController');
});

Route::prefix('/report')->name('report.')->group(function () {
    Route::get('/skpd', [ReportController::class, 'skpd'])->name('skpd');
    Route::get('/penyakit', [ReportController::class, 'penyakit'])->name('penyakit');
    Route::get('/widyaiswara', [ReportController::class, 'widyaiswara'])->name('widyaiswara');
    Route::get('/pelatihan', [ReportController::class, 'pelatihan'])->name('pelatihan');
    Route::get('/pelatihan/filter', [ReportController::class, 'pelatihan_filter'])->name('pelatihan.filter');
    Route::get('/pelatihan/filter/cetak', [ReportController::class, 'pelatihan_filter_cetak'])->name('pelatihan.filter.cetak');
    Route::get('/anggaran/{id}', [ReportController::class, 'anggaran'])->name('anggaran');
    Route::get('/widyaiswara/{id}', [ReportController::class, 'widyaiswara_detail'])->name('widyaiswara.detail');
    Route::get('/pelatihan/{id}', [ReportController::class, 'pelatihan_detail'])->name('pelatihan_detail');
    Route::get('/kegiatan_pelatihan/{id}', [ReportController::class, 'kegiatan_pelatihan'])->name('kegiatan_pelatihan');
    Route::get('/biodata_peserta/{id}', [ReportController::class, 'biodata_peserta'])->name('biodata_peserta');
    Route::get('/sertifikat/filter', [ReportController::class, 'sertifikat_filter'])->name('sertifikat.filter');
    Route::get('/sertifikat/filter/cetak', [ReportController::class, 'sertifikat_filter_cetak'])->name('sertifikat_peserta.filter.cetak');
    Route::get('/sertifikat_peserta/{id}', [ReportController::class, 'sertifikat_peserta'])->name('sertifikat_peserta');
    Route::get('/laporan_aktualisasi', [ReportController::class, 'laporan_aktualisasi'])->name('laporan_aktualisasi');
}); 
