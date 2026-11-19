@include('layouts.header')

<main id="main-content">
    <!-- Page Header Hero Banner -->
    <div class="pgh">
        <div class="wrap">
            <nav aria-label="Breadcrumb" style="font-size:13px;opacity:0.8;margin-bottom:12px;">
                <a href="/beranda" style="text-decoration:underline;">Beranda</a> &rsaquo; <span>Donasi Dakwah</span>
            </nav>
            <h1>Donasi Dakwah UKKI UNNES</h1>
            <p>Dukung operasional syiar Islam, pembinaan mahasiswa muslim, dan kegiatan sosial keumatan di lingkungan Universitas Negeri Semarang.</p>
        </div>
    </div>

    <!-- Main Content Section -->
    <section class="s" style="padding-top: 36px;">
        <div class="wrap">

            <!-- Ayat / Hadits Inspiratif Card -->
            <div class="dns-verse-card">
                <div class="dns-verse-icon" aria-hidden="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15h2v-6h-2v6zm0-8h2V7h-2v2z"/>
                    </svg>
                </div>
                <div>
                    <blockquote class="dns-verse-text">
                        &ldquo;Perumpamaan orang yang menginfakkan hartanya di jalan Allah seperti sebutir biji yang menumbuhkan tujuh tangkai, pada setiap tangkai ada seratus biji. Allah melipatgandakan bagi siapa yang Dia kehendaki.&rdquo;
                    </blockquote>
                    <cite class="dns-verse-ref">QS. Al-Baqarah: 261</cite>
                </div>
            </div>

            <!-- Bagian 1: Kanal Rekening & QRIS Resmi -->
            <div class="dns-section-heading">
                <h2 class="dns-section-title">Kanal Pembayaran Donasi</h2>
                <p class="dns-section-subtitle">Silakan pilih metode transfer bank atau scan QRIS sesuai kenyamanan Anda.</p>
            </div>

            <div class="dns-channels-grid">
                
                <!-- Kartu 1: Bank Syariah Indonesia (BSI) - Rekening Utama -->
                <div class="dns-channel-card">
                    <div>
                        <div class="dns-channel-header">
                            <span class="dns-channel-badge">Rekening Utama</span>
                            <span style="font-size:12px;color:var(--mut);">Kode Bank: <strong>451</strong></span>
                        </div>
                        <div class="dns-bank-brand">
                            <div class="dns-bank-logo-wrap" aria-hidden="true">BSI</div>
                            <div>
                                <h3 class="dns-bank-title">Bank Syariah Indonesia</h3>
                                <p class="dns-bank-sub">Rekening Operasional & Syiar Dakwah</p>
                            </div>
                        </div>

                        <!-- Account Number Box -->
                        <div class="dns-acc-box">
                            <div>
                                <small style="display:block;font-size:11px;color:var(--mut);text-transform:uppercase;letter-spacing:1px;margin-bottom:2px;">Nomor Rekening</small>
                                <span class="dns-acc-number" id="bsi-acc-num">7214568901</span>
                            </div>
                            <button type="button" 
                                    class="dns-btn-copy" 
                                    id="btn-copy-bsi"
                                    onclick="copyToClipboard('7214568901', 'btn-copy-bsi', 'BSI')"
                                    aria-label="Salin nomor rekening BSI">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                    <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                </svg>
                                <span class="copy-label">Salin</span>
                            </button>
                        </div>

                        <p class="dns-acc-holder">Atas Nama: <b>UKKI UNNES</b></p>
                        <p style="font-size:13px;color:var(--mut);line-height:1.5;">Gunakan kode unik infaq di digit terakhir jika diperlukan (misal: Rp 100.001) untuk memudahkan verifikasi.</p>
                    </div>

                    <div style="margin-top: 24px; padding-top: 16px; border-top: 1px solid var(--line);">
                        <a href="https://api.whatsapp.com/send/?phone=6281234567890&text=Assalamu%27alaikum%20Bendahara%20UKKI%20UNNES,%20saya%20sudah%20transfer%20donasi%20melalui%20rekening%20BSI.%20Berikut%20bukti%20transfernya." 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="btn" 
                           style="width:100%;justify-content:center;background:var(--pri);color:#fff;">
                            Konfirmasi Transfer BSI
                        </a>
                    </div>
                </div>

                <!-- Kartu 2: QRIS Standar Pembayaran Nasional (Semua Bank & E-Wallet) -->
                <div class="dns-channel-card">
                    <div>
                        <div class="dns-channel-header">
                            <span class="dns-channel-badge">Scan Instan</span>
                            <span style="font-size:12px;color:var(--mut);">NMID: <strong>ID1024356789012</strong></span>
                        </div>
                        
                        <div class="dns-bank-brand">
                            <div class="dns-bank-logo-wrap" style="background:#b91c1c;" aria-hidden="true">QRIS</div>
                            <div>
                                <h3 class="dns-bank-title">QRIS Infaq Dakwah</h3>
                                <p class="dns-bank-sub">Mendukung Seluruh Mobile Banking & E-Wallet</p>
                            </div>
                        </div>

                        <!-- QR Code Container Preview -->
                        <div class="dns-qris-container">
                            <div class="dns-qris-preview" onclick="openQrisModal()" title="Klik untuk memperbesar QRIS">
                                <!-- Clean Vector SVG QRIS Pattern -->
                                <svg width="150" height="150" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Kode QRIS Donasi UKKI UNNES">
                                    <rect width="100" height="100" fill="#ffffff" rx="6"/>
                                    <!-- Corner Finder 1 (Top Left) -->
                                    <rect x="10" y="10" width="24" height="24" fill="#12302b" rx="3"/>
                                    <rect x="14" y="14" width="16" height="16" fill="#ffffff" rx="2"/>
                                    <rect x="18" y="18" width="8" height="8" fill="#00796b" rx="1"/>
                                    <!-- Corner Finder 2 (Top Right) -->
                                    <rect x="66" y="10" width="24" height="24" fill="#12302b" rx="3"/>
                                    <rect x="70" y="14" width="16" height="16" fill="#ffffff" rx="2"/>
                                    <rect x="74" y="18" width="8" height="8" fill="#00796b" rx="1"/>
                                    <!-- Corner Finder 3 (Bottom Left) -->
                                    <rect x="10" y="66" width="24" height="24" fill="#12302b" rx="3"/>
                                    <rect x="14" y="70" width="16" height="16" fill="#ffffff" rx="2"/>
                                    <rect x="18" y="74" width="8" height="8" fill="#00796b" rx="1"/>
                                    <!-- Data Cells Pattern -->
                                    <rect x="40" y="12" width="6" height="6" fill="#12302b"/>
                                    <rect x="52" y="12" width="6" height="6" fill="#12302b"/>
                                    <rect x="40" y="24" width="6" height="6" fill="#12302b"/>
                                    <rect x="48" y="32" width="6" height="6" fill="#00796b"/>
                                    <rect x="12" y="42" width="6" height="6" fill="#12302b"/>
                                    <rect x="24" y="48" width="6" height="6" fill="#12302b"/>
                                    <rect x="36" y="44" width="8" height="8" fill="#12302b"/>
                                    <rect x="56" y="44" width="8" height="8" fill="#00796b"/>
                                    <rect x="72" y="40" width="6" height="6" fill="#12302b"/>
                                    <rect x="82" y="48" width="6" height="6" fill="#12302b"/>
                                    <rect x="44" y="60" width="6" height="6" fill="#12302b"/>
                                    <rect x="54" y="68" width="6" height="6" fill="#12302b"/>
                                    <rect x="40" y="76" width="6" height="6" fill="#00796b"/>
                                    <rect x="50" y="82" width="6" height="6" fill="#12302b"/>
                                    <rect x="68" y="68" width="8" height="8" fill="#12302b"/>
                                    <rect x="80" y="78" width="8" height="8" fill="#12302b"/>
                                </svg>
                                <span style="display:block;font-size:11px;color:var(--mut);margin-top:6px;font-weight:600;">🔍 Klik untuk Memperbesar</span>
                            </div>

                            <p class="dns-acc-holder">Merchant: <b>UKKI UNNES</b></p>

                            <!-- Partner badges -->
                            <div class="dns-qris-partners" aria-label="Mendukung aplikasi pembayaran">
                                <span class="dns-partner-pill">GoPay</span>
                                <span class="dns-partner-pill">OVO</span>
                                <span class="dns-partner-pill">DANA</span>
                                <span class="dns-partner-pill">ShopeePay</span>
                                <span class="dns-partner-pill">BCA Mobile</span>
                                <span class="dns-partner-pill">Livin' Mandiri</span>
                                <span class="dns-partner-pill">BSI Mobile</span>
                                <span class="dns-partner-pill">BRImo</span>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 24px; padding-top: 16px; border-top: 1px solid var(--line); display:flex; gap:10px;">
                        <button type="button" 
                                onclick="openQrisModal()" 
                                class="btn" 
                                style="flex:1;justify-content:center;background:var(--card);color:var(--ink);border:1px solid var(--line);">
                            Lihat QRIS Penuh
                        </button>
                        <a href="https://api.whatsapp.com/send/?phone=6281234567890&text=Assalamu%27alaikum%20Bendahara%20UKKI%20UNNES,%20saya%20sudah%20transfer%20donasi%20via%20QRIS.%20Berikut%20bukti%20pembayarannya." 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="btn" 
                           style="flex:1;justify-content:center;background:var(--pri);color:#fff;">
                            Konfirmasi QRIS
                        </a>
                    </div>
                </div>

            </div>

            <!-- Bagian 2: Program Penyaluran Donasi -->
            <div class="dns-section-heading">
                <h2 class="dns-section-title">Program Penyaluran Infaq & Sedekah</h2>
                <p class="dns-section-subtitle">Dana donasi yang terhimpun disalurkan secara amanah untuk 4 pilar dakwah utama di lingkungan kampus UNNES.</p>
            </div>

            <div class="dns-programs-grid">
                
                <div class="dns-program-card">
                    <div class="dns-program-icon" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                        </svg>
                    </div>
                    <h4>Syiar & Kajian Dakwah Kampus</h4>
                    <p>Penyelenggaraan kajian rutin mingguan, tabligh akbar, siaran podcast dakwah digital, dan bedah buku islami bagi mahasiswa.</p>
                </div>

                <div class="dns-program-card">
                    <div class="dns-program-icon" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h4>Kaderisasi & Pembinaan</h4>
                    <p>Program pelatihan kepemimpinan Islam, mentoring keislaman mahasiswa baru, bimbingan tahsin Al-Qur'an, dan pembinaan karakter muslim.</p>
                </div>

                <div class="dns-program-card">
                    <div class="dns-program-icon" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </div>
                    <h4>Sosial & Jumat Berkah</h4>
                    <p>Pembagian paket makanan Jumat berkah di Kompleks Masjid Ulul Albab UNNES, santunan mahasiswa dhuafa, dan bantuan tanggap darurat.</p>
                </div>

                <div class="dns-program-card">
                    <div class="dns-program-icon" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                            <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                            <line x1="6" y1="6" x2="6.01" y2="6"></line>
                            <line x1="6" y1="18" x2="6.01" y2="18"></line>
                        </svg>
                    </div>
                    <h4>Sarana & Prasarana Dakwah</h4>
                    <p>Pemeliharaan sound system kajian, pengadaan mushaf Al-Qur'an, perpustakaan dakwah, serta operasional kesekretariatan LDK.</p>
                </div>

            </div>

            <!-- Bagian 3: Alur Donasi 3 Langkah -->
            <div class="dns-section-heading">
                <h2 class="dns-section-title">Alur Berdonasi</h2>
                <p class="dns-section-subtitle">Tiga langkah mudah untuk menyalurkan infaq dan sedekah dakwah Anda.</p>
            </div>

            <div class="dns-steps-grid">
                <div class="dns-step-card">
                    <span class="dns-step-num">1</span>
                    <h4>Pilih Kanal Pembayaran</h4>
                    <p>Pilih rekening transfer bank (BSI) atau scan QRIS yang mendukung semua e-wallet dan mobile banking.</p>
                </div>
                <div class="dns-step-card">
                    <span class="dns-step-num">2</span>
                    <h4>Lakukan Transfer Infaq</h4>
                    <p>Kirimkan donasi dengan nominal sesuai keikhlasan dan kemampuan tanpa ada batasan minimal donasi.</p>
                </div>
                <div class="dns-step-card">
                    <span class="dns-step-num">3</span>
                    <h4>Konfirmasi via WhatsApp</h4>
                    <p>Kirimkan bukti transfer kepada Bendahara UKKI agar infaq tercatat secara resmi dalam pembukuan dakwah.</p>
                </div>
            </div>

            <!-- Bagian 4: Call to Action Konfirmasi WhatsApp -->
            <div class="dns-cta-box">
                <div class="dns-cta-content">
                    <h3>Sudah Melakukan Transfer Donasi?</h3>
                    <p>Silakan lakukan konfirmasi ke Bendahara UKKI UNNES agar donasi Anda dapat segera dicatat, didoakan, dan dimasukkan dalam rekapitulasi infaq berkala.</p>
                </div>
                <div>
                    <a href="https://api.whatsapp.com/send/?phone=6281234567890&text=Assalamu%27alaikum%20Bendahara%20UKKI%20UNNES,%20saya%20sudah%20mentransfer%20infaq%20dakwah.%20Berikut%20bukti%20transfernya." 
                       target="_blank" 
                       rel="noopener noreferrer" 
                       class="dns-btn-wa-cta">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.043.072.043.419-.101.824zM12 2C6.477 2 2 6.477 2 12c0 1.891.524 3.662 1.436 5.176L2 22l4.982-1.393C8.423 21.437 10.151 22 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18c-1.637 0-3.161-.485-4.441-1.319l-.318-.206-2.96.828.84-2.884-.226-.339C4.015 14.814 3.5 13.454 3.5 12 3.5 7.313 7.313 3.5 12 3.5c4.686 0 8.5 3.813 8.5 8.5 0 4.687-3.814 8.5-8.5 8.5z"/>
                        </svg>
                        Konfirmasi ke Bendahara
                    </a>
                </div>
            </div>

            <!-- Bagian 5: Pertanyaan Umum (FAQ) -->
            <div class="dns-section-heading">
                <h2 class="dns-section-title">Pertanyaan Umum Seputar Donasi</h2>
                <p class="dns-section-subtitle">Jawaban atas hal-hal yang sering ditanyakan oleh para muhsinin dan donatur dakwah.</p>
            </div>

            <div class="dns-faq-list">
                
                <details class="dns-faq-item">
                    <summary class="dns-faq-summary">
                        <span>Apakah ada batas nominal minimal dalam berdonasi?</span>
                        <svg class="dns-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </summary>
                    <div class="dns-faq-body">
                        Tidak ada batas minimal donasi. Berapapun nominal yang Anda infaqkan dengan niat ikhlas lillahi ta'ala sangat berarti untuk mendukung keberlangsungan roda dakwah Islam di lingkungan kampus UNNES.
                    </div>
                </details>

                <details class="dns-faq-item">
                    <summary class="dns-faq-summary">
                        <span>Bagaimana transparansi penyaluran dana donasi UKKI UNNES?</span>
                        <svg class="dns-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </summary>
                    <div class="dns-faq-body">
                        Laporan keuangan dan rekapitulasi penyaluran dana donasi dikelola secara profesional dan diaudit secara internal. Rekap infaq dilaporkan secara berkala dalam forum pertanggungjawaban serta kanal informasi resmi UKKI UNNES.
                    </div>
                </details>

                <details class="dns-faq-item">
                    <summary class="dns-faq-summary">
                        <span>Bisakah saya berdonasi secara anonim (Hamba Allah)?</span>
                        <svg class="dns-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </summary>
                    <div class="dns-faq-body">
                        Sangat bisa. Anda cukup mengonfirmasikan kepada admin/bendahara bahwa donasi disalurkan atas nama "Hamba Allah". Kami menghormati sepenuhnya privasi setiap muhsinin.
                    </div>
                </details>

                <details class="dns-faq-item">
                    <summary class="dns-faq-summary">
                        <span>Apakah menerima donasi dalam bentuk barang atau sarana dakwah?</span>
                        <svg class="dns-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </summary>
                    <div class="dns-faq-body">
                        Ya, kami juga menerima wakaf dan donasi berupa perlengkapan dakwah seperti sound system, karpet kajian, buku perpustakaan, atau peralatan kesekretariatan. Silakan hubungi kami via menu Kontak atau langsung ke sekretariat UKKI di Kompleks Masjid Ulul Albab UNNES.
                    </div>
                </details>

            </div>

        </div>
    </section>
