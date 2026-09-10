<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SMK Nusantara - Sekolah Unggul</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f7fb;
            color: #1f2937;
        }

        /* NAVBAR */
        nav {
            background: #0f3d75;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo {
            color: white;
            font-size: 23px;
            font-weight: bold;
        }

        .logo span {
            color: #60a5fa;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 25px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
        }

        nav ul li a:hover {
            color: #60a5fa;
        }

        /* HERO */
        .hero {
            min-height: 500px;
            display: flex;
            align-items: center;
            padding: 60px 8%;
            background: linear-gradient(135deg, #0f3d75, #2563eb);
            color: white;
        }

        .hero-content {
            max-width: 650px;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            background: white;
            color: #0f3d75;
            padding: 13px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }

        .btn:hover {
            background: #dbeafe;
        }

        /* SECTION */
        section {
            padding: 70px 8%;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title h2 {
            font-size: 32px;
            color: #0f3d75;
            margin-bottom: 10px;
        }

        .section-title p {
            color: #6b7280;
        }

        /* STATISTIK */
        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .stat-card {
            background: white;
            padding: 30px;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .stat-card h3 {
            font-size: 35px;
            color: #2563eb;
            margin-bottom: 8px;
        }

        .stat-card p {
            color: #6b7280;
        }

        /* BERITA */
        .news {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .news-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .news-card:hover {
            transform: translateY(-8px);
        }

        .news-image {
            height: 170px;
            background: linear-gradient(135deg, #60a5fa, #2563eb);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 45px;
        }

        .news-content {
            padding: 22px;
        }

        .news-content h3 {
            margin-bottom: 10px;
            color: #0f3d75;
        }

        .news-content p {
            color: #6b7280;
            line-height: 1.6;
        }

        /* GALERI */
        .gallery {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .gallery-item {
            height: 180px;
            background: linear-gradient(135deg, #93c5fd, #2563eb);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 40px;
            transition: 0.3s;
        }

        .gallery-item:hover {
            transform: scale(1.03);
        }

        /* FOOTER */
        footer {
            background: #0f3d75;
            color: white;
            text-align: center;
            padding: 30px;
        }

        footer p {
            margin: 5px;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                gap: 15px;
            }

            nav ul {
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
            }

            .hero h1 {
                font-size: 35px;
            }

            .stats,
            .news {
                grid-template-columns: 1fr;
            }

            .gallery {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav>
        <div class="logo">
            SMK <span>NUSANTARA</span>
        </div>

        <ul>
            <li><a href="/">Beranda</a></li>
            <li><a href="/profil">Profil Sekolah</a></li>
            <li><a href="/ekstrakurikuler">Ekstrakurikuler</a></li>
            <li><a href="/galeri">Galeri</a></li>
        </ul>
    </nav>

    <!-- HERO -->
    <section class="hero" id="beranda">
        <div class="hero-content">
            <h1>Selamat Datang di SMK Nusantara</h1>

            <p>
                Membangun generasi muda yang berkarakter,
                berprestasi, kreatif, dan siap menghadapi dunia kerja.
            </p>

            <a href="/profil" class="btn">Lihat Profil Sekolah</a>
        </div>
    </section>

    <!-- STATISTIK -->
    <section>
        <div class="section-title">
            <h2>Informasi Sekolah</h2>
            <p>Data singkat SMK Nusantara</p>
        </div>

        <div class="stats">

            <div class="stat-card">
                <h3>45</h3>
                <p>Guru & Tenaga Kependidikan</p>
            </div>

            <div class="stat-card">
                <h3>850</h3>
                <p>Siswa</p>
            </div>

            <div class="stat-card">
                <h3>12</h3>
                <p>Program Keahlian</p>
            </div>

        </div>
    </section>

    <!-- PROFIL -->
    <section id="profil">
        <div class="section-title">
            <h2>Profil Sekolah</h2>
            <p>Mengenal lebih dekat SMK Nusantara</p>
        </div>

        <div class="news-card">
            <div class="news-content">
                <h3>Tentang Sekolah</h3>

                <p>
                    SMK Nusantara merupakan sekolah kejuruan yang berkomitmen
                    memberikan pendidikan berkualitas serta membekali siswa
                    dengan keterampilan sesuai perkembangan teknologi dan dunia kerja.
                </p>
            </div>
        </div>
    </section>

    <!-- BERITA -->
    <section>
        <div class="section-title">
            <h2>Berita Kegiatan</h2>
            <p>Informasi kegiatan terbaru sekolah</p>
        </div>

        <div class="news">

            <div class="news-card">
                <div class="news-image">🏆</div>

                <div class="news-content">
                    <h3>Prestasi Siswa</h3>
                    <p>
                        Siswa SMK Nusantara berhasil meraih prestasi
                        dalam kompetisi tingkat daerah.
                    </p>
                </div>
            </div>

            <div class="news-card">
                <div class="news-image">🎓</div>

                <div class="news-content">
                    <h3>Kegiatan Sekolah</h3>
                    <p>
                        Sekolah melaksanakan kegiatan pembelajaran
                        dan pengembangan karakter siswa.
                    </p>
                </div>
            </div>

            <div class="news-card">
                <div class="news-image">💻</div>

                <div class="news-content">
                    <h3>Pelatihan Teknologi</h3>
                    <p>
                        Siswa mengikuti pelatihan teknologi untuk
                        meningkatkan keterampilan digital.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- EKSTRAKURIKULER -->
    <section id="ekskul">
        <div class="section-title">
            <h2>Ekstrakurikuler</h2>
            <p>Kegiatan untuk mengembangkan bakat dan minat siswa</p>
        </div>

        <div class="news">

            <div class="news-card">
                <div class="news-image">⚽</div>
                <div class="news-content">
                    <h3>Futsal</h3>
                    <p>
                        Mengembangkan kemampuan olahraga dan kerja sama tim.
                    </p>
                </div>
            </div>

            <div class="news-card">
                <div class="news-image">🥋</div>
                <div class="news-content">
                    <h3>Pencak Silat</h3>
                    <p>
                        Melatih kedisiplinan, keberanian dan kemampuan bela diri.
                    </p>
                </div>
            </div>

            <div class="news-card">
                <div class="news-image">💻</div>
                <div class="news-content">
                    <h3>IT Club</h3>
                    <p>
                        Meningkatkan kemampuan siswa dalam teknologi dan pemrograman.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- GALERI -->
    <section id="galeri">
        <div class="section-title">
            <h2>Galeri Kegiatan</h2>
            <p>Dokumentasi kegiatan SMK Nusantara</p>
        </div>

        <div class="gallery">
            <div class="gallery-item">📷</div>
            <div class="gallery-item">🎓</div>
            <div class="gallery-item">🏫</div>
            <div class="gallery-item">🏆</div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <p><strong>SMK NUSANTARA</strong></p>
        <p>Jl. Pendidikan No. 10, Bandar Lampung</p>
        <p>&copy; 2026 SMK Nusantara. All Rights Reserved.</p>
    </footer>

</body>
</html>