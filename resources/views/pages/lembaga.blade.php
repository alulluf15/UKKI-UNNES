@include('layouts.header')

<?php
if (!function_exists('getLembagaImage')) {
    function getLembagaImage($slug) {
        $extensions = ['png', 'jpg', 'jpeg', 'webp', 'svg'];
        foreach ($extensions as $ext) {
            $rel = "assets/img/lembaga/{$slug}.{$ext}";
            if (file_exists(public_path($rel))) {
                return "/{$rel}";
            }
        }
        return null;
    }
}

// Fallback jika tidak dikirim dari controller
if (!isset($ldfList) || !isset($ldjList)) {
    $fallbackData = (new \App\Http\Controllers\HomeController())->getLembagaData();
    $ldfList = $ldfList ?? $fallbackData['ldf'];
    $ldjList = $ldjList ?? $fallbackData['ldj'];
}

$countLdf = count($ldfList);
$countLdj = count($ldjList);
$countTotal = $countLdf + $countLdj;
?>

<!-- Header Banner Halaman -->
<div class="pgh">
    <div class="wrap">
        <div style="display:flex;align-items:center;gap:8px;font-size:12.5px;color:rgba(255,255,255,0.75);margin-bottom:8px;">
            <a href="/beranda" style="color:inherit;">Beranda</a>
            <span aria-hidden="true">›</span>
            <span>Tentang Kami</span>
            <span aria-hidden="true">›</span>
            <span style="color:#f6d65a;">Lembaga Dakwah UNNES</span>
        </div>
        <h1>Lembaga Dakwah UNNES</h1>
        <p>Jaringan sinergi universitas dan fakultas.</p>
    </div>
</div>

