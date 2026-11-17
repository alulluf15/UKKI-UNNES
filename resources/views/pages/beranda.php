<?php include __DIR__ . '/../layouts/header.php'; ?>

<!-- Hero Section exactly matching Screenshot 149 -->
<div class="hero">
    <div class="wrap">
        <p class="wl" style="font:600 14px 'Playfair Display',serif;color:#f6d65a;letter-spacing:.08em;text-transform:uppercase;">WELCOME TO</p>
        <h1 style="font:700 clamp(42px,7vw,72px) 'Playfair Display',serif;color:#f6d65a;margin:4px 0 2px;"><?= htmlspecialchars($content['hero_title']) ?></h1>
        <h2 class="k" style="font:italic 600 clamp(24px,3.5vw,36px) 'Playfair Display',serif;margin-bottom:12px;color:#fff;"><?= htmlspecialchars($content['hero_subtitle']) ?></h2>
        <h3 class="s" style="font:700 clamp(16px,2vw,22px) 'Poppins',serif;color:#f6d65a;text-transform:uppercase;margin-bottom:18px;">SATUKAN SINERGI SELARASKAN AKSI</h3>
        <p style="max-width:650px;margin-bottom:12px;font-size:15px;color:#f3fbf7;line-height:1.6;"><?= htmlspecialchars($content['hero_desc']) ?></p>
        <p style="max-width:650px;margin-bottom:20px;font-size:15px;color:#f3fbf7;line-height:1.6;">UKKI UNNES sebagai wadah aktivitas dakwah yang berada di lingkungan kampus Universitas Negeri Semarang yang bertujuan untuk mengupayakan terwujudnya kampus yang religius, ilmiah, dan edukatif.</p>
        <?php if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true): ?>
            <div style="margin-top:15px;">
                <a class="btn" href="/admin" style="background:#f59e0b;color:#fff;">✏️ Edit Hero (Admin)</a>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Section: Kenal Lebih Dekat matching Screenshot 150 -->
<section class="s">
    <div class="wrap" style="display:grid;grid-template-columns:1.1fr 1fr;gap:45px;align-items:center;">
        <div style="background:linear-gradient(160deg,#cfd9cf,#8a6b4a 70%);border-radius:24px;aspect-ratio:16/10;display:grid;place-items:center;box-shadow:var(--sh);position:relative;overflow:hidden;">
            <button onclick="toast('Video profil segera diputar')" style="width:60px;height:60px;border-radius:50%;border:0;background:rgba(255,255,255,0.95);color:#00796b;font-size:22px;display:grid;place-items:center;cursor:pointer;box-shadow:0 8px 25px rgba(0,0,0,0.2);">▶</button>
        </div>
        <div>
            <h2 class="ttl" style="font-size:32px;margin-bottom:14px;">Kenal lebih dekat dengan UKKI UNNES</h2>
            <p class="lead" style="font-size:15px;line-height:1.7;margin-bottom:24px;">Platform ini dirancang untuk menyajikan informasi UKKI dengan lebih sederhana, mudah dipindai, dan tetap konsisten dengan tujuan utama organisasi.</p>
            <div style="display:flex;gap:12px;flex-wrap:wrap;">
                <button class="btn" onclick="toast('Memutar video profil')" style="background:#00796b;color:#fff;">Tonton Video Profil</button>
                <a class="btn" href="/kegiatan" style="background:transparent;border:1px solid var(--line);color:var(--ink);">Lihat Kegiatan</a>
            </div>
        </div>
    </div>
</section>

