<?php


use App\Http\Controllers\AnalisisIndividuController;
use App\Http\Controllers\dataExportController;
use App\Http\Controllers\jawabanKelompokController;
use App\Http\Controllers\nilaiController;
use App\Http\Controllers\RefleksiController;
use App\Http\Controllers\RefleksiKesejarahanController;
use App\Http\Controllers\uploadFileController;
use App\Http\Controllers\userBadgeController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PoinController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\HalamanController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\SessionController;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\UpdateAksesHalamanController;


// Register
Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Login
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');

// Middleware auth
Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
    // Route untuk menampilkan dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    // Route untuk klaim Master Badge
    Route::post('/klaim-master-badge', [UserBadgeController::class, 'awardMasterBadge'])->name('awardMasterBadge');
    Route::post('/klaim-penguasa-materi-badge', [UserBadgeController::class, 'awardPenguasaMateriBadge'])->name('awardPenguasaMateriBadge');
    Route::post('/klaim-high-rank-badge', [UserBadgeController::class, 'awardHighRankBadge'])->name('awardHighRankBadge');
    Route::post('/klaim-siCepat-badge', [UserBadgeController::class, 'awardSiCepatBadge'])->name('awardSiCepatBadge');
    Route::get('/data-pengguna', [DashboardController::class, 'showUser'])->name('dashboard.showUser')->middleware('admin');

    // Pemindahan halaman
    Route::get('/A-Informasi-Umum', [HalamanController::class, 'A'])->name('pages.A');
    Route::get('/B-Kesejarahan', [HalamanController::class, 'B'])->name('pages.B');
    Route::post('/B-Kesejarahan/individu2', [AnalisisIndividuController::class, 'simpanJawaban'])->name('simpanJawabanIndividu2');
    Route::post('/B-Kesejarahan/individu', [AnalisisIndividuController::class, 'simpanJawabanIndividu'])->name('simpanAnalisisIndividu');
    Route::post('/B-Kesejarahan/refleksi', [RefleksiController::class, 'simpanRefleksi'])->name('simpanRefleksiKesejarahan');
    Route::post('/B-Kesejarahan/uploadFile', [uploadFileController::class, 'uploadFile'])->name('uploadFileKesejarahan');
    Route::get('/C-Kewirausahaan-dan-Kepariwisataan', [HalamanController::class, 'C'])->name('pages.C');
    Route::post('/C-Kewirausahaan-dan-Kepariwisataan/aktivitaskelompok', [jawabanKelompokController::class, 'simpanAktivitas'])->name('simpanAktivitas');
    Route::post('/C-Kewirausahaan-dan-Kepariwisataan/uploadFile', [uploadFileController::class, 'uploadFile'])->name('uploadFileKewirausahaan');
    Route::post('/C-Kewirausahaan-dan-Kepariwisataan/individu', [AnalisisIndividuController::class, 'simpanJawabanIndividuKewirausahaan'])->name('simpanJawabanIndividuKewirausahaan');
    Route::post('/C-Kewirausahaan-dan-Kepariwisataan/refleksi', [RefleksiController::class, 'simpanRefleksi'])->name('simpanRefleksiKewirausahaan');
    Route::get('/materi', [HalamanController::class, 'materi'])->name('pages.materi');
    Route::get('/Daftar-Pustaka', [HalamanController::class, 'daftarPustaka'])->name('pages.dafus');
    Route::get('/reviewGuru', [HalamanController::class, 'review'])->name('pages.reviewGuru');
});

// Middleware admin
Route::group(['middleware' => ['admin']], function () {
    Route::get('/data-pengguna', [DashboardController::class, 'showUser'])->name('dashboard.showUser');

});

// Latihan
Route::get('/latihan', [LatihanController::class, 'latihan'])->name('latihan');
Route::put('/latihan', [LatihanController::class, 'latihan']);
Route::get('/kuis', [LatihanController::class, 'kuis'])->name('kuis');
Route::get('/evaluasi', [LatihanController::class, 'evaluasi'])->name('evaluasi');
Route::post('/evaluasi', [NilaiController::class, 'simpanNilai'])->name('simpanNilai');
Route::get('/selesai-evaluasi', function () {return view('latihan.selesaiEvaluasi');})->name('selesaiEvaluasi');

Route::get('/info', [LatihanController::class, 'info'])->name('info');
Route::get('/dragndrop', [LatihanController::class, 'dragndrop'])->name('dragndrop');
Route::get('/latihan2', [LatihanController::class, 'latihan2'])->name('latihan2');

// Controller Dosen
Route::get('/dataKelas', [DosenController::class, 'datakelas'])->name('dataKelas');
Route::get('/dataEvaluasi', [DosenController::class, 'dataEvaluasi'])->name('dataEvaluasi');
Route::get('/dataMahasiswa', [DosenController::class, 'dataMahasiswa'])->name('dataMahasiswa');
Route::post('/dataMahasiswa/save', [DosenController::class, 'saveGroup'])->name('dataMahasiswa.saveGroup');
Route::post('/dataMahasiswa/remove', [DosenController::class, 'removeFromGroup'])->name('dataMahasiswa.removeFromGroup');
Route::post('/dataMahasiswa/autoAssignGroup', [DosenController::class, 'autoAssignGroup'])->name('dataMahasiswa.autoAssignGroup');

Route::get('/dataNilai', [DosenController::class, 'dataNilai'])->name('dataNilai');

// data jawaban individu
Route::get('/jawabanIndividu/{email}', [AnalisisIndividuController::class, 'tampilkanJawabanIndividu'])->name('dataJawabanIndividu');
// Route to handle the POST request for saving individual answers
Route::post('/jawabanIndividu/{email}', [nilaiController::class, 'simpanNilaiIndividu'])->name('kirimJawabanIndividu');

// data jawaban kelompok
Route::get('/jawabanKelompok/{id_kelompok?}', [JawabanKelompokController::class, 'lihatJawaban'])->name('dataJawabanKelompok');
Route::post('/jawabanKelompok/{id_kelompok}', [nilaiController::class, 'simpanNilaiKelompok'])->name('kirimJawabanKelompok');


// Session Controller Untuk Sidebar agar tidak menutup
Route::post('/laman', [SessionController::class, 'laman'])->name('laman');
Route::post('/lamanSub', [SessionController::class, 'lamanSub'])->name('lamanSub');

// Progress akses Halaman

Route::get('/updateAksesHalaman', [UpdateAksesHalamanController::class, 'update'])->name('updateAksesHalaman');


// Poin DND dan TTS
Route::post('/DND', [PoinController::class, 'DND'])->name('DND');
Route::post('/TTS', [PoinController::class, 'TTS'])->name('TTS');

// Export Data
Route::get('/export-evaluasi', [dataExportController::class, 'exportEvaluasi'])->name('export.evaluasi');
Route::get('/export-kelas', [dataExportController::class, 'exportKelas'])->name('export.kelas');

