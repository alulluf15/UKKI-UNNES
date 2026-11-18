<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function beranda(): View
    {
        $content = Content::get();
        return view('pages.beranda', [
            'content' => $content,
            'pageTitle' => 'UKKIUNNes - Desktop - Light Mode',
            'activePage' => 'beranda'
        ]);
    }

    public function kegiatan(): View
    {
        return view('pages.kegiatan', [
            'pageTitle' => 'Kegiatan UKKI UNNES',
            'activePage' => 'kegiatan'
        ]);
    }

    public function berita(): View
    {
        return view('pages.berita', [
            'pageTitle' => 'Berita UKKI UNNES',
            'activePage' => 'berita'
        ]);
    }

    public function informasi(): View
    {
        return view('pages.informasi', [
            'pageTitle' => 'Informasi UKKI UNNES',
            'activePage' => 'informasi'
        ]);
    }

    public function profil(): View
    {
        return view('pages.profil', [
            'pageTitle' => 'Profil UKKI UNNES',
            'activePage' => 'profil'
        ]);
    }

    public function kabinet(): View
    {
        return view('pages.kabinet', [
            'pageTitle' => 'Kabinet Segara Langkah',
            'activePage' => 'kabinet'
        ]);
    }

    public function departemen(): View
    {
        return view('pages.departemen', [
            'pageTitle' => 'Departemen dan Biro UKKI UNNES',
            'activePage' => 'departemen'
        ]);
    }

    public function lembaga(): View
    {
        return view('pages.lembaga', [
            'pageTitle' => 'Lembaga Dakwah UNNES',
            'activePage' => 'lembaga'
        ]);
    }

    public function storeUkki(): View
    {
        return view('pages.store-ukki', [
            'pageTitle' => 'Store UKKI & Peminjaman Inventaris',
            'activePage' => 'store-ukki'
        ]);
    }

    public function donasi(): View
    {
        return view('pages.donasi', [
            'pageTitle' => 'Donasi Dakwah UKKI UNNES',
            'activePage' => 'donasi'
        ]);
    }

    public function lainnya(): View
    {
        return view('pages.lainnya', [
            'pageTitle' => 'Lainnya - UKKI UNNES',
            'activePage' => 'lainnya'
        ]);
    }
}
