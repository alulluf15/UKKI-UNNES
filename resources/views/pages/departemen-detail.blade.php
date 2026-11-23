@include('layouts.header')

<?php
$kabinetName = $dept['kabinet'] ?? 'Kabinet Satu Simfoni';
$tagline = $dept['tagline'] ?? 'Satukan Sinergi, Selaraskan Aksi';
$hasStructure = !empty($dept['structure']);
$structure = $dept['structure'] ?? [];
$posters = $dept['posters'] ?? [];
$membersImages = $dept['members_images'] ?? [];
$people = $dept['people'] ?? [];
$narration = $dept['narration'] ?? null;
$logoSrc = ($dept['slug'] === 'ph') ? '/assets/img/departemen/ph-logo.png' : '/assets/img/departemen/ph-logo.png';
?>

<!-- Header Banner Halaman -->
<div class="pgh">
    <div class="wrap">
        <div style="display:flex;align-items:center;gap:8px;font-size:12.5px;color:rgba(255,255,255,0.75);margin-bottom:8px;flex-wrap:wrap;">
            <a href="/beranda" style="color:inherit;">Beranda</a>
            <span>›</span>
            <a href="/departemen" style="color:inherit;">Departemen & Biro</a>
            <span>›</span>
            <span style="color:#f6d65a;"><?= htmlspecialchars($dept['name']) ?></span>
        </div>
        <h1><?= htmlspecialchars($dept['name']) ?></h1>
        <p><?= htmlspecialchars($tagline) ?></p>
    </div>
</div>

