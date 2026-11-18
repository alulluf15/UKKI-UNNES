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
Route::get('/lembaga', [HomeController::class, 'lembaga'])->name('lembaga');
Route::get('/store-ukki', [HomeController::class, 'storeUkki'])->name('store');
Route::get('/donasi', [HomeController::class, 'donasi'])->name('donasi');
Route::get('/lainnya', [HomeController::class, 'lainnya'])->name('lainnya');

// Authentication Routes
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Dashboard Routes
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::post('/admin/update', [AdminController::class, 'update'])->name('admin.update');
