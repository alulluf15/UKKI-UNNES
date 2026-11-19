@include('layouts.header')

<?php
// Helper untuk mencari foto barang dengan format file apa pun (.png, .jpg, .jpeg, .webp)
if (!function_exists('getInventoryItemImg')) {
    function getInventoryItemImg($id) {
        $extensions = ['png', 'jpg', 'jpeg', 'webp'];
        foreach ($extensions as $ext) {
            $rel = "assets/img/inventaris/item-{$id}.{$ext}";
            if (file_exists(public_path($rel))) {
                return "/{$rel}";
            }
        }
        return null;
    }
}

// Daftar 24 Inventaris Resmi UKKI UNNES
$inventoryItems = [
    [
        'id' => 1,
        'name' => 'Sound System (Non Baterai)',
        'price' => 'Rp 35.000,-/hari',
        'category' => 'audio',
        'img' => '/assets/img/inventaris/item-1.jpg',
    ],
    [
        'id' => 2,
        'name' => 'Mic Wireless',
        'price' => 'Rp 20.000,-/2 mic/hari',
        'category' => 'audio',
        'img' => '/assets/img/inventaris/item-2.jpg',
    ],
    [
        'id' => 3,
        'name' => 'Tripod',
        'price' => 'Rp 10.000,-/hari',
        'category' => 'display',
        'img' => '/assets/img/inventaris/item-3.jpg',
    ],
    [
        'id' => 4,
        'name' => 'Roll Kabel',
        'price' => 'Rp 5.000,-/hari',
        'category' => 'listrik',
        'img' => '/assets/img/inventaris/item-4.jpg',
    ],
    [
        'id' => 5,
        'name' => 'Banner (2 ukuran kecil / 1 ukuran besar)',
        'price' => 'Rp 5.000,-/hari',
        'category' => 'display',
        'img' => '/assets/img/inventaris/item-5.jpg',
    ],
    [
        'id' => 6,
        'name' => 'Bendera Merah Putih',
        'price' => 'Rp 5.000,-/hari',
        'category' => 'atribut',
        'img' => '/assets/img/inventaris/item-6.jpg',
    ],
    [
        'id' => 7,
        'name' => 'Stand Bendera',
        'price' => 'Rp 5.000,-/hari',
        'category' => 'atribut',
        'img' => '/assets/img/inventaris/item-7.jpg',
    ],
    [
        'id' => 8,
        'name' => 'Tiang Bendera (Tinggi 149cm)',
        'price' => 'Rp 2.000,-/hari',
        'category' => 'atribut',
        'img' => '/assets/img/inventaris/item-8.jpg',
    ],
    [
        'id' => 9,
        'name' => 'Tikar Lipat Kain',
        'price' => 'Rp 35.000,-/hari',
        'category' => 'perlengkapan',
        'img' => '/assets/img/inventaris/item-9.jpg',
    ],
    [
        'id' => 10,
        'name' => 'Palu Sidang',
        'price' => 'Rp 5.000,-/hari',
        'category' => 'atribut',
        'img' => '/assets/img/inventaris/item-10.jpg',
    ],
    [
        'id' => 11,
        'name' => 'Meja Kayu',
        'price' => 'Rp 5.000,-/hari',
        'category' => 'perlengkapan',
        'img' => '/assets/img/inventaris/item-11.jpg',
    ],
    [
        'id' => 12,
        'name' => 'Stand Banner',
        'price' => 'Rp 5.000,-/hari',
        'category' => 'display',
        'img' => '/assets/img/inventaris/item-12.jpg',
    ],
    [
        'id' => 13,
        'name' => 'Hiasan Meja (Bendera kecil)',
        'price' => 'Rp 2.000,-/hari',
        'category' => 'atribut',
        'img' => '/assets/img/inventaris/item-13.jpg',
    ],
    [
        'id' => 14,
        'name' => 'Taplak (Motif/Polos)',
        'price' => 'Rp 3.000,-/hari',
        'category' => 'perlengkapan',
        'img' => '/assets/img/inventaris/item-14.jpg',
    ],
    [
        'id' => 15,
        'name' => 'Piring',
        'price' => 'Rp 1.000,-/hari',
        'category' => 'konsumsi',
        'img' => '/assets/img/inventaris/item-15.jpg',
    ],
    [
        'id' => 16,
        'name' => 'Termos Air Besar',
        'price' => 'Rp 10.000,-/hari',
        'category' => 'konsumsi',
        'img' => '/assets/img/inventaris/item-16.jpg',
    ],
    [
        'id' => 17,
        'name' => 'Termos Nasi (Rice Bucket)',
        'price' => 'Rp 10.000,-/hari',
        'category' => 'konsumsi',
        'img' => '/assets/img/inventaris/item-17.jpg',
    ],
    [
        'id' => 18,
        'name' => 'Panci (Ukuran Kecil / Besar)',
        'price' => 'Rp 4.000, - 6.000,-/hari',
        'category' => 'konsumsi',
        'img' => '/assets/img/inventaris/item-18.jpg',
    ],
    [
        'id' => 19,
        'name' => 'Galon',
        'price' => 'Rp 3.000,-/hari',
        'category' => 'konsumsi',
        'img' => '/assets/img/inventaris/item-19.jpg',
    ],
    [
        'id' => 20,
        'name' => 'Pompa Galon (Elektrik/Manual)',
        'price' => 'Rp 3.000,-/hari',
        'category' => 'konsumsi',
        'img' => '/assets/img/inventaris/item-20.jpg',
    ],
    [
        'id' => 21,
        'name' => 'Alat Bakaran Sate',
        'price' => 'Rp 5.000,-/hari',
        'category' => 'konsumsi',
        'img' => '/assets/img/inventaris/item-21.jpg',
    ],
    [
        'id' => 22,
        'name' => 'Nampan Plastik',
        'price' => 'Rp 3.000,-/hari',
        'category' => 'konsumsi',
        'img' => '/assets/img/inventaris/item-22.jpg',
    ],
    [
        'id' => 23,
        'name' => 'Gas Portabel',
        'price' => 'Rp 5.000,-/hari',
        'category' => 'konsumsi',
        'img' => '/assets/img/inventaris/item-23.jpg',
    ],
    [
        'id' => 24,
        'name' => 'Gelas (Plastik/Kaca)',
        'price' => 'Rp 500,-/hari',
        'category' => 'konsumsi',
        'img' => '/assets/img/inventaris/item-24.jpg',
    ],
];
?>

