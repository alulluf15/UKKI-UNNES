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

$countAll = count($deptList);
$countPh = count(array_filter($deptList, fn($d) => $d['type'] === 'ph'));
$countBiro = count(array_filter($deptList, fn($d) => $d['type'] === 'biro'));
$countDept = count(array_filter($deptList, fn($d) => $d['type'] === 'departemen'));
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

        <!-- Intro Banner & Petunjuk Navigasi -->
        <div class="dept-intro-banner">
            <div class="dept-intro-text">
                <h2>Struktur Kepengurusan Kabinet</h2>
                <p>Klik pada kartu departemen/biro untuk melihat bagan struktur kepemimpinan dan foto anggotanya.</p>
            </div>
            <div style="flex-shrink:0;">
                <span style="display:inline-flex;align-items:center;gap:6px;background:rgba(0,121,107,0.1);color:var(--pri);padding:6px 14px;border-radius:999px;font:700 12px 'Poppins';">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    <?= $countAll ?> Bidang Kepengurusan
                </span>
            </div>
        </div>

        <!-- Filter Bar Kategori (Modern Accessible Tabs) -->
        <div class="dept-filter-bar" role="tablist" aria-label="Filter kategori bidang">
            <button type="button" class="dept-filter-btn active" data-filter="all" role="tab" aria-selected="true">
                Semua Bidang <span class="dept-filter-count"><?= $countAll ?></span>
            </button>
            <button type="button" class="dept-filter-btn" data-filter="ph" role="tab" aria-selected="false">
                Pengurus Harian <span class="dept-filter-count"><?= $countPh ?></span>
            </button>
            <button type="button" class="dept-filter-btn" data-filter="biro" role="tab" aria-selected="false">
                Biro <span class="dept-filter-count"><?= $countBiro ?></span>
            </button>
            <button type="button" class="dept-filter-btn" data-filter="departemen" role="tab" aria-selected="false">
                Departemen <span class="dept-filter-count"><?= $countDept ?></span>
            </button>
        </div>

        <!-- Grid Departemen & Biro (Navigasi langsung dalam tab yang sama) -->
        <div class="dept-grid" id="deptGrid">
            <?php foreach ($deptList as $dept): ?>
                <?php
                    $coverImg = getDeptImage($dept['slug'], 'cover');
                ?>
                <a href="/departemen/<?= htmlspecialchars($dept['slug']) ?>"
                   class="dept-card"
                   data-type="<?= $dept['type'] ?>"
                   aria-label="Lihat struktur dan anggota <?= htmlspecialchars($dept['name']) ?>">

                    <!-- 1 Gambar Awal (Sampul / Logo Departemen) -->
                    <div class="dept-cover-wrap">
                        <span class="dept-cover-badge <?= $dept['badge_class'] ?>">
                            <?= htmlspecialchars($dept['type_label']) ?>
                        </span>

                        <?php if ($coverImg): ?>
                            <img src="<?= htmlspecialchars($coverImg) ?>"
                                 alt="Sampul <?= htmlspecialchars($dept['name']) ?>"
                                 class="dept-cover-img"
                                 loading="lazy"
                                 <?= ($dept['slug'] === 'ph') ? 'style="object-fit:contain;padding:16px;background:#fff;"' : '' ?>>
                        <?php else: ?>
                            <!-- Fallback Placeholder jika foto belum diunggah -->
                            <div class="dept-cover-fallback">
                                <div class="dept-fallback-icon" aria-hidden="true">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                </div>
                                <div>
                                    <span class="dept-fallback-badge"><?= htmlspecialchars($dept['short_name']) ?></span>
                                    <p style="font-size:12px;color:var(--mut);margin-top:4px;">Foto Sampul</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Informasi Departemen / Biro -->
                    <div class="dept-card-body">
                        <div>
                            <h3 class="dept-card-title"><?= htmlspecialchars($dept['name']) ?></h3>
                            <p class="dept-card-desc"><?= htmlspecialchars($dept['desc']) ?></p>
                        </div>
                        <div class="dept-card-action">
                            <span class="dept-action-pill">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                Lihat Struktur & Anggota
                            </span>
                            <span class="dept-action-arrow" aria-hidden="true">→</span>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Empty State (Jika filter kosong) -->
        <div id="deptEmptyState" class="dept-empty-state" role="status" aria-live="polite">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="var(--mut)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom:12px;" aria-hidden="true">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
            <h3 style="font:700 18px 'Poppins';color:var(--ink);margin-bottom:6px;">Tidak ada bidang ditemukan</h3>
            <p style="color:var(--mut);font-size:14px;">Silakan pilih tab kategori lainnya untuk menampilkan daftar bidang.</p>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Filter Kategori Bidang (Semua, PH, Biro, Departemen)
    const filterBtns = document.querySelectorAll('.dept-filter-btn');
    const deptCards = document.querySelectorAll('.dept-card');
    const emptyState = document.getElementById('deptEmptyState');

    filterBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            const filter = this.getAttribute('data-filter');

            filterBtns.forEach(function (b) {
                b.classList.remove('active');
                b.setAttribute('aria-selected', 'false');
            });
            this.classList.add('active');
            this.setAttribute('aria-selected', 'true');

            let visibleCount = 0;
            deptCards.forEach(function (card) {
                const type = card.getAttribute('data-type');
                if (filter === 'all' || type === filter) {
                    card.style.display = 'flex';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            if (emptyState) {
                if (visibleCount === 0) {
                    emptyState.classList.add('visible');
                } else {
                    emptyState.classList.remove('visible');
                }
            }
        });
    });
});
</script>

@include('layouts.footer')
