<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Galeri - SMK Nusantara</title>
<style>
*{margin:0;padding:0;box-sizing:border-box}body{font-family:Arial,sans-serif;background:#f5f7fb;color:#1f2937}
nav{background:#0f3d75;padding:18px 8%;display:flex;justify-content:space-between;align-items:center;position:sticky;top:0;z-index:10;box-shadow:0 3px 12px #0002}
.logo{color:#fff;font-size:23px;font-weight:bold}.logo span{color:#60a5fa}nav div:last-child{display:flex;gap:24px}nav a{color:#fff;text-decoration:none;font-weight:600;transition:.2s}nav a:hover,nav a.active{color:#60a5fa}
.container{max-width:1100px;margin:auto;padding:65px 8%}h1{text-align:center;color:#0f3d75;font-size:36px;margin-bottom:8px}.subtitle{text-align:center;color:#6b7280;margin-bottom:40px}
.gallery{display:grid;grid-template-columns:repeat(4,1fr);gap:20px}.gallery-card{height:220px;border-radius:16px;background:linear-gradient(135deg,#60a5fa,#2563eb);display:flex;flex-direction:column;align-items:center;justify-content:center;color:#fff;box-shadow:0 8px 25px #00000012;transition:.25s;cursor:pointer}.gallery-card:hover{transform:scale(1.04);box-shadow:0 15px 30px #00000020}.gallery-card .icon{font-size:55px;margin-bottom:15px}.gallery-card h3{font-size:18px}
footer{background:#0f3d75;color:#fff;text-align:center;padding:25px;margin-top:40px}
@media(max-width:900px){.gallery{grid-template-columns:repeat(2,1fr)}}@media(max-width:600px){nav{flex-direction:column;gap:14px}nav div:last-child{gap:12px;flex-wrap:wrap;justify-content:center}.container{padding:45px 5%}h1{font-size:30px}.gallery{grid-template-columns:1fr}}
</style>
</head>
<body>
<nav><div class="logo">SMK <span>NUSANTARA</span></div><div><a href="/">Beranda</a><a href="/profil">Profil</a><a href="/ekstrakurikuler">Ekskul</a><a href="/galeri" class="active">Galeri</a></div></nav>
<main class="container"><h1>Galeri Kegiatan</h1><p class="subtitle">Dokumentasi kegiatan dan aktivitas siswa SMK Nusantara</p>
<div class="gallery">
<div class="gallery-card"><div class="icon">🏫</div><h3>Kegiatan Sekolah</h3></div>
<div class="gallery-card"><div class="icon">🎓</div><h3>Wisuda Siswa</h3></div>
<div class="gallery-card"><div class="icon">🏆</div><h3>Prestasi Siswa</h3></div>
<div class="gallery-card"><div class="icon">⚽</div><h3>Kegiatan Futsal</h3></div>
<div class="gallery-card"><div class="icon">💻</div><h3>Pelatihan IT</h3></div>
<div class="gallery-card"><div class="icon">🌱</div><h3>Kegiatan Lingkungan</h3></div>
<div class="gallery-card"><div class="icon">🎨</div><h3>Kegiatan Seni</h3></div>
<div class="gallery-card"><div class="icon">🎉</div><h3>Acara Sekolah</h3></div>
</div></main>
<footer><p>© 2026 SMK Nusantara</p></footer>
</body>
</html>