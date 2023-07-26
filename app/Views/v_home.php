<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ITERA BERQURBAN</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url('home') ?>/assets/img/logoqurban2.png" rel="icon">
    <link href="<?php echo base_url('home') ?>/assets/img/logoqurban.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('home') ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url('home') ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url('home') ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('home') ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url('home') ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url('home') ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url('home') ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url('home') ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('home') ?>/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Selecao
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo d-flex align-items-center">
                <a href="/">
                    <img src="home/asset/img/logo2.png" alt="Logo" class="img-fluid logo-image">
                </a>
                <h1><a href="/">ITERA BERQURBAN</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto" href=" <?php echo site_url('pendaftaran') ?>">Pendaftaran Hewan Qurban</a></li>
                            <li><a class="nav-link scrollto" href=" <?php echo site_url('pemesanan') ?>">Pemesanan Hewan Qurban</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="<?php echo site_url('user/login') ?>">Tabungan</a></li>
                    <li><a class="nav-link scrollto " href="#gallery">Galeri</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li><a class="nav-link scrollto" href=" <?php echo site_url('admin/login') ?>">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Pusat Informasi <span>ITERA BERQURBAN</span></h2>
                    <p class="animate__animated fanimate__adeInUp">Selamat datang, ini merupakan platform Program Qurban hari raya Idul Adha di Institut Teknologi Sumatera.</p>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Persiapkan Hewan Qurban dari Sekarang!</h2>
                    <p class="animate__animated animate__fadeInUp">Kami menyediakan layanan tabungan qurban untuk memudahkan Masyarakat untuk bisa berqurban di Idul Adha tahun ini.</p>
                    <a href="<?php echo site_url('user/login') ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Mulai Menabung</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Mau Qurban apa tahun ini?</h2>
                    <p class="animate__animated animate__fadeInUp">Kami menyediakan layanan pemesanan (setor tunai) yang nantinya kami carikan hewan qurban sesuai paket yang dipilih dan layanan pendaftaran hewan qurban secara langsung, kamu bisa langsung antar hewan qurban terbaikmu.</p>
                    <a href="#pricing" class="btn-get-started animate__animated animate__fadeInUp scrollto">Qurban Sekarang</a>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="#5aa4d3">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="#1D5E84">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->


    <main id="main">

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <ul class="nav nav-tabs row d-flex">
                    <li class="nav-item col-3" data-aos="zoom-in">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-1">
                            <i class="ri-gps-line"></i>
                            <h4 class="d-none d-lg-block"><?= $totalUser ?> Nasabah Tabungan</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                            <i class="ri-body-scan-line"></i>
                            <h4 class="d-none d-lg-block"><?= $totalPendaftaran ?> Pendaftar</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                            <i class="ri-sun-line"></i>
                            <h4 class="d-none d-lg-block"><?= $totalPemesanan ?> Pemesan</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                            <i class="ri-store-line"></i>
                            <h4 class="d-none d-lg-block"><?= $totalPenerima ?> Penerima</h4>
                        </a>
                    </li>
                </ul>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>About</h2>
                    <p>ITERA BERQURBAN</p>
                </div>

                <div class="row content" data-aos="fade-up">
                    <div class="col-lg-6">
                        <p>
                            Alhamdulillah sebentar lagi kita akan memasuki bulan Dzulhijjah 1445 H, diantara amalan yang dianjurkan didalamnya selain berpuasa adalah Menyembelih hewan Qurban di 10 Dzulhijjah. <br> <br>
                            وَلِكُلِّ اُمَّةٍ جَعَلْنَا مَنْسَكًا لِّيَذْكُرُوا اسْمَ اللّٰهِ عَلٰى مَا رَزَقَهُمْ مِّنْۢ بَهِيْمَةِ الْاَنْعَامِۗ فَاِلٰهُكُمْ اِلٰهٌ وَّاحِدٌ فَلَهٗٓ اَسْلِمُوْاۗ وَبَشِّرِ الْمُخْبِتِيْنَ ۙ
                            <br> <br> “Dan bagi setiap umat telah Kami syariatkan penyembelihan (kurban), agar mereka menyebut nama Allah atas rezeki yang dikaruniakan Allah kepada mereka berupa hewan ternak. Maka Tuhanmu ialah Tuhan Yang Maha Esa, karena itu berserahdirilah kamu kepada-Nya. Dan sampaikanlah (Muhammad) kabar gembira kepada orang-orang yang tunduk patuh (kepada Allah) ” (Q.S Al Haj : 34)
                        </p>
                        <p>
                            ITERA BERQURBAN adalah sebuah program qurban yang diadakan di Institut Teknologi Sumatera (ITERA). Program ini merupakan bagian dari upaya komunitas kampus untuk berbagi kebahagiaan dan mendekatkan diri dengan sesama, khususnya dalam momen Hari Raya Idul Adha. <br> <br>
                            Dalam program ITERA BERQURBAN, para mahasiswa, dosen, dan staf kampus berpartisipasi dengan menyumbangkan hewan qurban seperti sapi atau kambing. Hewan-hewan tersebut kemudian disembelih dan dagingnya didistribusikan kepada orang-orang yang membutuhkan, terutama masyarakat sekitar kampus dan orang-orang yang kurang mampu.
                        </p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Selain memberikan daging qurban kepada yang membutuhkan, program ini juga mendorong nilai-nilai sosial dan kepedulian di kalangan mahasiswa dan civitas akademika ITERA. Melalui kegiatan ini, diharapkan peserta dapat merasakan makna sejati dari berqurban yaitu berbagi dengan sesama, menjalin tali silaturahmi, dan membantu meringankan beban saudara-saudara yang kurang beruntung.
                        </p>
                        <p>
                            ITERA BERQURBAN tidak hanya menjadi ajang berbagi daging qurban semata, tetapi juga menjadi momen untuk memperkuat solidaritas dan semangat kebersamaan di dalam lingkungan kampus. Dengan berpartisipasi dalam program ini, para anggota kampus dapat merasakan kehangatan dan kebahagiaan dari kebersamaan dalam berbuat kebaikan.
                        </p>
                        <p>
                            Program ITERA BERQURBAN menjadi salah satu bentuk nyata dari peran aktif kampus dalam berkontribusi positif bagi masyarakat sekitar dan mempererat hubungan antaranggota kampus. Semoga semangat berqurban dan berbagi di dalam program ini dapat terus dijaga dan menjadi tradisi yang berkelanjutan dalam lingkungan kampus ITERA.
                        </p>
                        <p>
                            Kami menyediakan 3 layanan untuk membantu Masyarakat untuk berqurban di ITERA, Tabungan Qurban, Pemesanan Qurban (setor uang), dan Pendaftaran Hewan Qurban
                        </p>
                        <a href="#" class="btn-learn-more">Yuk Berqurban!</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Gallery</h2>
                    <p>Dokumentasi Program Qurban di ITERA</p>
                </div>

                <div class="row g-0" data-aos="fade-left">

                    <!-- Tambahkan bagian untuk video -->
                    <!-- <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100"> -->
                    <!-- Ganti URL video dengan URL video yang sesuai -->
                    <!-- <video controls class="img-fluid">
                                <source src="home/asset/img/video.mp4" type="video/mp4"> -->
                    <!-- Tambahkan sumber video lainnya jika diperlukan (misalnya: WebM, Ogg) -->
                    <!-- <source src="path_ke_video/your_video.webm" type="video/webm">
                             <source src="path_ke_video/your_video.ogv" type="video/ogg"> -->
                    <!-- Video not supported -->
                    <!-- </video>
                        </div>
                    </div> -->

                    <?php foreach ($dataGaleri as $galeri) : ?>
                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                                <a href="home/asset/img/<?= $galeri['gambar_galeri'] ?>" class="gallery-lightbox">
                                    <img src="home/asset/img/<?= $galeri['gambar_galeri'] ?>" alt="<?= $galeri['judul_galeri'] ?>" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>
        </section><!-- End Gallery Section -->


        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Paket</h2>
                    <p>Paket ITERA Berqurban</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="box featured" data-aos="zoom-in">
                            <h3>Kambing - Paket A</h3>
                            <h4><sup>Rp.</sup>3.000.000<span> / ekor</span></h4>
                            <ul>
                                <img src="home/assets/img/kambing1.png" alt="Gambar Sapi2" class="img-fluid">
                            </ul>
                            <div class="btn-wrap">
                                <a href="/pemesanan" class="btn-buy">Qurban Sekarang</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="box featured" data-aos="zoom-in">
                            <h3>Kambing - Paket B</h3>
                            <h4><sup>Rp.</sup>2.500.000<span> / ekor</span></h4>
                            <ul>
                                <img src="home/assets/img/kambing2.png" alt="Gambar Sapi2" class="img-fluid">
                            </ul>
                            <div class="btn-wrap">
                                <a href="/pemesanan" class="btn-buy">Qurban Sekarang</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
                            <h3>Sapi - Paket A</h3>
                            <h4><sup>Rp.</sup>3.000.000<span> / 1/7 ekor</span></h4>
                            <ul>
                                <img src="home/assets/img/sapi1.png" alt="Gambar Sapi2" class="img-fluid">
                            </ul>
                            <div class="btn-wrap">
                                <a href="/pemesanan" class="btn-buy">Qurban Sekarang</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="box featured" data-aos="zoom-in" data-aos-delay="300">
                            <h3>Sapi - Paket B</h3>
                            <h4><sup>Rp.</sup>2.500.000<span> / 1/7 Ekor</span></h4>
                            <ul>
                                <img src="home/assets/img/sapi2.png" alt="Gambar Sapi2" class="img-fluid">
                            </ul>
                            <div class="btn-wrap">
                                <a href="/pemesanan" class="btn-buy">Qurban Sekarang</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4" data-aos="fade-right">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Lokasi:</h4>
                                <p>Masjid Raya At-Tanwir ITERA, Jl. Terusan Ryacudu, Desa Way Hui, Kecamatan Jati Agung, Lampung Selatan 35365</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>iteraberqurban@itera.ac.id</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Narahubung:</h4>
                                <p>Pak Nurdin (0823333333333)</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

                        <div id="map" style="height: 400px;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.3972033179107!2d105.31709576540543!3d-5.356205374179324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c35734ea29f3%3A0xe29d9ded1ed565ba!2sAt%20Tanwir%20Mosque!5e0!3m2!1sen!2sid!4v1690127434989!5m2!1sen!2sid" width="800" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>ITERA BERQURBAN</h3>
            <p>Platform Informasi Program Qurban hari raya Idul Adha di Institut Teknologi Sumatera.</p>
            <div class="copyright">
                &copy; Copyright <strong><span>ITERA BerQurban 2023</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url('home') ?>/assets/vendor/aos/aos.js"></script>
    <script src="<?php echo base_url('home') ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('home') ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url('home') ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url('home') ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url('home') ?>/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url('home') ?>/assets/js/main.js"></script>

</body>

</html>