<?php
$isAdmin = isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true;
$activePage = $activePage ?? '';
$nextPrayer = \App\Core\PrayerTime::getNextPrayer();
$prayerSchedule = \App\Core\PrayerTime::getSchedule();
?>
<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title><?= isset($pageTitle) ? $pageTitle : 'UKKI UNNES' ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,600;0,700;1,600&family=Mulish:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<header>
    <div class="wrap nav">
        <!-- Brand / Logo (Sisi Kiri) -->
        <div class="header-brand">
            <a class="logo" href="/beranda" aria-label="UKKI UNNES">
                <img src="/assets/img/logo.png" alt="Logo UKKI" onerror="this.style.display='none'">
                <div>
                    <b>UKKI</b>
                    <small>UNIT KEGIATAN KEROHANIAN ISLAM</small>
                </div>
            </a>
        </div>

        <!-- Desktop NavigationMenu (Sisi Tengah - Balanced) -->
        <nav class="nav-menu-root" aria-label="Menu utama">
            <ul class="nav-menu-list">
                <!-- Beranda -->
                <li class="nav-menu-item">
                    <a href="/beranda" class="nav-link-direct <?= ($activePage == 'beranda') ? 'on' : '' ?>">Beranda</a>
                </li>

                <!-- Tentang Kami (Mega Menu) -->
                <li class="nav-menu-item" data-slot="navigation-menu-item">
                    <button type="button" class="nav-trigger <?= in_array($activePage, ['profil','kabinet','departemen','lembaga']) ? 'on' : '' ?>">
                        Tentang Kami
                        <svg class="nav-chevron" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="nav-popover">
                        <div class="nav-popover-arrow"></div>
                        <div class="nav-mega-grid">
                            <!-- Featured Card -->
                            <a href="/kabinet" class="nav-featured-card">
                                <span class="nav-featured-badge">1446/1447 H</span>
                                <div class="nav-featured-title">Kabinet Segara Langkah</div>
                                <p class="nav-featured-desc">Satukan Langkah untuk Segarakan Kebaikan di lingkungan kampus UNNES.</p>
                            </a>
                            <!-- Rich List -->
                            <div class="nav-list-group">
                                <a href="/profil" class="nav-list-item">
                                    <div class="nav-item-title">Profil UKKI</div>
                                    <p class="nav-item-desc">Mengenal sejarah, visi, dan misi LDK UNNES.</p>
                                </a>
                                <a href="/departemen" class="nav-list-item">
                                    <div class="nav-item-title">Departemen & Biro</div>
                                    <p class="nav-item-desc">Sinergi struktur bidang syiar, kaderisasi, & keumatan.</p>
                                </a>
                                <a href="/lembaga" class="nav-list-item">
                                    <div class="nav-item-title">Lembaga Dakwah UNNES</div>
                                    <p class="nav-item-desc">Jaringan dakwah fakultas & forum masjid.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Program & Layanan (Grid Menu) -->
                <li class="nav-menu-item" data-slot="navigation-menu-item">
                    <button type="button" class="nav-trigger <?= in_array($activePage, ['kegiatan','store-ukki','donasi','informasi']) ? 'on' : '' ?>">
                        Program & Layanan
                        <svg class="nav-chevron" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="nav-popover">
                        <div class="nav-popover-arrow"></div>
                        <div class="nav-columns-grid">
                            <a href="/kegiatan" class="nav-list-item">
                                <div class="nav-item-title">📅 Kegiatan & Agenda</div>
                                <p class="nav-item-desc">Kajian rutin, pelatihan, dan event akbar kampus.</p>
                            </a>
                            <a href="/store-ukki" class="nav-list-item">
                                <div class="nav-item-title">🛍️ Store UKKI</div>
                                <p class="nav-item-desc">Merchandise dakwah & peminjaman inventaris.</p>
                            </a>
                            <a href="/donasi" class="nav-list-item">
                                <div class="nav-item-title">🤝 Donasi Dakwah</div>
                                <p class="nav-item-desc">Infaq & sedekah operasional dakwah.</p>
                            </a>
                            <a href="/informasi" class="nav-list-item">
                                <div class="nav-item-title">📢 Informasi Maba</div>
                                <p class="nav-item-desc">Pendataan mahasiswa baru muslim UNNES.</p>
                            </a>
                        </div>
                    </div>
                </li>

                <!-- Lainnya -->
                <li class="nav-menu-item">
                    <a href="/lainnya" class="nav-link-direct <?= ($activePage == 'lainnya') ? 'on' : '' ?>">Lainnya</a>
                </li>

                <!-- Admin Status (Hanya tampil jika admin sedang login) -->
                <?php if($isAdmin): ?>
                <li class="nav-menu-item">
                    <div style="display:flex;align-items:center;gap:6px;">
                        <a href="/admin" class="nav-admin-badge <?= ($activePage == 'admin') ? 'on' : '' ?>">⚙️ Admin</a>
                        <a href="/admin/logout" style="color:#ef4444;font-size:12px;font-weight:600;padding:4px 8px;">Logout</a>
                    </div>
                </li>
                <?php endif; ?>
            </ul>
        </nav>

        <!-- Action Tools (Sisi Kanan) -->
        <div class="header-tools">
            <!-- Prayer Time Dynamic Widget with Interactive Popover -->
            <div class="prayer-widget-wrap">
                <button class="pray" id="pr" type="button" aria-expanded="false" title="Klik untuk melihat jadwal shalat 5 waktu">
                    🕌<span><span id="prayerName"><?= htmlspecialchars($nextPrayer['name']) ?></span> <b id="prayerTime"><?= htmlspecialchars($nextPrayer['time']) ?></b></span>
                    <svg class="prayer-caret" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="prayer-popover" id="prayerPopover">
                    <div class="prayer-popover-header">
                        <b>Jadwal Shalat Hari Ini</b>
                        <small>Kota Semarang & Sekitarnya (WIB)</small>
                    </div>
                    <div class="prayer-list">
                        <?php foreach($prayerSchedule as $name => $time): ?>
                            <div class="prayer-item <?= ($name === $nextPrayer['name']) ? 'is-next' : '' ?>" data-name="<?= htmlspecialchars($name) ?>">
                                <span><?= htmlspecialchars($name) ?></span>
                                <b><?= htmlspecialchars($time) ?> WIB</b>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="prayer-popover-footer">
                        <small>Sumber: Kemenag RI (Perkiraan)</small>
                    </div>
                </div>
            </div>

            <!-- Mobile Burger Button -->
            <button class="burger" id="bg" aria-label="Buka menu navigasi">☰</button>
        </div>
    </div>

    <!-- Mobile Drawer Navigation -->
    <div class="mobile-nav-drawer" id="mobileDrawer">
        <div class="mobile-nav-content">
            <div style="display:flex;align-items:center;justify-content:space-between;padding-bottom:14px;border-bottom:1px solid var(--line);margin-bottom:14px;">
                <div style="display:flex;align-items:center;gap:8px;">
                    <b style="font-size:18px;font-family:'Poppins';">UKKI UNNES</b>
                </div>
                <button id="closeDrawer" style="background:var(--line);border:0;border-radius:8px;width:32px;height:32px;font-size:16px;cursor:pointer;">✕</button>
            </div>

            <div class="mobile-nav-section-title">Menu Utama</div>
            <a href="/beranda" class="mobile-nav-link <?= ($activePage == 'beranda') ? 'on' : '' ?>">
                Beranda
                <small>Halaman utama website UKKI UNNES</small>
            </a>

            <div class="mobile-nav-section-title">Tentang Kami</div>
            <a href="/profil" class="mobile-nav-link <?= ($activePage == 'profil') ? 'on' : '' ?>">
                Profil UKKI
                <small>Sejarah, visi, dan misi LDK</small>
            </a>
            <a href="/kabinet" class="mobile-nav-link <?= ($activePage == 'kabinet') ? 'on' : '' ?>">
                Kabinet Segara Langkah
                <small>Struktur kepengurusan periode 1446/1447 H</small>
            </a>
            <a href="/departemen" class="mobile-nav-link <?= ($activePage == 'departemen') ? 'on' : '' ?>">
                Departemen & Biro
                <small>Sinergi bidang syiar & kaderisasi</small>
            </a>
            <a href="/lembaga" class="mobile-nav-link <?= ($activePage == 'lembaga') ? 'on' : '' ?>">
                Lembaga Dakwah UNNES
                <small>Jaringan dakwah fakultas & forum masjid</small>
            </a>

            <div class="mobile-nav-section-title">Program & Layanan</div>
            <a href="/kegiatan" class="mobile-nav-link <?= ($activePage == 'kegiatan') ? 'on' : '' ?>">
                📅 Kegiatan & Agenda
                <small>Agenda dakwah & kajian rutin</small>
            </a>
            <a href="/store-ukki" class="mobile-nav-link <?= ($activePage == 'store-ukki') ? 'on' : '' ?>">
                🛍️ Store UKKI
                <small>Merchandise & peminjaman inventaris</small>
            </a>
            <a href="/donasi" class="mobile-nav-link <?= ($activePage == 'donasi') ? 'on' : '' ?>">
                🤝 Donasi Dakwah
                <small>Infaq kebaikan bersama</small>
            </a>
            <a href="/informasi" class="mobile-nav-link <?= ($activePage == 'informasi') ? 'on' : '' ?>">
                📢 Informasi Maba
                <small>Pendataan mahasiswa baru muslim</small>
            </a>
            <a href="/lainnya" class="mobile-nav-link <?= ($activePage == 'lainnya') ? 'on' : '' ?>">
                Lainnya & FAQ
                <small>Kontak & sekretariat</small>
            </a>

            <div class="mobile-nav-section-title">Pengaturan Tampilan</div>
            <button class="mobile-theme-toggle" id="mobileThemeToggle" type="button">
                <span>◐ Ganti Mode Tampilan (Light / Dark)</span>
            </button>

            <?php if($isAdmin): ?>
                <div class="mobile-nav-section-title">Administrator</div>
                <a href="/admin" class="mobile-nav-link on">⚙️ Dashboard Admin</a>
                <a href="/admin/logout" class="mobile-nav-link" style="color:#ef4444;">Logout</a>
            <?php endif; ?>
        </div>
    </div>
</header>
<main>
