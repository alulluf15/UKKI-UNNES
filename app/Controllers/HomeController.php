<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Content;

class HomeController extends Controller {
    public function beranda(): void {
        $content = Content::get();
        $this->render('pages/beranda', [
            'content' => $content,
            'pageTitle' => 'UKKIUNNes - Desktop - Light Mode',
            'activePage' => 'beranda'
        ]);
    }

    public function kegiatan(): void {
        $this->render('pages/kegiatan', [
            'pageTitle' => 'Kegiatan UKKI UNNES',
            'activePage' => 'kegiatan'
        ]);
    }

    public function berita(): void {
        $this->render('pages/berita', [
            'pageTitle' => 'Berita UKKI UNNES',
            'activePage' => 'berita'
        ]);
    }

    public function informasi(): void {
        $this->render('pages/informasi', [
            'pageTitle' => 'Informasi UKKI UNNES',
            'activePage' => 'informasi'
        ]);
    }

    public function profil(): void {
        $this->render('pages/profil', [
            'pageTitle' => 'Profil UKKI UNNES',
            'activePage' => 'profil'
        ]);
    }

    public function kabinet(): void {
        $this->render('pages/kabinet', [
            'pageTitle' => 'Kabinet Segara Langkah',
            'activePage' => 'kabinet'
        ]);
    }

    public function departemen(): void {
        $this->render('pages/departemen', [
            'pageTitle' => 'Departemen dan Biro UKKI UNNES',
            'activePage' => 'departemen'
        ]);
    }

    public function lembaga(): void {
        $this->render('pages/lembaga', [
            'pageTitle' => 'Lembaga Dakwah UNNES',
            'activePage' => 'lembaga'
        ]);
    }

    public function storeUkki(): void {
        $this->render('pages/store-ukki', [
            'pageTitle' => 'Store UKKI & Peminjaman Inventaris',
            'activePage' => 'store-ukki'
        ]);
    }

    public function donasi(): void {
        $this->render('pages/donasi', [
            'pageTitle' => 'Donasi Dakwah UKKI UNNES',
            'activePage' => 'donasi'
        ]);
    }

    public function lainnya(): void {
        $this->render('pages/lainnya', [
            'pageTitle' => 'Lainnya - UKKI UNNES',
            'activePage' => 'lainnya'
        ]);
    }
}
