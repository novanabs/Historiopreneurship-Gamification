<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
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
    Route::get('/C-Kewirausahaan-dan-Kepariwisataan', [HalamanController::class, 'C'])->name('pages.C');
});

// Middleware admin
Route::group(['middleware' => ['admin']], function(){
    Route::get('/data-pengguna', [DashboardController::class, 'showUser'])->name('dashboard.showUser');

});

// Latihan
Route::get('/latihan', [LatihanController::class, 'latihan'])->name('latihan');
Route::get('/kuis', [LatihanController::class, 'kuis'])->name('kuis');
Route::get('/evaluasi', [LatihanController::class, 'evaluasi'])->name('evaluasi');