<!-- Section: Visi & Misi matching Screenshot 151 -->
<section class="s" style="padding-top:10px;">
    <div class="wrap">
        <h2 class="ttl" style="font-size:32px;margin-bottom:10px;">Visi & Misi UKKI</h2>
        <p class="lead" style="font-size:15px;margin-bottom:30px;">Menjadi lembaga dakwah kampus UNNES yang inklusif dan berkelanjutan dalam membina mahasiswa muslim serta menggerakkan dakwah yang relevan, tertata, dan berdampak nyata di lingkungan kampus, masyarakat dan bangsa Indonesia.</p>
        
        <div style="display:grid;grid-template-columns:1fr 1.6fr;gap:28px;">
            <div class="card" style="padding:32px;">
                <h3 style="font-size:24px;margin-bottom:16px;color:var(--ink);">Visi</h3>
                <p style="color:var(--mut);font-size:14.5px;line-height:1.7;">Menjadi lembaga dakwah kampus UNNES yang inklusif dan berkelanjutan dalam membina mahasiswa muslim serta menggerakkan dakwah yang relevan, tertata, dan berdampak nyata di lingkungan kampus, masyarakat dan bangsa Indonesia.</p>
            </div>
            <div class="card" style="padding:32px;">
                <h3 style="font-size:24px;margin-bottom:20px;color:var(--ink);">Misi</h3>
                <div style="display:flex;flex-direction:column;gap:14px;">
                    <div style="display:flex;gap:14px;align-items:flex-start;">
                        <span style="background:#00796b;color:#fff;width:24px;height:24px;border-radius:50%;display:grid;place-items:center;font-size:12px;font-weight:700;flex-shrink:0;margin-top:2px;">1</span>
                        <span style="font-size:14.5px;color:var(--ink);">Memperkuat pembinaan aktivis dakwah kampus UNNES secara berkelanjutan</span>
                    </div>
                    <div style="display:flex;gap:14px;align-items:flex-start;">
                        <span style="background:#00796b;color:#fff;width:24px;height:24px;border-radius:50%;display:grid;place-items:center;font-size:12px;font-weight:700;flex-shrink:0;margin-top:2px;">2</span>
                        <span style="font-size:14.5px;color:var(--ink);">Menjaga ukhuwah dan komunikasi internal organisasi</span>
                    </div>
                    <div style="display:flex;gap:14px;align-items:flex-start;">
                        <span style="background:#00796b;color:#fff;width:24px;height:24px;border-radius:50%;display:grid;place-items:center;font-size:12px;font-weight:700;flex-shrink:0;margin-top:2px;">3</span>
                        <span style="font-size:14.5px;color:var(--ink);">Mewujudkan tata kelola organisasi yang rapi, terstruktur, dan akuntabel</span>
                    </div>
                    <div style="display:flex;gap:14px;align-items:flex-start;">
                        <span style="background:#00796b;color:#fff;width:24px;height:24px;border-radius:50%;display:grid;place-items:center;font-size:12px;font-weight:700;flex-shrink:0;margin-top:2px;">4</span>
                        <span style="font-size:14.5px;color:var(--ink);">Mewujudkan Lembaga Dakwah Kampus yang mandiri secara finansial guna mendukung keberlangsungan dakwah di UNNES</span>
                    </div>
                    <div style="display:flex;gap:14px;align-items:flex-start;">
                        <span style="background:#00796b;color:#fff;width:24px;height:24px;border-radius:50%;display:grid;place-items:center;font-size:12px;font-weight:700;flex-shrink:0;margin-top:2px;">5</span>
                        <span style="font-size:14.5px;color:var(--ink);">Mengoptimalkan syiar dakwah dan citra UKKI yang relevan dengan mahasiswa</span>
                    </div>
                    <div style="display:flex;gap:14px;align-items:flex-start;">
                        <span style="background:#00796b;color:#fff;width:24px;height:24px;border-radius:50%;display:grid;place-items:center;font-size:12px;font-weight:700;flex-shrink:0;margin-top:2px;">6</span>
                        <span style="font-size:14.5px;color:var(--ink);">Meningkatkan dakwah inklusif yang terencana dan terukur untuk memberi manfaat bagi civitas kampus dan masyarakat</span>
                    </div>
                    <div style="display:flex;gap:14px;align-items:flex-start;">
                        <span style="background:#00796b;color:#fff;width:24px;height:24px;border-radius:50%;display:grid;place-items:center;font-size:12px;font-weight:700;flex-shrink:0;margin-top:2px;">7</span>
                        <span style="font-size:14.5px;color:var(--ink);">Mengoptimalkan sinergi lembaga dakwah kampus, civitas akademika, dan pihak terkait agar dakwah kampus berjalan selaras, berkelanjutan, dan berdampak</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: Info Kegiatan Terdekat matching Screenshot 152/153 -->
