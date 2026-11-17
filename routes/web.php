<?php
use App\Controllers\AdminController;
use App\Controllers\AuthController;
use App\Controllers\HomeController;

/** @var App\Core\Router $router */

// Public / Frontend Routes
$router->get('/', [HomeController::class, 'beranda']);
$router->get('/beranda', [HomeController::class, 'beranda']);
$router->get('/kegiatan', [HomeController::class, 'kegiatan']);
$router->get('/berita', [HomeController::class, 'berita']);
$router->get('/informasi', [HomeController::class, 'informasi']);
$router->get('/profil', [HomeController::class, 'profil']);
$router->get('/kabinet', [HomeController::class, 'kabinet']);
$router->get('/departemen', [HomeController::class, 'departemen']);
$router->get('/lembaga', [HomeController::class, 'lembaga']);
$router->get('/store-ukki', [HomeController::class, 'storeUkki']);
$router->get('/donasi', [HomeController::class, 'donasi']);
$router->get('/lainnya', [HomeController::class, 'lainnya']);

// Authentication Routes
$router->get('/admin/login', [AuthController::class, 'showLogin']);
$router->post('/admin/login', [AuthController::class, 'login']);
$router->get('/admin/logout', [AuthController::class, 'logout']);

// Admin Dashboard Routes
$router->get('/admin', [AdminController::class, 'index']);
$router->post('/admin/update', [AdminController::class, 'update']);