<section class="s">
    <div class="wrap">

        <!-- Navigasi Kembali -->
        <div style="margin-bottom: 24px;">
            <a href="/departemen" class="btn" style="background:var(--card);border:1px solid var(--line);color:var(--ink);box-shadow:var(--sh);">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"></path><path d="M12 19l-7-7 7-7"></path></svg>
                Kembali ke Departemen & Biro
            </a>
        </div>

        <?php if ($hasStructure): ?>
            <!-- =========================================================================
                 STRUKTUR KEPENGURUSAN URUTAN MAS'UL, WAMAS'UL, KORWAT, SEKUM, BENDUM (PH)
                 ========================================================================= -->
            <div class="dept-section-title-wrap">
                <span class="dept-section-badge">Bagan Kepemimpinan</span>
                <h2>Struktur & Formasi Anggota</h2>
                <p>Urutan kepemimpinan struktural Pengurus Harian UKKI UNNES secara rapi, jelas, dan akuntabel.</p>
            </div>

            <div class="dept-organogram-tree">
                
                <!-- TINGKAT 1: MAS'UL (Ketua Umum) -->
                <?php if (!empty($structure['masul'])): ?>
                    <?php $masul = $structure['masul']; ?>
                    <div class="dept-tree-tier-masul">
                        <div class="dept-leader-card tier-masul">
                            <div class="dept-leader-img-box">
                                <img src="<?= htmlspecialchars($masul['photo']) ?>" alt="<?= htmlspecialchars($masul['name']) ?>" loading="lazy">
                            </div>
                            <div class="dept-leader-content">
                                <span class="dept-leader-role-badge role-badge-masul"><?= htmlspecialchars($masul['title']) ?></span>
                                <h3 class="dept-leader-name"><?= htmlspecialchars($masul['name']) ?></h3>
                                <p class="dept-leader-major">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
                                    <?= htmlspecialchars($masul['major']) ?>
                                </p>
                                <p style="font-size:12.5px;color:var(--mut);margin-top:6px;"><?= htmlspecialchars($masul['role']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- TINGKAT 2: WAMAS'UL & KORWAT -->
                <div class="dept-tree-tier-deputies">
                    <!-- WAMAS'UL -->
                    <?php if (!empty($structure['wamasul'])): ?>
                        <?php $wamasul = $structure['wamasul']; ?>
                        <div class="dept-leader-card tier-wamasul">
                            <div class="dept-leader-img-box">
                                <img src="<?= htmlspecialchars($wamasul['photo']) ?>" alt="<?= htmlspecialchars($wamasul['name']) ?>" loading="lazy">
                            </div>
                            <div class="dept-leader-content">
                                <span class="dept-leader-role-badge role-badge-wamasul"><?= htmlspecialchars($wamasul['title']) ?></span>
                                <h3 class="dept-leader-name"><?= htmlspecialchars($wamasul['name']) ?></h3>
                                <p class="dept-leader-major">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
                                    <?= htmlspecialchars($wamasul['major']) ?>
                                </p>
                                <p style="font-size:12.5px;color:var(--mut);margin-top:6px;"><?= htmlspecialchars($wamasul['role']) ?></p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- KORWAT -->
                    <?php if (!empty($structure['korwat'])): ?>
                        <?php $korwat = $structure['korwat']; ?>
                        <div class="dept-leader-card tier-korwat">
                            <div class="dept-leader-img-box">
                                <img src="<?= htmlspecialchars($korwat['photo']) ?>" alt="<?= htmlspecialchars($korwat['name']) ?>" loading="lazy">
                            </div>
                            <div class="dept-leader-content">
                                <span class="dept-leader-role-badge role-badge-korwat"><?= htmlspecialchars($korwat['title']) ?></span>
                                <h3 class="dept-leader-name"><?= htmlspecialchars($korwat['name']) ?></h3>
                                <p class="dept-leader-major">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
                                    <?= htmlspecialchars($korwat['major']) ?>
                                </p>
                                <p style="font-size:12.5px;color:var(--mut);margin-top:6px;"><?= htmlspecialchars($korwat['role']) ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

            </div>

            <!-- TINGKAT 3: SEKRETARIS UMUM (SEKUM) -->
            <?php if (!empty($structure['sekum'])): ?>
                <?php $sekum = $structure['sekum']; ?>
                <div class="dept-division-card">
                    <div class="dept-division-header">
                        <div class="dept-division-title-group">
                            <span class="dept-division-badge">SEKUM</span>
                            <h3><?= htmlspecialchars($sekum['title']) ?></h3>
                        </div>
                        <span style="font-size:13px;color:var(--mut);"><?= htmlspecialchars($sekum['role']) ?></span>
                    </div>

                    <div class="dept-division-grid">
                        <!-- Kolom Visual (2 Foto: Cover Sekum & Formasi Anggota Sekum) -->
                        <div class="dept-division-visual-col">
                            <div class="dept-poster-box">
                                <img src="<?= htmlspecialchars($sekum['cover']) ?>" alt="Foto Bersama Sekretaris Umum" loading="lazy">
                                <span class="dept-poster-caption">Dokumentasi Sekretaris Umum</span>
                            </div>
                            <div class="dept-poster-box">
                                <img src="<?= htmlspecialchars($sekum['members_photo']) ?>" alt="Formasi Anggota Sekretaris Umum" loading="lazy">
                                <span class="dept-poster-caption">Formasi Anggota Sekretaris Umum</span>
                            </div>
                        </div>

                        <!-- Kolom Personalia UI Rapi -->
                        <div class="dept-division-people-col">
                            <h4 class="dept-people-headline">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--pri)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                Susunan Anggota Sekretaris Umum
                            </h4>

                            <?php foreach ($sekum['members'] as $idx => $m): ?>
                                <div class="dept-person-chip">
                                    <div class="dept-person-avatar">
                                        <?= ($idx + 1) ?>
                                    </div>
                                    <div class="dept-person-info">
                                        <h4><?= htmlspecialchars($m['name']) ?></h4>
                                        <p class="dept-person-pos"><?= htmlspecialchars($m['position']) ?></p>
                                        <p class="dept-person-major"><?= htmlspecialchars($m['major']) ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!-- TINGKAT 4: BENDAHARA UMUM (BENDUM) -->
            <?php if (!empty($structure['bendum'])): ?>
                <?php $bendum = $structure['bendum']; ?>
                <div class="dept-division-card">
                    <div class="dept-division-header">
                        <div class="dept-division-title-group">
                            <span class="dept-division-badge">BENDUM</span>
                            <h3><?= htmlspecialchars($bendum['title']) ?></h3>
                        </div>
                        <span style="font-size:13px;color:var(--mut);"><?= htmlspecialchars($bendum['role']) ?></span>
                    </div>

                    <?php if (!empty($bendum['desc'])): ?>
                        <div class="dept-division-narration">
                            <strong>Amanah & Fungsi:</strong> <?= htmlspecialchars($bendum['desc']) ?>
                        </div>
                    <?php endif; ?>

                    <div class="dept-division-grid">
                        <!-- Kolom Visual (2 Foto: Cover Bendum & Formasi Anggota Bendum) -->
                        <div class="dept-division-visual-col">
                            <div class="dept-poster-box">
                                <img src="<?= htmlspecialchars($bendum['cover']) ?>" alt="Foto Bersama Bendahara Umum" loading="lazy">
                                <span class="dept-poster-caption">Dokumentasi Bendahara Umum</span>
                            </div>
                            <div class="dept-poster-box">
                                <img src="<?= htmlspecialchars($bendum['members_photo']) ?>" alt="Formasi Anggota Bendahara Umum" loading="lazy">
                                <span class="dept-poster-caption">Formasi Anggota Bendahara Umum</span>
                            </div>
                        </div>

                        <!-- Kolom Personalia UI Rapi -->
                        <div class="dept-division-people-col">
                            <h4 class="dept-people-headline">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--pri)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                Susunan Anggota Bendahara Umum
                            </h4>

                            <?php foreach ($bendum['members'] as $idx => $m): ?>
                                <div class="dept-person-chip">
                                    <div class="dept-person-avatar">
                                        <?= ($idx + 1) ?>
                                    </div>
                                    <div class="dept-person-info">
                                        <h4><?= htmlspecialchars($m['name']) ?></h4>
                                        <p class="dept-person-pos"><?= htmlspecialchars($m['position']) ?></p>
                                        <p class="dept-person-major"><?= htmlspecialchars($m['major']) ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        <?php elseif (!empty($membersImages)): ?>
            <!-- Foto Anggota Sesuai Permintaan User -->
            <div class="dept-members-showcase-grid" style="display:grid;grid-template-columns:repeat(auto-fit, minmax(320px, 1fr));gap:28px;margin-bottom:44px;<?= count($membersImages) === 1 ? 'max-width:480px;margin-left:auto;margin-right:auto;' : '' ?>">
                <?php foreach ($membersImages as $img): ?>
                    <div class="dept-poster-card">
                        <div class="dept-poster-img-link">
                            <img src="<?= htmlspecialchars($img['src']) ?>" alt="<?= htmlspecialchars($img['title']) ?>" loading="lazy">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        <?php else: ?>
            <!-- Tampilan Bersih untuk Departemen yang Belum Memiliki Unggahan Foto -->
            <div style="background:var(--card);border:1px solid var(--line);border-radius:20px;padding:56px 24px;text-align:center;max-width:640px;margin:28px auto;box-shadow:var(--sh);">
                <div style="width:64px;height:64px;border-radius:50%;background:rgba(13, 74, 58, 0.08);display:grid;place-items:center;color:var(--pri);margin:0 auto 16px;">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                        <polyline points="21 15 16 10 5 21"></polyline>
                    </svg>
                </div>
                <h3 style="font:700 20px 'Poppins',sans-serif;color:var(--ink);margin-bottom:8px;">Dokumentasi & Formasi Belum Tersedia</h3>
                <p style="color:var(--mut);font-size:14px;line-height:1.6;margin-bottom:24px;max-width:440px;margin-left:auto;margin-right:auto;">
                    Dokumentasi foto dan formasi kepengurusan <?= htmlspecialchars($dept['name']) ?> saat ini belum diunggah.
                </p>
                <a href="/departemen" class="btn" style="background:var(--pri);color:#fff;font-size:13.5px;padding:10px 22px;">
                    Kembali ke Departemen & Biro
                </a>
            </div>
        <?php endif; ?>

    </div>
</section>

@include('layouts.footer')
