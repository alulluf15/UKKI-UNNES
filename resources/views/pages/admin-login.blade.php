<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Admin - UKKI UNNES</title>
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body style="display:grid;place-items:center;min-height:100vh;">
<div class="card" style="width:100%;max-width:400px;padding:30px;">
    <h2 style="margin-bottom:20px;text-align:center;">Admin Login</h2>
    <?php if(isset($error)): ?>
        <p style="color:#ef4444;margin-bottom:15px;font-size:13.5px;text-align:center;"><?= $error ?></p>
    <?php endif; ?>
    <form method="POST" action="/admin/login">
        <?= csrf_field() ?>
        <div style="margin-bottom:15px;">
            <label style="display:block;margin-bottom:5px;font-size:13.5px;">Username</label>
            <input type="text" name="username" required style="width:100%;padding:10px;border:1px solid var(--line);border-radius:8px;background:var(--bg);color:var(--ink);">
        </div>
        <div style="margin-bottom:20px;">
            <label style="display:block;margin-bottom:5px;font-size:13.5px;">Password</label>
            <input type="password" name="password" required style="width:100%;padding:10px;border:1px solid var(--line);border-radius:8px;background:var(--bg);color:var(--ink);">
        </div>
        <button type="submit" class="btn" style="width:100%;justify-content:center;">Login</button>
    </form>
    <p style="text-align:center;margin-top:15px;font-size:13px;"><a href="/beranda">← Kembali ke Beranda</a></p>
</div>
</body>
</html>
