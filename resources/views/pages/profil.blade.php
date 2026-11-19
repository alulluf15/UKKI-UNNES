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

<section class="s" style="padding-top:40px;">
    <div class="wrap">

        <!-- Main Section: Video Profil & Tentang UKKI UNNES -->
        <div class="profil-main-grid">
            
            <!-- Kolom Kiri: Teks Narasi & Identitas Lembaga -->
            <div>
                <span class="profil-lead-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <polygon points="5 3 19 12 5 21 5 3"></polygon>
                    </svg>
                    Video Profil Resmi
                </span>
                <h2 class="profil-title">Unit Kegiatan Kerohanian Islam<br><span style="color:var(--pri);">(UKKI) UNNES</span></h2>
                
                <p class="profil-desc-p">
                    Unit Kegiatan Kerohanian Islam (UKKI) merupakan salah satu wadah pengembangan kegiatan keislaman di lingkungan Universitas Negeri Semarang (UNNES). UKKI hadir sebagai ruang bagi mahasiswa untuk belajar, berproses, membangun kebersamaan, serta berkontribusi dalam berbagai kegiatan yang berlandaskan nilai-nilai Islam.
                </p>
                
                <p class="profil-desc-p">
                    Melalui berbagai program dan kegiatan, UKKI berupaya menciptakan lingkungan kampus yang mendukung pengembangan potensi mahasiswa, baik dalam aspek keislaman, akademik, sosial, maupun kepemimpinan.
                </p>

                <!-- Kutipan & Komitmen Bersama -->
                <div class="profil-quote-card">
                    <div class="profil-quote-text">
                        &ldquo;Mari bertumbuh bersama, berkontribusi dalam kebaikan, dan menghadirkan nilai-nilai Islam di lingkungan kampus.&rdquo;
                    </div>
                    <div class="profil-slogan-wrap">
                        <span class="profil-slogan-label">Slogan Gerakan</span>
                        <span style="color:var(--line);">|</span>
                        <span class="profil-slogan-val">SATUKAN SINERGI SELARASKAN AKSI</span>
                    </div>
                </div>

                <div style="display:flex;gap:12px;margin-top:20px;flex-wrap:wrap;">
                    <a href="/kabinet" class="btn" style="background:var(--pri);color:#fff;">
                        Struktur Kabinet
                    </a>
                    <a href="/departemen" class="btn" style="background:transparent;border:1px solid var(--line);color:var(--ink);">
                        Departemen & Biro
                    </a>
                </div>
            </div>

            <!-- Kolom Kanan: Pemutar Video Profil & Keterangan -->
            <div>
                <div class="profil-video-card">
                    <div class="profil-video-header">
                        <h3 class="profil-video-heading">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="color:var(--pri);" aria-hidden="true">
                                <rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect>
                                <line x1="7" y1="2" x2="7" y2="22"></line>
                                <line x1="17" y1="2" x2="17" y2="22"></line>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <line x1="2" y1="7" x2="7" y2="7"></line>
                                <line x1="2" y1="17" x2="7" y2="17"></line>
                                <line x1="17" y1="17" x2="22" y2="17"></line>
                                <line x1="17" y1="7" x2="22" y2="7"></line>
                            </svg>
                            Video Profil UKKI
                        </h3>
                        <span class="profil-video-badge">
                            <span class="profil-video-badge-dot"></span>
                            Tonton Sekarang
                        </span>
                    </div>

                    <p class="profil-video-desc-top">
                        Video profil ini menjadi sarana untuk memperkenalkan UKKI secara lebih dekat kepada civitas akademika dan masyarakat umum. Di dalamnya, terdapat gambaran mengenai identitas, visi dan misi, kegiatan, serta berbagai aktivitas yang menjadi bagian dari perjalanan UKKI di lingkungan universitas.
                    </p>

                    <!-- Responsive Frame Embed Google Drive Video -->
                    <div class="profil-video-viewport">
                        <iframe 
                            class="profil-video-iframe" 
                            src="https://drive.google.com/file/d/1lBzU7SZDAXJRdnm9N7iYDdWjUHpzl4kn/preview" 
                            allow="autoplay; fullscreen" 
                            allowfullscreen 
                            loading="lazy" 
                            title="Video Profil Resmi UKKI UNNES">
                        </iframe>
                    </div>

                    <!-- Tombol Aksi Video -->
                    <div class="profil-video-actions">
                        <a 
                            href="https://drive.google.com/file/d/1lBzU7SZDAXJRdnm9N7iYDdWjUHpzl4kn/view?t=4.554" 
                            target="_blank" 
                            rel="noopener noreferrer" 
                            class="profil-video-btn profil-video-btn-primary"
                            aria-label="Tonton video layar penuh di tab baru">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                <polyline points="15 3 21 3 21 9"></polyline>
                                <line x1="10" y1="14" x2="21" y2="3"></line>
                            </svg>
                            Buka di Google Drive
                        </a>

                        <button 
                            type="button" 
                            class="profil-video-btn profil-video-btn-secondary" 
                            onclick="navigator.clipboard.writeText('https://drive.google.com/file/d/1lBzU7SZDAXJRdnm9N7iYDdWjUHpzl4kn/view?t=4.554');toast('Tautan video berhasil disalin!');"
                            aria-label="Salin tautan video ke papan klip">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                            </svg>
                            Salin Tautan
                        </button>
                    </div>

                    <p class="profil-video-caption">
                        Melalui video profil ini, diharapkan mahasiswa dan civitas akademika dapat mengenal lebih jauh peran UKKI sebagai wadah pengembangan diri dan kegiatan keislaman di tingkat universitas.
                    </p>
                </div>
            </div>

        </div>

        <!-- Rekomendasi Tambahan 1: 4 Aspek Pengembangan Potensi Mahasiswa -->
        <div style="margin-top:60px;padding-top:40px;border-top:1px solid var(--line);">
            <div style="text-align:center;max-width:680px;margin:0 auto 36px;">
                <span class="profil-lead-badge">Fokus Pembinaan</span>
                <h2 class="ttl" style="font-size:28px;margin-bottom:8px;">4 Aspek Pengembangan Potensi Mahasiswa</h2>
                <p class="lead" style="margin:0 auto;">Komitmen UKKI dalam mendampingi civitas akademika secara seimbang antara wawasan spiritual, keilmuan, sosial, dan kepemimpinan.</p>
            </div>

            <div class="profil-pillars-grid">
                <!-- Pilar 1: Keislaman -->
                <div class="profil-pillar-card">
                    <div class="profil-pillar-icon" style="background:#00796b;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                        </svg>
                    </div>
                    <h3 class="profil-pillar-title">Aspek Keislaman</h3>
                    <p class="profil-pillar-desc">
                        Pembinaan ruhiyah berkelanjutan, pembelajaran Al-Qur'an, pendalaman fiqih ibadah, dan kajian keislaman yang moderat dan rahmatan lil 'alamin.
                    </p>
                </div>

                <!-- Pilar 2: Akademik -->
                <div class="profil-pillar-card">
                    <div class="profil-pillar-icon" style="background:#2563eb;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                            <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                        </svg>
                    </div>
                    <h3 class="profil-pillar-title">Aspek Akademik</h3>
                    <p class="profil-pillar-desc">
                        Mendukung iklim belajar yang prestatif, riset ilmiah mahasiswa, pendampingan studi, serta integrasi nilai etika dan moral dalam dunia akademik.
                    </p>
                </div>

                <!-- Pilar 3: Sosial -->
                <div class="profil-pillar-card">
                    <div class="profil-pillar-icon" style="background:#10b981;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3 class="profil-pillar-title">Aspek Sosial</h3>
                    <p class="profil-pillar-desc">
                        Aksi tanggap bencana, program kepedulian lingkungan kampus, bakti sosial kemasyarakatan, serta pelayanan advokasi kebutuhan mahasiswa muslim.
                    </p>
                </div>

                <!-- Pilar 4: Kepemimpinan -->
                <div class="profil-pillar-card">
                    <div class="profil-pillar-icon" style="background:#f59e0b;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>
                        </svg>
                    </div>
                    <h3 class="profil-pillar-title">Aspek Kepemimpinan</h3>
                    <p class="profil-pillar-desc">
                        Menempa kapasitas manajerial organisasi, komunikasi publik, kepemimpinan berintegritas, dan kaderisasi da'i kampus berakhlak mulia.
                    </p>
                </div>
            </div>
        </div>

        <!-- Rekomendasi Tambahan 2: Visi & Misi UKKI UNNES -->
        <div style="margin-top:60px;padding-top:40px;border-top:1px solid var(--line);">
            <div style="text-align:center;max-width:680px;margin:0 auto 32px;">
                <span class="profil-lead-badge">Arah Langkah Lembaga</span>
                <h2 class="ttl" style="font-size:28px;margin-bottom:8px;">Visi & Misi UKKI UNNES</h2>
                <p class="lead" style="margin:0 auto;">Pedoman dan arah perjuangan Lembaga Dakwah Kampus dalam menghadirkan kontribusi berkelanjutan.</p>
            </div>

            <div class="profil-vismis-grid">
                <!-- Visi Card -->
                <div class="card" style="padding:32px;">
                    <div style="display:inline-flex;align-items:center;gap:8px;background:rgba(0,121,107,0.1);color:var(--pri);padding:5px 12px;border-radius:8px;font:700 12px 'Poppins';margin-bottom:14px;">
                        VISI UTAMA
                    </div>
                    <h3 style="font-size:22px;margin-bottom:14px;color:var(--ink);">Visi Lembaga</h3>
                    <p style="color:var(--ink);font-size:15px;line-height:1.75;opacity:0.95;">
                        &ldquo;Menjadi lembaga dakwah kampus UNNES yang inklusif dan berkelanjutan dalam membina mahasiswa muslim serta menggerakkan dakwah yang relevan, tertata, dan berdampak nyata di lingkungan kampus, masyarakat dan bangsa Indonesia.&rdquo;
                    </p>
                </div>

                <!-- Misi Card -->
                <div class="card" style="padding:32px;">
                    <div style="display:inline-flex;align-items:center;gap:8px;background:rgba(245,158,11,0.1);color:#d97706;padding:5px 12px;border-radius:8px;font:700 12px 'Poppins';margin-bottom:14px;">
                        7 MISI STRATEGIS
                    </div>
                    <h3 style="font-size:22px;margin-bottom:18px;color:var(--ink);">Misi Lembaga</h3>
                    
                    <div class="profil-misi-list">
                        <div class="profil-misi-item">
                            <span class="profil-misi-num">1</span>
                            <span class="profil-misi-text">Memperkuat pembinaan aktivis dakwah kampus UNNES secara berkelanjutan.</span>
                        </div>
                        <div class="profil-misi-item">
                            <span class="profil-misi-num">2</span>
                            <span class="profil-misi-text">Menjaga ukhuwah dan komunikasi internal organisasi.</span>
                        </div>
                        <div class="profil-misi-item">
                            <span class="profil-misi-num">3</span>
                            <span class="profil-misi-text">Mewujudkan tata kelola organisasi yang rapi, terstruktur, dan akuntabel.</span>
                        </div>
                        <div class="profil-misi-item">
                            <span class="profil-misi-num">4</span>
                            <span class="profil-misi-text">Mewujudkan Lembaga Dakwah Kampus yang mandiri secara finansial guna mendukung keberlangsungan dakwah di UNNES.</span>
                        </div>
                        <div class="profil-misi-item">
                            <span class="profil-misi-num">5</span>
                            <span class="profil-misi-text">Mengoptimalkan syiar dakwah dan citra UKKI yang relevan dengan mahasiswa.</span>
                        </div>
                        <div class="profil-misi-item">
                            <span class="profil-misi-num">6</span>
                            <span class="profil-misi-text">Meningkatkan dakwah inklusif yang terencana dan terukur untuk memberi manfaat bagi civitas kampus dan masyarakat.</span>
                        </div>
                        <div class="profil-misi-item">
                            <span class="profil-misi-num">7</span>
                            <span class="profil-misi-text">Mengoptimalkan sinergi lembaga dakwah kampus, civitas akademika, dan pihak terkait agar dakwah kampus berjalan selaras, berkelanjutan, dan berdampak.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rekomendasi Tambahan 3: Sekretariat & Layanan Informasi -->
        <div style="margin-top:60px;margin-bottom:20px;">
            <div class="profil-info-card">
                <div>
                    <span class="profil-lead-badge">Sekretariat Lembaga</span>
                    <h3 style="font-size:24px;margin-bottom:12px;color:var(--ink);">Pusat Kegiatan & Layanan UKKI UNNES</h3>
                    <p style="font-size:14.5px;color:var(--mut);line-height:1.7;margin-bottom:24px;">
                        UKKI berkedudukan resmi di Kompleks Masjid Ulul Albab UNNES sebagai episentrum pembinaan spiritual, kajian keilmuan, dan ruang kolaborasi mahasiswa muslim se-kampus UNNES.
                    </p>

                    <div class="profil-info-item">
                        <div class="profil-info-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div>
                            <div class="profil-info-title">Alamat Sekretariat</div>
                            <p class="profil-info-val">Kompleks Masjid Ulul Albab, Kampus Sekaran, Gunungpati, Kota Semarang, Jawa Tengah 50229</p>
                        </div>
                    </div>

                    <div class="profil-info-item">
                        <div class="profil-info-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <div>
                            <div class="profil-info-title">Jam Pelayanan & Koordinasi</div>
                            <p class="profil-info-val">Senin – Jumat : 09.00 – 17.00 WIB (Kecuali waktu shalat berjamaah)</p>
                        </div>
                    </div>
                </div>

                <div style="background:var(--bg);border:1px solid var(--line);border-radius:18px;padding:24px;text-align:center;">
                    <div style="width:54px;height:54px;border-radius:50%;background:rgba(0,121,107,0.1);color:var(--pri);display:grid;place-items:center;margin:0 auto 14px;">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </div>
                    <h4 style="font:700 16px 'Poppins';margin-bottom:6px;color:var(--ink);">Ingin Berkolaborasi?</h4>
                    <p style="font-size:13.5px;color:var(--mut);margin-bottom:18px;line-height:1.55;">
                        Hubungi kami untuk kolaborasi kegiatan keislaman, audiensi, maupun syiar kampus.
                    </p>
                    <a href="/lainnya" class="btn" style="width:100%;justify-content:center;background:var(--pri);color:#fff;">
                        Hubungi Sekretariat
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

@include('layouts.footer')
