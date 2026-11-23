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
    <section class="s" style="padding-top: 36px; padding-bottom: 70px;">
        <div class="wrap">
            <div class="dns-channels-grid">
                
                <!-- Kartu 1: Bank Rakyat Indonesia (BRI) -->
                <div class="dns-channel-card">
                    <!-- Brand Logo Block BRI -->
                    <div class="dns-brand-block">
                        <div class="dns-brand-main-row">
                            <!-- Official Stylized Outline Emblem BRI -->
                            <svg width="44" height="44" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Logo Bank BRI">
                                <rect x="5" y="5" width="90" height="90" rx="22" stroke="#00529C" stroke-width="9" fill="none"/>
                                <path d="M28 24V76" stroke="#00529C" stroke-width="9" stroke-linecap="round"/>
                                <path d="M28 24H44C54 24 60 30 60 38C60 46 54 50 44 50H28" stroke="#00529C" stroke-width="9" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M28 50H46C56 50 62 56 62 64C62 72 56 76 46 76H28" stroke="#00529C" stroke-width="9" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M48 50L70 76" stroke="#00529C" stroke-width="9" stroke-linecap="round"/>
                            </svg>
                            <span class="dns-brand-acronym bri-blue">BRI</span>
                        </div>
                        <div class="dns-brand-fullname bri-blue">Bank Rakyat Indonesia</div>
                    </div>

                    <!-- 2 Kolom Sejajar: No Rekening & Atas Nama -->
                    <div class="dns-spec-columns">
                        <div class="dns-spec-col">
                            <span class="dns-spec-label">No Rekening:</span>
                            <div class="dns-spec-value-row">
                                <span class="dns-spec-value" id="bri-acc-num">7214568901</span>
                                <button type="button" 
                                        class="dns-btn-pill-copy" 
                                        id="btn-copy-bri"
                                        onclick="copyToClipboard('7214568901', 'btn-copy-bri', 'BRI')"
                                        aria-label="Salin nomor rekening BRI">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                    </svg>
                                    <span class="copy-label">Salin</span>
                                </button>
                            </div>
                        </div>

                        <div class="dns-spec-col">
                            <span class="dns-spec-label">Atas Nama:</span>
                            <span class="dns-spec-value">UKKI UNNES</span>
                        </div>
                    </div>
                </div>

                <!-- Kartu 2: QRIS Infaq Dakwah -->
                <div class="dns-channel-card">
                    <!-- Brand Logo Block QRIS -->
                    <div class="dns-brand-block">
                        <div class="dns-brand-main-row">
                            <!-- Official Badge QRIS -->
                            <svg width="44" height="44" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Logo QRIS">
                                <rect x="5" y="5" width="90" height="90" rx="22" fill="#EE3124"/>
                                <text x="50" y="60" fill="#FFFFFF" font-family="'Poppins', sans-serif" font-weight="900" font-size="28" text-anchor="middle" letter-spacing="1">QR</text>
                            </svg>
                            <span class="dns-brand-acronym qris-red">QRIS</span>
                        </div>
                        <div class="dns-brand-fullname qris-red">Standar Pembayaran Nasional</div>
                    </div>

                    <!-- Kode QRIS Center Preview (Bisa Diklik untuk Memperbesar) -->
                    <div class="dns-qris-center-wrap" onclick="openQrisModal()" title="Klik untuk memperbesar QRIS">
                        <div class="dns-qris-thumb-card">
                            <svg width="86" height="86" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Kode QRIS Donasi UKKI UNNES">
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
                        <span class="dns-qris-zoom-label">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                <line x1="11" y1="8" x2="11" y2="14"></line>
                                <line x1="8" y1="11" x2="14" y2="11"></line>
                            </svg>
                            Klik untuk Perbesar QRIS
                        </span>
                    </div>

                    <!-- 2 Kolom Sejajar: No Rekening & Atas Nama -->
                    <div class="dns-spec-columns">
                        <div class="dns-spec-col">
                            <span class="dns-spec-label">No Rekening:</span>
                            <div class="dns-spec-value-row">
                                <span class="dns-spec-value" id="qris-nmid-num">ID1024356789012</span>
                                <button type="button" 
                                        class="dns-btn-pill-copy" 
                                        id="btn-copy-qris"
                                        onclick="copyToClipboard('ID1024356789012', 'btn-copy-qris', 'QRIS')"
                                        aria-label="Salin nomor NMID QRIS">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                    </svg>
                                    <span class="copy-label">Salin</span>
                                </button>
                            </div>
                        </div>

                        <div class="dns-spec-col">
                            <span class="dns-spec-label">Atas Nama:</span>
                            <span class="dns-spec-value">UKKI UNNES</span>
                        </div>
                    </div>
                </div>

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