<main id="main-content">
    <!-- Page Header Hero Banner -->
    <div class="pgh">
        <div class="wrap">
            <nav aria-label="Breadcrumb" style="font-size:13px;opacity:0.8;margin-bottom:12px;">
                <a href="/beranda" style="text-decoration:underline;">Beranda</a> &rsaquo; <span>Pinjaman Inventaris UKKI</span>
            </nav>
            <h1>Pinjaman Inventaris UKKI</h1>
            <p>Layanan peminjaman alat inventaris untuk mendukung kelancaran kegiatan dakwah dan kemahasiswaan di lingkungan Universitas Negeri Semarang.</p>
        </div>
    </div>

    <!-- Main Content Section -->
    <section class="s" style="padding-top: 36px;">
        <div class="wrap">

            <!-- Tab Navigation (Modern Web Accessible Tablist) -->
            <div role="tablist" class="inv-tablist" aria-label="Navigasi Peminjaman Inventaris">
                <!-- Tab 1: Cara & SOP (Default Terbuka) -->
                <button type="button" 
                        role="tab" 
                        id="tab-sop" 
                        aria-selected="true" 
                        aria-controls="panel-sop" 
                        class="inv-tab-btn"
                        tabindex="0">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                    Cara & SOP Peminjaman
                </button>

                <!-- Tab 2: Barang & Pinjaman Inventaris -->
                <button type="button" 
                        role="tab" 
                        id="tab-pinjaman" 
                        aria-selected="false" 
                        aria-controls="panel-pinjaman" 
                        class="inv-tab-btn"
                        tabindex="-1">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                        <line x1="12" y1="22.08" x2="12" y2="12"></line>
                    </svg>
                    Daftar Barang Inventaris
                </button>
            </div>

            <!-- ==========================================
                 PANEL 1 (DEFAULT AKTIF): CARA DAN SOP PEMINJAMAN
                 ========================================== -->
            <section role="tabpanel" id="panel-sop" aria-labelledby="tab-sop" class="inv-tabpanel" tabindex="0">
                
                <!-- Header SOP -->
                <div style="margin-bottom: 26px;">
                    <h2 class="inv-section-title">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="color:var(--pri);">
                            <path d="M9 11l3 3L22 4"></path>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg>
                        CARA DAN SOP PEMINJAMAN
                    </h2>
                    <p class="inv-section-desc">Silahkan bisa menghubungi CP yang tersedia yaa! Mohon perhatikan alur dan ketentuan di bawah ini untuk menjaga kebermanfaatan dan kelestarian inventaris dakwah UKKI UNNES.</p>
                </div>

                <!-- 4 Steps Flow -->
                <div class="inv-steps-grid">
                    <div class="inv-step-card">
                        <span class="inv-step-num">1</span>
                        <h3 class="inv-step-heading">Hubungi CP & Pemesanan</h3>
                        <p class="inv-step-text">Silahkan bisa menghubungi CP yang tersedia yaa! Cek ketersediaan barang dan tanggal pemakaian.</p>
                    </div>
                    <div class="inv-step-card">
                        <span class="inv-step-num">2</span>
                        <h3 class="inv-step-heading">Surat & Identitas</h3>
                        <p class="inv-step-text">Kirimkan berkas digital surat peminjaman (jika atas nama lembaga) dan siapkan KTM/KTP asli untuk jaminan.</p>
                    </div>
                    <div class="inv-step-card">
                        <span class="inv-step-num">3</span>
                        <h3 class="inv-step-heading">Ambil & Rawat Baik</h3>
                        <p class="inv-step-text">Pengambilan barang di Sekretariat UKKI. Wajib merawat dan menjaga barang yang disewa dengan baik.</p>
                    </div>
                    <div class="inv-step-card">
                        <span class="inv-step-num">4</span>
                        <h3 class="inv-step-heading">Kembalikan & Pembayaran</h3>
                        <p class="inv-step-text">Hubungi CP sebelum mengembalikan (maks 1x24 jam). Pembayaran/infaq dilakukan ketika sudah mengembalikan barang.</p>
                    </div>
                </div>

                <!-- 8 Butir SOP yang Harus Kamu Perhatikan -->
                <div style="margin-top: 10px;">
                    <h3 style="font-size: 20px; font-weight: 700; margin-bottom: 18px; color: var(--ink);">
                        SOP yang harus kamu perhatikan :
                    </h3>

                    <div class="inv-sop-grid">
                        
                        <!-- Poin 1 -->
                        <div class="inv-sop-item">
                            <div class="inv-sop-icon" aria-hidden="true">📄</div>
                            <div class="inv-sop-content">
                                <h4 class="inv-sop-title">Surat Peminjaman Lembaga</h4>
                                <p class="inv-sop-desc">Untuk yang bukan peminjaman atas nama pribadi sertakan surat peminjaman terlebih dahulu (berkas digital).</p>
                            </div>
                        </div>

                        <!-- Poin 2 -->
                        <div class="inv-sop-item">
                            <div class="inv-sop-icon" aria-hidden="true">🪪</div>
                            <div class="inv-sop-content">
                                <h4 class="inv-sop-title">Jaminan Identitas</h4>
                                <p class="inv-sop-desc">Meninggalkan KTM/KTP.</p>
                            </div>
                        </div>

                        <!-- Poin 3: Batas waktu & Denda -->
                        <div class="inv-sop-item alert-danger">
                            <div class="inv-sop-icon" style="background:rgba(239, 68, 68, 0.15);color:#ef4444;" aria-hidden="true">⏱️</div>
                            <div class="inv-sop-content">
                                <h4 class="inv-sop-title" style="color:#b91c1c;">Batas Waktu Pengembalian</h4>
                                <p class="inv-sop-desc">Batas waktu pengembalian 1x24 jam. Jika melebihi batas waktu akan dikenakan denda sebesar <strong>Rp 2.000,-</strong></p>
                            </div>
                        </div>

                        <!-- Poin 4 -->
                        <div class="inv-sop-item">
                            <div class="inv-sop-icon" aria-hidden="true">📞</div>
                            <div class="inv-sop-content">
                                <h4 class="inv-sop-title">Konfirmasi Pengembalian</h4>
                                <p class="inv-sop-desc">Menghubungi CP sebelum mengembalikan barang.</p>
                            </div>
                        </div>

                        <!-- Poin 5 -->
                        <div class="inv-sop-item">
                            <div class="inv-sop-icon" aria-hidden="true">🛡️</div>
                            <div class="inv-sop-content">
                                <h4 class="inv-sop-title">Perawatan Barang</h4>
                                <p class="inv-sop-desc">Merawat dan menjaga barang yang disewa dengan baik.</p>
                            </div>
                        </div>

                        <!-- Poin 6 -->
                        <div class="inv-sop-item alert-danger">
                            <div class="inv-sop-icon" style="background:rgba(239, 68, 68, 0.15);color:#ef4444;" aria-hidden="true">⚠️</div>
                            <div class="inv-sop-content">
                                <h4 class="inv-sop-title" style="color:#b91c1c;">Ganti Rugi Kerusakan / Kehilangan</h4>
                                <p class="inv-sop-desc">Jika barang yang disewa rusak/hilang, maka penyewa wajib mengganti barang tersebut.</p>
                            </div>
                        </div>

                        <!-- Poin 7: LDF & LDJ Infaq -->
                        <div class="inv-sop-item alert-special">
                            <div class="inv-sop-icon" style="background:rgba(16, 185, 129, 0.15);color:#059669;" aria-hidden="true">🤝</div>
                            <div class="inv-sop-content">
                                <h4 class="inv-sop-title" style="color:#047857;">Infaq Khusus LDF & LDJ</h4>
                                <p class="inv-sop-desc">Peminjam khusus LDF dan LDJ Unnes dapat membayarkan infaq seikhlasnya untuk inventarisasi.</p>
                            </div>
                        </div>

                        <!-- Poin 8 -->
                        <div class="inv-sop-item">
                            <div class="inv-sop-icon" aria-hidden="true">💳</div>
                            <div class="inv-sop-content">
                                <h4 class="inv-sop-title">Waktu Pembayaran</h4>
                                <p class="inv-sop-desc">Pembayaran dapat dilakukan ketika sudah mengembalikan barang.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Call to action di SOP -->
                <div style="background:var(--card);border:1px solid var(--line);border-radius:20px;padding:26px 30px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:20px;margin-top:24px;">
                    <div>
                        <h4 style="font-size:18px;font-weight:700;color:var(--ink);margin-bottom:4px;">Langkah Selanjutnya</h4>
                        <p style="color:var(--mut);font-size:14px;">Silakan cek daftar barang yang tersedia atau langsung konsultasikan dengan CP.</p>
                    </div>
                    <div style="display:flex;gap:12px;flex-wrap:wrap;">
                        <button type="button" class="btn" onclick="goToInventoryTab()" style="background:var(--card);color:var(--ink);border:1px solid var(--line);">
                            📦 Cek Barang Tersedia
                        </button>
                        <a href="https://api.whatsapp.com/send/?phone=%2B6281332672708&text=Assalamu%27alaikum%20Admin%20Inventaris%20UKKI,%20saya%20sudah%20membaca%20SOP%20dan%20ingin%20meminjam%20alat&type=phone_number&app_absent=0" 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="btn-wa">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.043.072.043.419-.101.824zM12 2C6.477 2 2 6.477 2 12c0 1.891.524 3.662 1.436 5.176L2 22l4.982-1.393C8.423 21.437 10.151 22 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18c-1.637 0-3.161-.485-4.441-1.319l-.318-.206-2.96.828.84-2.884-.226-.339C4.015 14.814 3.5 13.454 3.5 12 3.5 7.313 7.313 3.5 12 3.5c4.686 0 8.5 3.813 8.5 8.5 0 4.687-3.814 8.5-8.5 8.5z"/></svg>
                            Hubungi CP (0813-3267-2708)
                        </a>
                    </div>
                </div>

            </section>

            <!-- ==========================================
                 PANEL 2: DAFTAR BARANG INVENTARIS
                 ========================================== -->
            <section role="tabpanel" id="panel-pinjaman" aria-labelledby="tab-pinjaman" class="inv-tabpanel" hidden tabindex="0">
                
                <div style="margin-bottom: 24px;">
                    <div class="inv-toolbar">
                        <div>
                            <h2 class="inv-section-title">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="color:var(--pri);">
                                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                </svg>
                                Barang-Barang yang Tersedia
                            </h2>
                            <p class="inv-section-desc">Peralatan audio, kelistrikan, bendera, dan perlengkapan kegiatan dakwah yang siap dipinjam.</p>
                        </div>

                        <!-- Live Search & Category Filter Landmark -->
                        <search class="inv-search-box">
                            <label for="inv-search-input" class="sr-only" style="position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0;">Cari barang inventaris</label>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="color:var(--mut);">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                            <input type="search" id="inv-search-input" placeholder="Cari barang inventaris..." oninput="filterInventory()">
                        </search>
                    </div>

                    <!-- Cards Grid (24 Barang Resmi Langsung Tampil) -->
                    <div class="inv-cards-grid" id="inventory-grid">
                        @foreach($inventoryItems as $item)
                            @php
                                $itemImg = getInventoryItemImg($item['id']);
                            @endphp
                            <article class="inv-item-card" data-category="{{ $item['category'] }}" data-name="{{ strtolower($item['name']) }}">
                                <div class="inv-item-thumb">
                                    @if($itemImg)
                                        <img src="{{ $itemImg }}" alt="{{ $item['name'] }}" loading="lazy">
                                    @else
                                        <div class="inv-thumb-placeholder" aria-label="Foto barang nomor {{ $item['id'] }}">
                                            <span class="inv-item-num">No. {{ $item['id'] }}</span>
                                            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                                <polyline points="21 15 16 10 5 21"></polyline>
                                            </svg>
                                            <span style="font-size:11px;color:var(--mut);margin-top:6px;font-weight:600;">Foto Menyusul</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="inv-item-body">
                                    <h3 class="inv-item-name">{{ $item['name'] }}</h3>
                                    <span class="inv-item-price">{{ $item['price'] }}</span>
                                    @php
                                        $waItemMsg = "Assalamu'alaikum Admin Inventaris UKKI, saya ingin meminjam " . $item['name'] . ". Apakah alat ini tersedia?";
                                        $waItemUrl = "https://api.whatsapp.com/send/?phone=%2B6281332672708&text=" . rawurlencode($waItemMsg) . "&type=phone_number&app_absent=0";
                                    @endphp
                                    <a href="{{ $waItemUrl }}" 
                                       target="_blank" 
                                       rel="noopener noreferrer" 
                                       class="btn-pinjam-card"
                                       aria-label="Hubungi WhatsApp untuk pinjam {{ $item['name'] }}">
                                        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.043.072.043.419-.101.824zM12 2C6.477 2 2 6.477 2 12c0 1.891.524 3.662 1.436 5.176L2 22l4.982-1.393C8.423 21.437 10.151 22 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18c-1.637 0-3.161-.485-4.441-1.319l-.318-.206-2.96.828.84-2.884-.226-.339C4.015 14.814 3.5 13.454 3.5 12 3.5 7.313 7.313 3.5 12 3.5c4.686 0 8.5 3.813 8.5 8.5 0 4.687-3.814 8.5-8.5 8.5z"/>
                                        </svg>
                                        Hubungi WhatsApp
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>

                    <!-- No Results Notice -->
                    <div id="no-inventory-match" style="display:none;text-align:center;padding:50px 20px;background:var(--card);border-radius:20px;border:1px dashed var(--line);margin-bottom:30px;">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="color:var(--mut);margin-bottom:12px;" aria-hidden="true">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                        <h3 style="font-size:18px;margin-bottom:6px;">Barang Tidak Ditemukan</h3>
                        <p style="color:var(--mut);font-size:14px;max-width:400px;margin:0 auto 16px;">Nama barang atau kategori yang Anda cari belum ada di daftar. Anda dapat langsung bertanya ke CP ketersediaan barang lainnya.</p>
                        <a href="https://api.whatsapp.com/send/?phone=%2B6281332672708&text=Assalamu%27alaikum%20Admin%20Inventaris%20UKKI,%20apakah%20tersedia...&type=phone_number&app_absent=0" target="_blank" rel="noopener noreferrer" class="btn">
                            Tanyakan Langsung ke CP
                        </a>
                    </div>
                </div>

            </section>

        </div>
    </section>
