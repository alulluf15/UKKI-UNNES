<?php include __DIR__ . '/../layouts/header.php'; ?>
<div class="pgh"><div class="wrap"><h1>Admin Dashboard</h1><p>Edit konten hero dan beranda.</p></div></div>
<section class="s"><div class="wrap">
    <?php if(isset($_GET['success'])): ?>
        <div style="background:#10b981;color:#fff;padding:15px;border-radius:12px;margin-bottom:24px;">✅ Perubahan berhasil disimpan!</div>
    <?php endif; ?>
    <div class="card" style="max-width:800px;margin:0 auto;">
        <form method="POST" action="/admin/update" enctype="multipart/form-data">
            <div style="margin-bottom:16px;">
                <label style="display:block;font-weight:600;margin-bottom:6px;">Judul Utama</label>
                <input type="text" name="hero_title" value="<?= htmlspecialchars($content['hero_title']) ?>" style="width:100%;padding:12px;border:1px solid var(--line);border-radius:8px;background:var(--bg);color:var(--ink);">
            </div>
            <div style="margin-bottom:16px;">
                <label style="display:block;font-weight:600;margin-bottom:6px;">Subjudul (Kabinet)</label>
                <input type="text" name="hero_subtitle" value="<?= htmlspecialchars($content['hero_subtitle']) ?>" style="width:100%;padding:12px;border:1px solid var(--line);border-radius:8px;background:var(--bg);color:var(--ink);">
            </div>
            <div style="margin-bottom:16px;">
                <label style="display:block;font-weight:600;margin-bottom:6px;">Deskripsi Singkat</label>
                <textarea name="hero_desc" rows="4" style="width:100%;padding:12px;border:1px solid var(--line);border-radius:8px;background:var(--bg);color:var(--ink);"><?= htmlspecialchars($content['hero_desc']) ?></textarea>
            </div>
            <button type="submit" class="btn">Simpan Perubahan</button>
        </form>
    </div>
</div></section>
<?php include __DIR__ . '/../layouts/footer.php'; ?>