</main>

<!-- Modal Dialog QRIS Fullscreen Preview (Native HTML5 Dialog) -->
<dialog id="qrisModal" class="dns-dialog" aria-labelledby="qrisModalTitle">
    <div class="dns-dialog-header">
        <h3 id="qrisModalTitle">QRIS Infaq Dakwah UKKI UNNES</h3>
        <button type="button" class="dns-dialog-close" onclick="closeQrisModal()" aria-label="Tutup pratinjau QRIS">✕</button>
    </div>
    <div class="dns-dialog-body">
        <div style="background:#fff;padding:20px;border-radius:18px;display:inline-block;box-shadow:0 4px 20px rgba(0,0,0,0.1);margin-bottom:16px;">
            <svg width="240" height="240" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Kode QRIS Pembayaran UKKI UNNES">
                <rect width="100" height="100" fill="#ffffff" rx="6"/>
                <rect x="10" y="10" width="24" height="24" fill="#12302b" rx="3"/>
                <rect x="14" y="14" width="16" height="16" fill="#ffffff" rx="2"/>
                <rect x="18" y="18" width="8" height="8" fill="#00796b" rx="1"/>
                <rect x="66" y="10" width="24" height="24" fill="#12302b" rx="3"/>
                <rect x="70" y="14" width="16" height="16" fill="#ffffff" rx="2"/>
                <rect x="74" y="18" width="8" height="8" fill="#00796b" rx="1"/>
                <rect x="10" y="66" width="24" height="24" fill="#12302b" rx="3"/>
                <rect x="14" y="70" width="16" height="16" fill="#ffffff" rx="2"/>
                <rect x="18" y="74" width="8" height="8" fill="#00796b" rx="1"/>
                <rect x="40" y="12" width="6" height="6" fill="#12302b"/>
                <rect x="52" y="12" width="6" height="6" fill="#12302b"/>
                <rect x="40" y="24" width="6" height="6" fill="#12302b"/>
                <rect x="48" y="32" width="6" height="6" fill="#00796b"/>
                <rect x="12" y="42" width="6" height="6" fill="#12302b"/>
                <rect x="24" y="48" width="6" height="6" fill="#12302b"/>
                <rect x="36" y="44" width="8" height="8" fill="#12302b"/>
                <rect x="56" y="44" width="8" height="8" fill="#00796b"/>
                <rect x="72" y="40" width="6" height="6" fill="#12302b"/>
                <rect x="82" y="48" width="6" height="6" fill="#12302b"/>
                <rect x="44" y="60" width="6" height="6" fill="#12302b"/>
                <rect x="54" y="68" width="6" height="6" fill="#12302b"/>
                <rect x="40" y="76" width="6" height="6" fill="#00796b"/>
                <rect x="50" y="82" width="6" height="6" fill="#12302b"/>
                <rect x="68" y="68" width="8" height="8" fill="#12302b"/>
                <rect x="80" y="78" width="8" height="8" fill="#12302b"/>
            </svg>
        </div>
        <p style="font-size:14px;font-weight:700;color:var(--ink);margin-bottom:4px;">NMID: ID1024356789012</p>
        <p style="font-size:13px;color:var(--mut);margin-bottom:18px;">A.N. UKKI UNNES - Standar Pembayaran Nasional</p>
        <button type="button" class="btn" onclick="closeQrisModal()" style="width:100%;justify-content:center;">Tutup Pratinjau</button>
    </div>
