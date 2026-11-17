<?php
require_once __DIR__ . '/../app/Http/Controllers/WebController.php';

$controller = new WebController();

switch ($page) {
    case 'beranda':
    case '':
        $controller->beranda();
        break;
    case 'kegiatan':
        $controller->kegiatan();
        break;
    case 'berita':
        $controller->berita();
        break;
    case 'informasi':
        $controller->informasi();
        break;
    case 'profil':
        $controller->profil();
        break;
    case 'kabinet':
        $controller->kabinet();
        break;
    case 'departemen':
        $controller->departemen();
        break;
    case 'lembaga':
        $controller->lembaga();
        break;
    case 'store-ukki':
        $controller->storeUkki();
        break;
    case 'donasi':
        $controller->donasi();
        break;
    case 'lainnya':
        $controller->lainnya();
        break;
    case 'admin':
        $controller->admin();
        break;
    case 'admin/login':
        $controller->adminLogin();
        break;
    case 'admin/logout':
        $controller->adminLogout();
        break;
    case 'admin/update':
        $controller->adminUpdate();
        break;
    default:
        http_response_code(404);
        echo "<h1>404 - Halaman Tidak Ditemukan</h1><p><a href='/beranda'>Kembali ke Beranda</a></p>";
        break;
}
