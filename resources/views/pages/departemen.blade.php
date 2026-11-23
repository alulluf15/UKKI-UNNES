@include('layouts.header')

<?php
if (!function_exists('getDeptImage')) {
    function getDeptImage($slug, $type = 'cover') {
        $extensions = ['png', 'jpg', 'jpeg', 'webp', 'svg'];
        
        $candidates = [];
        if ($type === 'cover') {
            $candidates[] = "assets/img/departemen/{$slug}";
            $candidates[] = "assets/img/departemen/{$slug}-cover";
        } elseif ($type === 'member-1') {
            $candidates[] = "assets/img/departemen/{$slug}-anggota-1";
            $candidates[] = "assets/img/departemen/{$slug}-1";
        } elseif ($type === 'member-2') {
            $candidates[] = "assets/img/departemen/{$slug}-anggota-2";
            $candidates[] = "assets/img/departemen/{$slug}-2";
        }

        foreach ($candidates as $base) {
            foreach ($extensions as $ext) {
                $rel = "{$base}.{$ext}";
                if (file_exists(public_path($rel))) {
                    return "/{$rel}";
                }
            }
        }
        return null;
    }
}

// Gunakan data dari controller jika tersedia, atau fallback default
$deptList = $departments ?? (new \App\Http\Controllers\HomeController())->getDepartmentsData();
?>

<!-- Header Banner Halaman -->
<div class="pgh">
    <div class="wrap">
        <div style="display:flex;align-items:center;gap:8px;font-size:12.5px;color:rgba(255,255,255,0.75);margin-bottom:8px;">
            <a href="/beranda" style="color:inherit;">Beranda</a>
            <span>›</span>
            <span>Tentang Kami</span>
            <span>›</span>
            <span style="color:#f6d65a;">Departemen & Biro</span>
        </div>
        <h1>Departemen & Biro</h1>
        <p>Sinergi dalam satu irama gerakan.</p>
    </div>
</div>

<section class="s">
    <div class="wrap">

        <!-- Grid Departemen & Biro (Minimalis: Hanya Gambar & Nama Bidang) -->
        <div class="dept-grid" id="deptGrid">
            <?php foreach ($deptList as $dept): ?>
                <?php
                    $coverImg = getDeptImage($dept['slug'], 'cover');
                    $isLogo = ($dept['slug'] === 'ph') || ($coverImg && str_ends_with($coverImg, '.png'));
                ?>
                <a href="/departemen/<?= htmlspecialchars($dept['slug']) ?>"
                   class="dept-card"
                   aria-label="Lihat <?= htmlspecialchars($dept['name']) ?>">

                    <!-- 1 Gambar Awal (Sampul / Logo Departemen) -->
                    <div class="dept-cover-wrap">
                        <?php if ($coverImg): ?>
                            <img src="<?= htmlspecialchars($coverImg) ?>"
                                 alt="<?= htmlspecialchars($dept['name']) ?>"
                                 class="dept-cover-img <?= $isLogo ? 'is-logo' : '' ?>"
                                 loading="lazy">
                        <?php else: ?>
                            <!-- Fallback Placeholder Bersih & Minimalis -->
                            <div class="dept-cover-fallback">
                                <div class="dept-fallback-icon" aria-hidden="true">
                                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                </div>
                                <span class="dept-fallback-badge"><?= htmlspecialchars($dept['short_name']) ?></span>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Nama Departemen / Biro Saja -->
                    <div class="dept-card-body">
                        <h3 class="dept-card-title"><?= htmlspecialchars($dept['name']) ?></h3>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

    </div>
</section>

@include('layouts.footer')
