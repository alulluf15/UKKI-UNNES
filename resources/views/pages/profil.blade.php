@include('layouts.header')

<!-- Header Banner Halaman -->
<div class="pgh">
    <div class="wrap">
        <div style="display:flex;align-items:center;gap:8px;font-size:12.5px;color:rgba(255,255,255,0.75);margin-bottom:8px;">
            <a href="/beranda" style="color:inherit;">Beranda</a>
            <span>›</span>
            <span>Tentang Kami</span>
            <span>›</span>
            <span style="color:#f6d65a;">Profil UKKI</span>
        </div>
        <h1>Profil UKKI</h1>
        <p>Mengenal lembaga dakwah kampus Universitas Negeri Semarang.</p>
    </div>
</div>

<section class="s" style="padding-top:36px;padding-bottom:60px;">
    <div class="wrap">

        <!-- Pemutar Video Sinematik Satu Halaman Penuh (Full Width 16:9) -->
        <div class="profil-cinema-wrap" id="video-profil">
            <div class="profil-cinema-viewport">
                <iframe 
                    class="profil-cinema-iframe" 
                    src="https://drive.google.com/file/d/1lBzU7SZDAXJRdnm9N7iYDdWjUHpzl4kn/preview" 
                    allow="autoplay; fullscreen" 
                    allowfullscreen 
                    loading="lazy" 
                    title="Video Profil Resmi UKKI UNNES">
                </iframe>
            </div>
        </div>

        <!-- Penjelasan Resmi di Bawah Video (Struktur Editorial Modern) -->
        <article class="profil-article-card">
            
            <!-- Header Penjelasan Lembaga -->
            <div class="profil-article-header">
                <span class="profil-lead-badge" style="margin-bottom:12px;">VIDEO PROFIL</span>
                <h2 style="font:700 clamp(24px, 3.5vw, 36px) 'Playfair Display', serif;color:var(--ink);margin:0 0 6px;line-height:1.2;">
                    Unit Kegiatan Kerohanian Islam
                </h2>
                <div style="font:700 22px 'Poppins', sans-serif;color:var(--pri);letter-spacing:0.04em;">
                    (UKKI) UNNES
                </div>
            </div>

            <!-- Paragraf Pengantar & Lead Text -->
            <p class="profil-text-lead">
                Unit Kegiatan Kerohanian Islam (UKKI) merupakan salah satu wadah pengembangan kegiatan keislaman di lingkungan Universitas Negeri Semarang (UNNES). UKKI hadir sebagai ruang bagi mahasiswa untuk belajar, berproses, membangun kebersamaan, serta berkontribusi dalam berbagai kegiatan yang berlandaskan nilai-nilai Islam.
            </p>

            <p class="profil-text-body">
                Melalui berbagai program dan kegiatan, UKKI berupaya menciptakan lingkungan kampus yang mendukung pengembangan potensi mahasiswa, baik dalam aspek keislaman, akademik, sosial, maupun kepemimpinan:
            </p>

            <!-- 4 Fokus Pengembangan Potensi (Inline Feature Chips) -->
            <div class="profil-focus-chips" aria-label="4 Aspek Pengembangan Potensi">
                <div class="profil-chip">
                    <span class="profil-chip-icon">✦</span>
                    <span>Aspek Keislaman</span>
                </div>
                <div class="profil-chip">
                    <span class="profil-chip-icon">✦</span>
                    <span>Aspek Akademik</span>
                </div>
                <div class="profil-chip">
                    <span class="profil-chip-icon">✦</span>
                    <span>Aspek Sosial</span>
                </div>
                <div class="profil-chip">
                    <span class="profil-chip-icon">✦</span>
                    <span>Aspek Kepemimpinan</span>
                </div>
            </div>

            <!-- Zona Sorotan: Video Profil UKKI -->
            <div class="profil-video-info-panel">
                <div class="profil-video-panel-header">
                    <div class="profil-video-panel-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polygon points="23 7 16 12 23 17 23 7"></polygon>
                            <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                        </svg>
                    </div>
                    <h3 class="profil-video-panel-title">Video Profil UKKI</h3>
                </div>

                <p class="profil-text-body" style="margin-bottom:12px;">
                    Video profil ini menjadi sarana untuk memperkenalkan UKKI secara lebih dekat kepada civitas akademika dan masyarakat umum. Di dalamnya, terdapat gambaran mengenai identitas, visi dan misi, kegiatan, serta berbagai aktivitas yang menjadi bagian dari perjalanan UKKI di lingkungan universitas.
                </p>

                <!-- Tombol Navigasi Menonton Video di Atas -->
                <div>
                    <a href="#video-profil" class="profil-scroll-up-pill" onclick="document.getElementById('video-profil')?.scrollIntoView({behavior:'smooth'}); return false;">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <line x1="12" y1="19" x2="12" y2="5"></line>
                            <polyline points="5 12 12 5 19 12"></polyline>
                        </svg>
                        <span>Saksikan video profil UKKI melalui video di atas</span>
                    </a>
                </div>

                <p class="profil-text-body" style="margin-bottom:0;">
                    Melalui video profil ini, diharapkan mahasiswa dan civitas akademika dapat mengenal lebih jauh peran UKKI sebagai wadah pengembangan diri dan kegiatan keislaman di tingkat universitas.
                </p>
            </div>

            <!-- Komitmen Bersama & Slogan Gerakan -->
            <div class="profil-closing-banner">
                <p class="profil-closing-quote">
                    &ldquo;Mari bertumbuh bersama, berkontribusi dalam kebaikan, dan menghadirkan nilai-nilai Islam di lingkungan kampus.&rdquo;
                </p>
                <div class="profil-slogan-stamp">
                    <span class="profil-slogan-label">Slogan Gerakan</span>
                    <span style="color:var(--line);">|</span>
                    <span class="profil-slogan-val">SATUKAN SINERGI SELARASKAN AKSI</span>
                </div>
            </div>

        </article>

    </div>
</section>

@include('layouts.footer')