<section class="s" style="padding-top:10px;">
    <div class="wrap">
        <h2 class="ttl" style="font-size:32px;margin-bottom:8px;">Info Kegiatan Terdekat</h2>
        <p class="lead" style="margin-bottom:30px;">Agenda kegiatan UKKI yang paling dekat untuk memudahkan mahasiswa mengetahui jadwal, lokasi, dan informasi penting sebelum mengikuti acara.</p>
        
        <div class="grid3" style="grid-template-columns:repeat(2,1fr);gap:24px;">
            <div class="card" style="display:flex;flex-direction:column;justify-content:space-between;">
                <div>
                    <div style="background:linear-gradient(135deg,#2f9bff,#6366f1);height:220px;border-radius:16px;position:relative;margin-bottom:18px;display:grid;place-items:center;color:#fff;font-weight:bold;">
                        <div style="position:absolute;top:16px;left:16px;background:#3b82f6;color:#fff;padding:8px 14px;border-radius:10px;text-align:center;">
                            <b style="display:block;font-size:20px;line-height:1;">21</b>
                            <small style="font-size:10px;letter-spacing:1px;">OKT</small>
                        </div>
                        <span style="font-size:16px;opacity:0.9;">Poster Media Visit LKBN Antara</span>
                    </div>
                    <span style="background:#e0f2fe;color:#0284c7;padding:4px 10px;border-radius:6px;font-size:11px;font-weight:600;display:inline-block;margin-bottom:8px;">MEDIA 30</span>
                    <h3 style="font-size:20px;margin-bottom:10px;">Media Visit LKBN Antara</h3>
                    <p style="color:var(--mut);font-size:14px;margin-bottom:16px;">[ MEDIA VISIT : LDK SYAHID x LKBN ANTARA 📰 ] Assalamu'alaikum Warahmatullahi Wabarakatuh Saatnya mem...</p>
                </div>
                <button class="btn" style="background:#6366f1;align-self:flex-start;" onclick="toast('Detail kegiatan')">Lihat Detail →</button>
            </div>

            <div class="card" style="display:flex;flex-direction:column;justify-content:space-between;">
                <div>
                    <div style="background:linear-gradient(135deg,#10b981,#0d4a3a);height:220px;border-radius:16px;position:relative;margin-bottom:18px;display:grid;place-items:center;color:#fff;font-weight:bold;">
                        <div style="position:absolute;top:16px;left:16px;background:#10b981;color:#fff;padding:8px 14px;border-radius:10px;text-align:center;">
                            <b style="display:block;font-size:20px;line-height:1;">19</b>
                            <small style="font-size:10px;letter-spacing:1px;">OKT</small>
                        </div>
                        <span style="font-size:16px;opacity:0.9;">Poster Grand Opening KMB</span>
                    </div>
                    <span style="background:#d1fae5;color:#059669;padding:4px 10px;border-radius:6px;font-size:11px;font-weight:600;display:inline-block;margin-bottom:8px;">PABK 30</span>
                    <h3 style="font-size:20px;margin-bottom:10px;">Grand Opening Kelas Minat Bakat 2026</h3>
                    <p style="color:var(--mut);font-size:14px;margin-bottom:16px;">L★★☆ GRAND OPENING KELAS MINAT BAKAT (KMB) 2026 ★★┛ Assalamu'alaikum Warahmatullahi Wabarakatuh Giman...</p>
                </div>
                <button class="btn" style="background:#10b981;align-self:flex-start;" onclick="toast('Detail kegiatan')">Lihat Detail →</button>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../layouts/footer.php'; ?>