</main>

<script>
    // Tab Switching Logic (Accessible Keyboard & Pointer Tabs)
    const tabs = Array.from(document.querySelectorAll('[role="tab"]'));
    const panels = Array.from(document.querySelectorAll('[role="tabpanel"]'));

    tabs.forEach((tab, index) => {
        tab.addEventListener('click', () => switchTab(tab));

        // Keyboard Arrow Navigation (Left/Right)
        tab.addEventListener('keydown', (e) => {
            let targetTab = null;
            if (e.key === 'ArrowRight') {
                targetTab = tabs[(index + 1) % tabs.length];
            } else if (e.key === 'ArrowLeft') {
                targetTab = tabs[(index - 1 + tabs.length) % tabs.length];
            }
            if (targetTab) {
                targetTab.focus();
                switchTab(targetTab);
            }
        });
    });

    function switchTab(selectedTab) {
        tabs.forEach(t => {
            const isSelected = (t === selectedTab);
            t.setAttribute('aria-selected', isSelected ? 'true' : 'false');
            t.setAttribute('tabindex', isSelected ? '0' : '-1');
        });

        const targetPanelId = selectedTab.getAttribute('aria-controls');
        panels.forEach(p => {
            if (p.id === targetPanelId) {
                p.removeAttribute('hidden');
            } else {
                p.setAttribute('hidden', '');
            }
        });
    }

    // Helper: Pindah langsung ke Tab Barang Inventaris
    function goToInventoryTab() {
        const inventoryTab = document.getElementById('tab-pinjaman');
        if (inventoryTab) {
            inventoryTab.focus();
            switchTab(inventoryTab);
            inventoryTab.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }

    // Live Search Filtering
    function filterInventory() {
        const input = document.getElementById('inv-search-input');
        const query = input ? input.value.toLowerCase().trim() : '';
        const cards = document.querySelectorAll('#inventory-grid .inv-item-card');
        let visibleCount = 0;

        cards.forEach(card => {
            const searchIndex = card.getAttribute('data-name');
            const matchQuery = (!query || searchIndex.includes(query));

            if (matchQuery) {
                card.style.display = 'flex';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        const noMatchEl = document.getElementById('no-inventory-match');
        if (noMatchEl) {
            noMatchEl.style.display = (visibleCount === 0) ? 'block' : 'none';
        }
    }
</script>

@include('layouts.footer')