<section class="s" style="padding-top:40px;">
    <div class="wrap">

        <!-- =========================================================================
             BAGIAN 1: LEMBAGA DAKWAH FAKULTAS (LDF)
             ========================================================================= -->
        <section id="bagian-ldf" class="ld-section-block">
            
            <div class="ld-section-title-wrap">
                <div class="ld-section-title-main">
                    <span class="ld-section-eyebrow" style="color:var(--pri);">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M3 21h18"></path>
                            <path d="M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16"></path>
                        </svg>
                        Bagian 1
                    </span>
                    <h2>Lembaga Dakwah Fakultas (LDF)</h2>
                    <p>Organisasi kemahasiswaan kerohanian Islam tingkat fakultas yang mengawal dakwah kultural dan akademik di lingkungan masing-masing fakultas UNNES.</p>
                </div>
                <div class="ld-section-badge-count" style="color:var(--pri);border-color:rgba(0,121,107,0.3);background:rgba(0,121,107,0.06);">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                        <path d="M3 9h18"></path>
                        <path d="M9 21V9"></path>
                    </svg>
                    <span><?= $countLdf ?> Lembaga Fakultas</span>
                </div>
            </div>

            <!-- Grid Kartu LDF -->
            <div class="ld-grid" id="gridLdf">
                <?php foreach ($ldfList as $ldf): ?>
                    <article class="ld-card" 
                             data-type="ldf" 
                             data-name="<?= strtolower(htmlspecialchars($ldf['name'])) ?>"
                             data-short="<?= strtolower(htmlspecialchars($ldf['short_name'])) ?>"
                             data-faculty="<?= strtolower(htmlspecialchars($ldf['faculty'])) ?>">
                        
                        <div>
                            <!-- Space untuk 1 Gambar (Foto / Sampul / Logo Lembaga) -->
                            <div class="ld-card-img-wrap">
                                <?php $coverImg = getLembagaImage($ldf['slug']); ?>
                                <?php if ($coverImg): ?>
                                    <img src="<?= $coverImg ?>" 
                                         alt="Foto <?= htmlspecialchars($ldf['name']) ?>" 
                                         class="ld-card-img" 
                                         loading="lazy">
                                <?php else: ?>
                                    <div class="ld-card-img-placeholder">
                                        <svg class="ld-card-img-icon" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                                            <circle cx="9" cy="9" r="2"></circle>
                                            <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path>
                                        </svg>
                                        <span class="ld-card-img-text">Space Foto / Logo</span>
                                        <span class="ld-card-img-hint">File: <code><?= htmlspecialchars($ldf['slug']) ?>.jpg</code></span>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="ld-card-header">
                                <div class="ld-avatar ld-avatar-ldf" aria-hidden="true">
                                    <?= htmlspecialchars($ldf['faculty_short'] ?? substr($ldf['short_name'], 0, 3)) ?>
                                </div>
                                <span class="ld-badge ld-badge-ldf">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M3 21h18"></path>
                                        <path d="M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16"></path>
                                    </svg>
                                    LDF
                                </span>
                            </div>

                            <div class="ld-card-body">
                                <h3 class="ld-card-title"><?= htmlspecialchars($ldf['name']) ?></h3>
                                
                                <div class="ld-card-faculty">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                                        <path d="M3 9h18"></path>
                                        <path d="M9 21V9"></path>
                                    </svg>
                                    <span><?= htmlspecialchars($ldf['faculty']) ?></span>
                                </div>

                                <p class="ld-card-desc"><?= htmlspecialchars($ldf['desc']) ?></p>

                                <div class="ld-card-focus">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="var(--pri)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:1px;" aria-hidden="true">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>
                                    </svg>
                                    <div>
                                        <strong style="color:var(--ink);display:block;font-size:11.5px;text-transform:uppercase;letter-spacing:.03em;margin-bottom:2px;">Fokus Gerakan</strong>
                                        <?= htmlspecialchars($ldf['focus']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ld-card-footer">
                            <span class="ld-status-pill">
                                <span class="ld-status-dot" aria-hidden="true"></span>
                                Tingkat Fakultas
                            </span>
                            <span style="font-weight:600;color:var(--pri);"><?= htmlspecialchars($ldf['short_name']) ?></span>
                        </div>

                    </article>
                <?php endforeach; ?>
            </div>

        </section>


        <!-- =========================================================================
             BAGIAN 2: LEMBAGA DAKWAH JURUSAN (LDJ)
             ========================================================================= -->
        <section id="bagian-ldj" class="ld-section-block">
            
            <div class="ld-section-title-wrap">
                <div class="ld-section-title-main">
                    <span class="ld-section-eyebrow" style="color:var(--ind);">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"></path>
                            <path d="M6 6h10"></path>
                            <path d="M6 10h10"></path>
                        </svg>
                        Bagian 2
                    </span>
                    <h2>Lembaga Dakwah Jurusan (LDJ)</h2>
                    <p>Wadah pembinaan dan kerohanian Islam berbasis program studi, jurusan, dan kelompok studi yang menjadi simpul ukhuwah terdekat mahasiswa.</p>
                </div>
                <div class="ld-section-badge-count" style="color:var(--ind);border-color:rgba(99,102,241,0.3);background:rgba(99,102,241,0.06);">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="12" r="4"></circle>
                        <path d="M12 2v2"></path>
                        <path d="M12 20v2"></path>
                        <path d="m4.93 4.93 1.41 1.41"></path>
                        <path d="m17.66 17.66 1.41 1.41"></path>
                        <path d="M2 12h2"></path>
                        <path d="M20 12h2"></path>
                        <path d="m6.34 17.66-1.41 1.41"></path>
                        <path d="m19.07 4.93-1.41 1.41"></path>
                    </svg>
                    <span><?= $countLdj ?> Lembaga Jurusan</span>
                </div>
            </div>

            <!-- Grid Kartu LDJ -->
            <div class="ld-grid" id="gridLdj">
                <?php foreach ($ldjList as $ldj): ?>
                    <article class="ld-card" 
                             data-type="ldj" 
                             data-name="<?= strtolower(htmlspecialchars($ldj['name'])) ?>"
                             data-short="<?= strtolower(htmlspecialchars($ldj['short_name'])) ?>"
                             data-faculty="<?= strtolower(htmlspecialchars($ldj['faculty'])) ?>">
                        
                        <div>
                            <!-- Space untuk 1 Gambar (Foto / Sampul / Logo Lembaga) -->
                            <div class="ld-card-img-wrap">
                                <?php $coverImg = getLembagaImage($ldj['slug']); ?>
                                <?php if ($coverImg): ?>
                                    <img src="<?= $coverImg ?>" 
                                         alt="Foto <?= htmlspecialchars($ldj['name']) ?>" 
                                         class="ld-card-img" 
                                         loading="lazy">
                                <?php else: ?>
                                    <div class="ld-card-img-placeholder">
                                        <svg class="ld-card-img-icon" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                                            <circle cx="9" cy="9" r="2"></circle>
                                            <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path>
                                        </svg>
                                        <span class="ld-card-img-text">Space Foto / Logo</span>
                                        <span class="ld-card-img-hint">File: <code><?= htmlspecialchars($ldj['slug']) ?>.jpg</code></span>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="ld-card-header">
                                <div class="ld-avatar ld-avatar-ldj" aria-hidden="true">
                                    <?= htmlspecialchars(substr($ldj['short_name'], 0, 4)) ?>
                                </div>
                                <span class="ld-badge ld-badge-ldj">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"></path>
                                        <path d="M6 6h10"></path>
                                        <path d="M6 10h10"></path>
                                    </svg>
                                    LDJ
                                </span>
                            </div>

                            <div class="ld-card-body">
                                <h3 class="ld-card-title"><?= htmlspecialchars($ldj['name']) ?></h3>
                                
                                <div class="ld-card-faculty" style="color:var(--ind);">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <path d="M12 2v2"></path>
                                        <path d="M12 20v2"></path>
                                        <path d="m4.93 4.93 1.41 1.41"></path>
                                        <path d="m17.66 17.66 1.41 1.41"></path>
                                        <path d="M2 12h2"></path>
                                        <path d="M20 12h2"></path>
                                        <path d="m6.34 17.66-1.41 1.41"></path>
                                        <path d="m19.07 4.93-1.41 1.41"></path>
                                    </svg>
                                    <span><?= htmlspecialchars($ldj['faculty']) ?></span>
                                </div>

                                <p class="ld-card-desc"><?= htmlspecialchars($ldj['desc']) ?></p>

                                <div class="ld-card-focus">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="var(--ind)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:1px;" aria-hidden="true">
                                        <path d="M12 20h9"></path>
                                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                    </svg>
                                    <div>
                                        <strong style="color:var(--ink);display:block;font-size:11.5px;text-transform:uppercase;letter-spacing:.03em;margin-bottom:2px;">Fokus Gerakan</strong>
                                        <?= htmlspecialchars($ldj['focus']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ld-card-footer">
                            <span class="ld-status-pill">
                                <span class="ld-status-dot" style="background:#6366f1;" aria-hidden="true"></span>
                                Tingkat Jurusan
                            </span>
                            <span style="font-weight:600;color:var(--ind);"><?= htmlspecialchars($ldj['short_name']) ?></span>
                        </div>

                    </article>
                <?php endforeach; ?>
            </div>

        </section>

    </div>
</section>

@include('layouts.footer')
