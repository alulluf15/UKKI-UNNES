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
                    <h2>Lembaga Dakwah Fakultas (LDF)</h2>
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
                    <article class="ld-card">
                        <div class="ld-card-img-wrap">
                            <?php $coverImg = getLembagaImage($ldf['slug']); ?>
                            <?php if ($coverImg): ?>
                                <img src="<?= $coverImg ?>" 
                                     alt="Logo <?= htmlspecialchars($ldf['name']) ?>" 
                                     class="ld-card-img" 
                                     loading="lazy">
                            <?php else: ?>
                                <div class="ld-card-img-placeholder">
                                    <svg class="ld-card-img-icon" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                                        <circle cx="9" cy="9" r="2"></circle>
                                        <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path>
                                    </svg>
                                    <span class="ld-card-img-text">Foto / Logo</span>
                                </div>
                            <?php endif; ?>
                        </div>
                        <h3 class="ld-card-title"><?= htmlspecialchars($ldf['name']) ?></h3>
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
                    <h2>Lembaga Dakwah Jurusan (LDJ)</h2>
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
                    <article class="ld-card">
                        <div class="ld-card-img-wrap">
                            <?php $coverImg = getLembagaImage($ldj['slug']); ?>
                            <?php if ($coverImg): ?>
                                <img src="<?= $coverImg ?>" 
                                     alt="Logo <?= htmlspecialchars($ldj['name']) ?>" 
                                     class="ld-card-img" 
                                     loading="lazy">
                            <?php else: ?>
                                <div class="ld-card-img-placeholder">
                                    <svg class="ld-card-img-icon" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                                        <circle cx="9" cy="9" r="2"></circle>
                                        <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path>
                                    </svg>
                                    <span class="ld-card-img-text">Foto / Logo</span>
                                </div>
                            <?php endif; ?>
                        </div>
                        <h3 class="ld-card-title"><?= htmlspecialchars($ldj['name']) ?></h3>
                    </article>
                <?php endforeach; ?>
            </div>

        </section>

    </div>
</section>

@include('layouts.footer')
