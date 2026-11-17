<?php
$isAdmin = isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true;
?>
<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title><?= isset($pageTitle) ? $pageTitle : 'UKKIUNNes - Desktop - Light Mode' ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,600;0,700;1,600&family=Mulish:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<header>
    <div class="wrap nav">
        <a class="logo" href="/beranda" aria-label="UKKI UNNES">
            <img src="/assets/img/logo.png" alt="Logo" style="width:38px;height:38px;border-radius:50%;object-fit:cover;" onerror="this.style.display='none'">
            <div>
                <b>UKKI</b>
                <small>UNIT KEGIATAN KEROHANIAN ISLAM</small>
            </div>
        </a>
        <nav id="nav" aria-label="Menu utama">
            <a href="/beranda" class="<?= ($activePage == 'beranda') ? 'on' : '' ?>">Beranda</a>
            <div class="dd">
                <button class="<?= in_array($activePage, ['profil','kabinet','departemen','lembaga','tentang-kami']) ? 'on' : '' ?>">Tentang Kami ▾</button>
                <div class="menu">
                    <a href="/profil">Profil UKKI</a>
                    <a href="/kabinet">Kabinet Segara Langkah</a>
                    <a href="/departemen">Departemen dan Biro</a>
                    <a href="/lembaga">Lembaga Dakwah UNNES</a>
                </div>
            </div>
            <a href="/kegiatan" class="<?= ($activePage == 'kegiatan') ? 'on' : '' ?>">Kegiatan</a>
            <a href="/store-ukki" class="<?= ($activePage == 'store-ukki') ? 'on' : '' ?>">Store UKKI</a>
            <a href="/donasi" class="<?= ($activePage == 'donasi') ? 'on' : '' ?>">Donasi</a>
            <a href="/lainnya" class="<?= ($activePage == 'lainnya') ? 'on' : '' ?>">Lainnya</a>
            <?php if($isAdmin): ?>
                <a href="/admin" style="background:#f59e0b;color:#fff;border-radius:6px;" class="<?= ($activePage == 'admin') ? 'on' : '' ?>">⚙️ Admin</a>
                <a href="/admin/logout" style="color:#ef4444;">Logout</a>
            <?php else: ?>
                <a href="/admin/login" style="opacity:0.4;font-size:11px;">Admin</a>
            <?php endif; ?>
        </nav>
        <div class="tools">
            <button class="pray" id="pr">🕌<span>Maghrib<b>17:54</b></span></button>
            <button class="theme" id="th" aria-label="Ganti tema" title="Ganti Tema">◐</button>
            <button class="burger" id="bg" aria-label="Buka menu">☰</button>
        </div>
    </div>
</header>
<main>
