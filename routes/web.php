<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Public / Frontend Routes
Route::get('/', [HomeController::class, 'beranda'])->name('home');
Route::get('/beranda', [HomeController::class, 'beranda'])->name('beranda');
Route::get('/kegiatan', [HomeController::class, 'kegiatan'])->name('kegiatan');
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/informasi', [HomeController::class, 'informasi'])->name('informasi');
Route::get('/profil', [HomeController::class, 'profil'])->name('profil');
Route::get('/kabinet', [HomeController::class, 'kabinet'])->name('kabinet');
Route::get('/departemen', [HomeController::class, 'departemen'])->name('departemen');
Route::get('/departemen/{slug}', [HomeController::class, 'departemenDetail'])->name('departemen.detail');
Route::get('/lembaga', [HomeController::class, 'lembaga'])->name('lembaga');
Route::get('/store-ukki', [HomeController::class, 'storeUkki'])->name('store');
Route::get('/donasi', [HomeController::class, 'donasi'])->name('donasi');
Route::get('/lainnya', [HomeController::class, 'lainnya'])->name('lainnya');

// =========================================================================
// Rute Administrasi & Dasbor Admin UKKI UNNES
// =========================================================================
Route::prefix('admin')->group(function () {
    // Autentikasi Admin (Login & Logout) beserta Alias Bahasa Indonesia
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::get('/masuk', [AuthController::class, 'showLogin'])->name('admin.masuk');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::post('/masuk', [AuthController::class, 'login'])->name('admin.masuk.post');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/keluar', [AuthController::class, 'logout'])->name('admin.keluar');

    // Dasbor Admin (Terproteksi Middleware Khusus)
    Route::middleware('admin.auth')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin');
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::post('/update', [AdminController::class, 'update'])->name('admin.update');
    });
});
