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
                    <img src="<?php echo base_url('home') ?>/asset/img/logo2.png" alt="Logo" class="img-fluid logo-image">
                </a>
                <h1><a href="/">ITERA BERQURBAN</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="/">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto" href="<?php echo site_url('pendaftaran') ?>">Pendaftaran Hewan Qurban</a></li>
                            <li><a class="nav-link scrollto" href="<?php echo site_url('pemesanan') ?>">Pemesanan Hewan Qurban</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="<?php echo site_url('user/login') ?>">Tabungan</a></li>
                    <li><a class="nav-link scrollto " href="/#gallery">Galeri</a></li>
                    <li><a class="nav-link scrollto" href="/#contact">Kontak</a></li>
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
                    <h2 class="animate__animated animate__fadeInDown">Data Anda Berhasil dikirim</h2>
                    <p class="animate__animated fanimate__adeInUp">Silahkan konfirmasi ke Narahubung untuk melakukan konfirmasi.</p>
                </div>
            </div>

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