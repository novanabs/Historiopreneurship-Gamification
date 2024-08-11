<?php

use App\Http\Controllers\AnalisisIndividuController;
use App\Http\Controllers\jawabanKelompokController;
use App\Http\Controllers\RefleksiKesejarahanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

// Register
Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Login
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');

// Middleware auth
Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/data-pengguna',[DashboardController::class,'showUser'])->name('dashboard.showUser') ->middleware('admin');
    
    // Pemindahan halaman
    Route::get('/A-Informasi-Umum', [HalamanController::class, 'A'])->name('pages.A');
    Route::get('/B-Kesejarahan', [HalamanController::class, 'B'])->name('pages.B');
    Route::post('/B-Kesejarahan/kelompok', [jawabanKelompokController::class, 'simpanJawaban'])->name('simpanJawabanKelompok');
    Route::post('/B-Kesejarahan/individu', [AnalisisIndividuController::class, 'simpanJawabanIndividu'])->name('simpanAnalisisIndividu');  
    Route::post('/B-Kesejarahan/refleksi', [RefleksiKesejarahanController::class, 'simpanRefleksi'])->name('simpanRefleksi');    
    Route::get('/C-Kewirausahaan-dan-Kepariwisataan', [HalamanController::class, 'C'])->name('pages.C');
    Route::get('/Daftar-Pustaka',[HalamanController::class, 'daftarPustaka'])->name('pages.dafus');
});

// Middleware admin
Route::group(['middleware' => ['admin']], function(){
    Route::get('/data-pengguna', [DashboardController::class, 'showUser'])->name('dashboard.showUser');

});

// Latihan
Route::get('/latihan', [LatihanController::class, 'latihan'])->name('latihan');
Route::put('/latihan', [LatihanController::class, 'latihan']);
Route::get('/kuis', [LatihanController::class, 'kuis'])->name('kuis');
Route::get('/evaluasi', [LatihanController::class, 'evaluasi'])->name('evaluasi');
Route::get('/info', [LatihanController::class, 'info'])->name('info');
Route::get('/dragndrop', [LatihanController::class, 'dragndrop'])->name('dragndrop');
Route::get('/jawaban/{id_kelompok}', [JawabanKelompokController::class, 'lihatJawaban'])->name('dataJawabanKelompok');

// Controller Dosen
Route::get('/dataKelas',[DosenController::class,'datakelas'])->name('dataKelas');
Route::get('/dataLatihan',[DosenController::class,'dataLatihan'])->name('dataLatihan');
Route::get('/dataMahasiswa',[DosenController::class,'dataMahasiswa'])->name('dataMahasiswa');
Route::post('/dataMahasiswa', [DosenController::class, 'saveGroup'])->name('dataMahasiswa.saveGroup');
Route::get('/dataNilai',[DosenController::class,'dataNilai'])->name('dataNilai');