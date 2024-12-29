<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posyandu Bougenville</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        /* Navbar Styles */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            padding: 1rem 5%;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .navbar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #2C3E50;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo img {
            height: 40px;
            width: auto;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #2C3E50;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #3498DB;
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(52, 152, 219, 0.8), rgba(41, 128, 185, 0.8)),
                        url('/api/placeholder/1920/1080') center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 0 5%;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease 0.3s;
            animation-fill-mode: both;
        }

        .cta-button {
            padding: 1rem 2rem;
            background: #E74C3C;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            transition: all 0.3s ease;
            animation: fadeInUp 1s ease 0.6s;
            animation-fill-mode: both;
            display: inline-block;
            position: relative;
            overflow: hidden;
        }

        .cta-button:hover {
            background: #C0392B;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        /* Services Section */
        .services {
            padding: 5rem 5%;
            background: #f9f9f9;
            position: relative;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: #2C3E50;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: #3498DB;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: #3498DB;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        .service-card i {
            font-size: 2.5rem;
            color: #3498DB;
            margin-bottom: 1rem;
            transition: transform 0.3s ease;
        }

        .service-card:hover i {
            transform: scale(1.1);
        }


        /* Stats Section */
        .stats {
            padding: 5rem 5%;
            background: #3498DB;
            color: white;
            position: relative;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .stat-item {
            padding: 2rem;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
        }

        .stat-item h3 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .counter {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        /* Activities Section */
        .activities {
            padding: 5rem 5%;
            background: #f9f9f9;
        }

        .activities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .activity-card {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            height: 400px;
        }

        .activity-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .activity-card:hover img {
            transform: scale(1.1);
        }

        .activity-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 2rem;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            color: white;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .activity-card:hover .activity-content {
            transform: translateY(0);
        }

        /* Footer */
        footer {
            background: #2C3E50;
            color: white;
            padding: 3rem 5%;
            text-align: center;
            position: relative;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        .footer-section h3::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 50px;
            height: 2px;
            background: #3498DB;
        }

        .social-links {
            margin-top: 1rem;
        }

        .social-links a {
            color: white;
            margin: 0 1rem;
            font-size: 1.5rem;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .social-links a:hover {
            color: #3498DB;
            transform: translateY(-3px);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0px);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1rem;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .activities-grid {
                grid-template-columns: 1fr;
            }
        }
        /* Gallery Section Styles */
.gallery {
    padding: 5rem 5%;
    background: #f9f9f9;
    position: relative;
}

.section-title p {
    color: #666;
    margin-top: 1rem;
    font-size: 1.1rem;
}

/* Filter Buttons */
.gallery-filter {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 1rem;
    margin: 2rem 0;
}

.filter-btn {
    padding: 0.8rem 1.5rem;
    border: none;
    background: white;
    color: #333;
    border-radius: 25px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 500;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.filter-btn.active,
.filter-btn:hover {
    background: #3498DB;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
}

/* Gallery Container */
.gallery-container {
    margin-top: 3rem;
}

/* Swiper Styles */
.gallerySwiper {
    width: 100%;
    padding-bottom: 50px;
}

.gallery-item {
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    height: 400px;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.gallery-overlay {
    position: absolute;
    bottom: -100%;
    left: 0;
    width: 100%;
    padding: 2rem;
    background: linear-gradient(transparent, rgba(0,0,0,0.8));
    color: white;
    transition: all 0.3s ease;
}

.gallery-item:hover .gallery-overlay {
    bottom: 0;
}

.gallery-item:hover img {
    transform: scale(1.1);
}

.gallery-overlay h3 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
}

.view-btn {
    background: #3498DB;
    color: white;
    border: none;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    margin-top: 1rem;
    transition: all 0.3s ease;
}

.view-btn:hover {
    background: white;
    color: #3498DB;
    transform: scale(1.1);
}

/* Swiper Navigation */
.swiper-button-next,
.swiper-button-prev {
    color: #3498DB;
    background: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.swiper-button-next:after,
.swiper-button-prev:after {
    font-size: 1.2rem;
}

.swiper-pagination-bullet {
    background: #3498DB;
}

/* Lightbox */
.lightbox {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.9);
    z-index: 1000;
    padding: 2rem;
}

.lightbox-img {
    max-width: 90%;
    max-height: 90vh;
    margin: auto;
    display: block;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
}

.close-lightbox {
    position: absolute;
    top: 20px;
    right: 30px;
    color: white;
    font-size: 2rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.close-lightbox:hover {
    color: #3498DB;
    transform: scale(1.1);
}

.lightbox-caption {
    color: white;
    text-align: center;
    margin-top: 1rem;
    position: absolute;
    bottom: 20px;
    left: 0;
    right: 0;
}

@media (max-width: 768px) {
    .gallery-filter {
        gap: 0.5rem;
    }

    .filter-btn {
        padding: 0.6rem 1rem;
        font-size: 0.9rem;
    }

    .gallery-item {
        height: 300px;
    }
}
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-content">
            <div class="logo">
                <img src="/assets/logo-posyandu.png" alt="Logo Posyandu">
                POSYANDU BOUGENVILLE
            </div>
            <div class="nav-links">
                <a href="#beranda">Beranda</a>
                <a href="#layanan">Layanan</a>
                <a href="#galeri">Galeri</a>
                <a href="#kegiatan">Kegiatan</a>
                <a href="#statistik">Statistik</a>
                <a href="#kontak">Kontak</a>
                <a href="/admin">Pusat Data</a> <!-- Path diubah ke /admin -->
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="beranda">
        <div id="particles-js"></div>
        <div class="hero-content">
            <h1 data-aos="fade-up">Selamat Datang di Posyandu Bougenville</h1>
            <p data-aos="fade-up" data-aos-delay="200">Melayani dengan Sepenuh Hati untuk Kesehatan Ibu dan Anak</p>
            <a href="#layanan" class="cta-button" data-aos="fade-up" data-aos-delay="400">
                Lihat Layanan Kami
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="layanan">
        <div class="section-title">
            <h2 data-aos="fade-up">Layanan Kami</h2>
        </div>
        <div class="services-grid">
            <div class="service-card" data-aos="fade-up">
                <i class="fas fa-baby"></i>
                <h3>Pemantauan Pertumbuhan Balita</h3>
                <p>Pemeriksaan rutin berat badan, tinggi badan, dan perkembangan anak</p>
            </div>
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-syringe"></i>
                <h3>Imunisasi</h3>
                <p>Program imunisasi lengkap sesuai jadwal untuk bayi dan balita</p>
            </div>
            <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                <i class="fas fa-female"></i>
                <h3>Kesehatan Ibu</h3>
                <p>Pemeriksaan kehamilan dan konsultasi kesehatan ibu</p>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
<!-- Gallery Section -->
<section class="gallery" id="galeri">
    <div class="section-title">
        <h2 data-aos="fade-up">Galeri Kegiatan</h2>
        <p data-aos="fade-up" data-aos-delay="200">Dokumentasi kegiatan-kegiatan Posyandu kami dalam melayani masyarakat</p>
    </div>

    <!-- Filter Buttons -->
    <div class="gallery-filter" data-aos="fade-up">
        <button class="filter-btn active" data-filter="all">Semua</button>
        <button class="filter-btn" data-filter="imunisasi">Imunisasi</button>
        <button class="filter-btn" data-filter="pemeriksaan">Pemeriksaan</button>
        <button class="filter-btn" data-filter="penyuluhan">Penyuluhan</button>
    </div>

    <!-- Main Gallery -->
<div class="gallery-container">
    <!-- Swiper Gallery -->
    <div class="swiper gallerySwiper" data-aos="fade-up">
        <div class="swiper-wrapper">
            <!-- Kegiatan 1 -->
            <div class="swiper-slide" data-category="imunisasi">
                <div class="gallery-item">
                    <img src="/assets/kegiatan1.jpg" alt="Kegiatan Imunisasi">
                    <div class="gallery-overlay">
                        <h3>Program Imunisasi Balita</h3>
                        <p>Kegiatan imunisasi rutin untuk balita</p>
                        <button class="view-btn" onclick="openLightbox(this)">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Kegiatan 2 -->
            <div class="swiper-slide" data-category="pemeriksaan">
                <div class="gallery-item">
                    <img src="/assets/kegiatan2.jpeg" alt="Pemeriksaan Kesehatan">
                    <div class="gallery-overlay">
                        <h3>Pemeriksaan Kesehatan</h3>
                        <p>Pemeriksaan rutin kesehatan balita</p>
                        <button class="view-btn" onclick="openLightbox(this)">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Kegiatan 3 -->
            <div class="swiper-slide" data-category="penyuluhan">
                <div class="gallery-item">
                    <img src="/assets/kegiatan3.jpg" alt="Penyuluhan Kesehatan">
                    <div class="gallery-overlay">
                        <h3>Penyuluhan Kesehatan</h3>
                        <p>Edukasi kesehatan untuk masyarakat</p>
                        <button class="view-btn" onclick="openLightbox(this)">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Kegiatan 4 -->
            <div class="swiper-slide" data-category="imunisasi">
                <div class="gallery-item">
                    <img src="/assets/kegiatan4.jpg" alt="Program Vaksinasi">
                    <div class="gallery-overlay">
                        <h3>Program Vaksinasi</h3>
                        <p>Pelaksanaan program vaksinasi</p>
                        <button class="view-btn" onclick="openLightbox(this)">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Kegiatan 5 -->
            <div class="swiper-slide" data-category="penyuluhan">
                <div class="gallery-item">
                    <img src="/assets/kegiatan5.jpg" alt="Senam Pagi">
                    <div class="gallery-overlay">
                        <h3>Senam Pagi</h3>
                        <p>Kegiatan senam pagi bersama balita</p>
                        <button class="view-btn" onclick="openLightbox(this)">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Kegiatan 6 -->
            <div class="swiper-slide" data-category="pemeriksaan">
                <div class="gallery-item">
                    <img src="/assets/kegiatan6.jpeg" alt="Konseling Ibu dan Anak">
                    <div class="gallery-overlay">
                        <h3>Konseling Ibu dan Anak</h3>
                        <p>Sesi konseling kesehatan untuk ibu dan anak</p>
                        <button class="view-btn" onclick="openLightbox(this)">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Kegiatan 7 -->
            <div class="swiper-slide" data-category="imunisasi">
                <div class="gallery-item">
                    <img src="/assets/kegiatan7.jpg" alt="Posyandu">
                    <div class="gallery-overlay">
                        <h3>Posyandu Rutin</h3>
                        <p>Periksa kesehatan balita di Posyandu</p>
                        <button class="view-btn" onclick="openLightbox(this)">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Kegiatan 8 -->
            <div class="swiper-slide" data-category="penyuluhan">
                <div class="gallery-item">
                    <img src="/assets/kegiatan8.jpg" alt="Lomba Balita Sehat">
                    <div class="gallery-overlay">
                        <h3>Lomba Balita Sehat</h3>
                        <p>Kegiatan lomba sehat untuk balita</p>
                        <button class="view-btn" onclick="openLightbox(this)">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Kegiatan 9 -->
            <div class="swiper-slide" data-category="pemeriksaan">
                <div class="gallery-item">
                    <img src="/assets/kegiatan9.jpg" alt="Penimbangan Berat Badan">
                    <div class="gallery-overlay">
                        <h3>Penimbangan Berat Badan</h3>
                        <p>Kegiatan rutin penimbangan berat balita</p>
                        <button class="view-btn" onclick="openLightbox(this)">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>


    <!-- Lightbox -->
    <div class="lightbox" id="lightbox">
        <span class="close-lightbox">&times;</span>
        <img src="" alt="" class="lightbox-img">
        <div class="lightbox-caption"></div>
    </div>
</section>

    <!-- Activities Section -->
    <section class="activities" id="kegiatan">
        <div class="section-title">
            <h2 data-aos="fade-up">Kegiatan Terbaru</h2>
        </div>
        <div class="activities-grid">
            <div class="activity-card" data-aos="fade-up">
                <img src="/assets/new1.jpg" alt="Kegiatan 1">
                <div class="activity-content">
                    <h3>Posyandu Bulan November</h3>
                    <p>Kegiatan pemeriksaan kesehatan dan pemberian imunisasi untuk balita</p>
                </div>
            </div>
            <div class="activity-card" data-aos="fade-up" data-aos-delay="200">
                <img src="/assets/new2.jpeg" alt="Kegiatan 2">
                <div class="activity-content">
                    <h3>Penyuluhan Gizi Bulan November</h3>
                    <p>Edukasi tentang pentingnya gizi seimbang untuk tumbuh kembang anak</p>
                </div>
            </div>
            <div class="activity-card" data-aos="fade-up" data-aos-delay="400">
                <img src="/assets/new3.jpeg" alt="Kegiatan 3">
                <div class="activity-content">
                    <h3>Senam Ibu Hamil Bulan November</h3>
                    <p>Kegiatan senam bersama untuk kesehatan ibu hamil</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats" id="statistik">
        <div id="particles-js-stats"></div>
        <div class="stats-grid">
            <div class="stat-item" data-aos="fade-up">
                <i class="fas fa-users"></i>
                <div class="counter" data-target="18">0</div>
                <p>Balita Terlayani</p>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-heart"></i>
                <div class="counter" data-target="6">0</div>
                <p>Kader Aktif</p>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                <i class="fas fa-smile"></i>
                <div class="counter" data-target="15">0</div>
                <p>Orang Tua Aktif</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="kontak">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Tentang Kami</h3>
                <p>Posyandu Bougenville berkomitmen untuk memberikan pelayanan terbaik bagi kesehatan ibu dan anak di lingkungan kita.</p>
            </div>
            <div class="footer-section">
                <h3>Kontak</h3>
                <p><i class="fas fa-map-marker-alt"></i> Jl. Meruya Selatan No.1, RT.4/RW.1, Joglo, Kec. Kembangan, Kota Jakarta Barat</p>
                <p><i class="fas fa-phone"></i> +62 811-8886-6909</p>
                <p><i class="fas fa-envelope"></i> info_bougenville@posyandu.com</p>
            </div>
            <div class="footer-section">
                <h3>Jam Operasional</h3>
                <p>Senin - Jumat: 08.00 - 16.00</p>
                <p>Sabtu: 08.00 - 12.00</p>
                <p>Minggu: Tutup</p>
            </div>
        </div>
        <div class="social-links">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        <p class="copyright">&copy; 2024 Posyandu Bougenville. All rights reserved.</p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // Initialize Particles.js
        particlesJS('particles-js', {
            particles: {
                number: {
                    value: 80,
                    density: {
                        enable: true,
                        value_area: 800
                    }
                },
                color: {
                    value: '#ffffff'
                },
                shape: {
                    type: 'circle'
                },
                opacity: {
                    value: 0.5,
                    random: false
                },
                size: {
                    value: 3,
                    random: true
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: '#ffffff',
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 6,
                    direction: 'none',
                    random: false,
                    straight: false,
                    out_mode: 'out',
                    bounce: false
                }
            },
            interactivity: {
                detect_on: 'canvas',
                events: {
                    onhover: {
                        enable: true,
                        mode: 'repulse'
                    },
                    onclick: {
                        enable: true,
                        mode: 'push'
                    },
                    resize: true
                }
            },
            retina_detect: true
        });

// Initialize Swiper
var gallerySwiper = new Swiper(".gallerySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
});

// Filter functionality
const filterButtons = document.querySelectorAll('.filter-btn');
const galleryItems = document.querySelectorAll('.swiper-slide');

filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        // Remove active class from all buttons
        filterButtons.forEach(button => button.classList.remove('active'));
        // Add active class to clicked button
        btn.classList.add('active');

        const filterValue = btn.getAttribute('data-filter');

        galleryItems.forEach(item => {
            if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });

        gallerySwiper.update();
        gallerySwiper.slideTo(0);
    });
});

// Lightbox functionality
function openLightbox(button) {
    const lightbox = document.getElementById('lightbox');
    const galleryItem = button.closest('.gallery-item');
    const img = galleryItem.querySelector('img');
    const caption = galleryItem.querySelector('h3').textContent;

    document.querySelector('.lightbox-img').src = img.src;
    document.querySelector('.lightbox-caption').textContent = caption;
    lightbox.style.display = 'block';
}

document.querySelector('.close-lightbox').addEventListener('click', () => {
    document.getElementById('lightbox').style.display = 'none';
});

// Close lightbox when clicking outside the image
document.getElementById('lightbox').addEventListener('click', (e) => {
    if (e.target.id === 'lightbox') {
        document.getElementById('lightbox').style.display = 'none';
    }
});

        // Counter Animation
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const increment = target / 200;

            const updateCounter = () => {
                const count = +counter.innerText;
                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCounter, 1);
                } else {
                    counter.innerText = target;
                }
            };

            updateCounter();
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.padding = '0.5rem 5%';
                navbar.style.background = 'rgba(255, 255, 255, 0.98)';
            } else {
                navbar.style.padding = '1rem 5%';
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
            }
        });

    </script>
</body>
</html>