</dialog>

<script>
    // Copy to Clipboard Utility with Feedback & Toast
    function copyToClipboard(text, btnId, bankName) {
        if (navigator.clipboard && window.isSecureContext) {
            navigator.clipboard.writeText(text).then(function() {
                showCopiedFeedback(btnId, bankName);
            }).catch(function() {
                fallbackCopy(text, btnId, bankName);
            });
        } else {
            fallbackCopy(text, btnId, bankName);
        }
    }

    function fallbackCopy(text, btnId, bankName) {
        var textArea = document.createElement("textarea");
        textArea.value = text;
        textArea.style.position = "fixed";
        textArea.style.left = "-9999px";
        document.body.appendChild(textArea);
        textArea.focus();
        textArea.select();
        try {
            document.execCommand('copy');
            showCopiedFeedback(btnId, bankName);
        } catch (err) {
            if (typeof toast === 'function') {
                toast('Gagal menyalin nomor rekening');
            }
        }
        document.body.removeChild(textArea);
    }

    function showCopiedFeedback(btnId, bankName) {
        var btn = document.getElementById(btnId);
        if (btn) {
            btn.classList.add('copied');
            var label = btn.querySelector('.copy-label');
            if (label) label.textContent = 'Tersalin!';
            setTimeout(function() {
                btn.classList.remove('copied');
                if (label) label.textContent = 'Salin';
            }, 2500);
        }
        if (typeof toast === 'function') {
            toast('Nomor rekening ' + bankName + ' berhasil disalin!');
        }
    }

    // Modal Dialog Controls (HTML5 <dialog>)
    var qrisDialog = document.getElementById('qrisModal');

    function openQrisModal() {
        if (qrisDialog && typeof qrisDialog.showModal === 'function') {
            qrisDialog.showModal();
        }
    }

    function closeQrisModal() {
        if (qrisDialog && typeof qrisDialog.close === 'function') {
            qrisDialog.close();
        }
    }

    // Close on clicking backdrop
    if (qrisDialog) {
        qrisDialog.addEventListener('click', function(e) {
            if (e.target === qrisDialog) {
                closeQrisModal();
            }
        });
    }
</script>

@include('layouts.footer')
