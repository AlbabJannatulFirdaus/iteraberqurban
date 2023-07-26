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
    <link href="<?php echo base_url('home') ?>/assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
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
                    <h2 class="animate__animated animate__fadeInDown">Pendaftaran Hewan Qurban</h2>
                    <p class="animate__animated fanimate__adeInUp">Layanan pendaftaran qurban kami hadir untuk memudahkan dan menyediakan kemudahan bagi para calon pemberi qurban. Melalui layanan ini, Anda dapat mendaftarkan hewan qurban dengan cepat dan praktis, tanpa perlu khawatir tentang proses administrasi yang rumit. Tim kami yang berpengalaman akan dengan penuh tanggung jawab mengelola pendaftaran hewan qurban Anda, sehingga Anda dapat fokus pada peribadatan dan berbagi kebahagiaan dalam menyambut hari raya qurban. Jadikan momen ini berarti dengan berkontribusi melalui layanan pendaftaran qurban kami yang dapat dipercaya dan berkualitas.</p>
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

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Pendaftaran</h2>
                    <p>Hewan Qurban</p>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <form action="<?php echo site_url('save2') ?>" method="post" enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <div class="form-group row my-3">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="teks" class="form-control <?= (session('validation') && session('validation')->hasError('nama_pendaftar')) ? 'is-invalid' : ''; ?>" id="nama" placeholder="Nama Lengkap" name="nama_pendaftar" autofocus value="<?= old('nama_pendaftar'); ?>">
                                        <?php if (session('validation') && session('validation')->hasError('nama_pendaftar')) : ?>
                                            <div class="invalid-feedback">
                                                Data harus disisi!
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="telepon" class="col-sm-2 col-form-label">No Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="teks" class="form-control <?= (session('validation') && session('validation')->hasError('no_tlpn')) ? 'is-invalid' : ''; ?>" id="inputPassword3" placeholder="No Telepon" name="no_tlpn" value="<?= old('no_tlpn'); ?>">
                                        <?php if (session('validation') && session('validation')->hasError('no_tlpn')) : ?>
                                            <div class="invalid-feedback">
                                                Data harus disisi!
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control <?= (session('validation') && session('validation')->hasError('email_pendaftar')) ? 'is-invalid' : ''; ?>" id="email" placeholder="Email" name="email_pendaftar" value="<?= old('email_pendaftar'); ?>">
                                        <?php if (session('validation') && session('validation')->hasError('email_pendaftar')) : ?>
                                            <div class="invalid-feedback">
                                                Data harus disisi!
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="teks" class="form-control <?= (session('validation') && session('validation')->hasError('alamat_pendaftar')) ? 'is-invalid' : ''; ?>" id="inputPassword3" placeholder="Alamat Lengkap" name="alamat_pendaftar" value="<?= old('alamat_pendaftar'); ?>">
                                        <?php if (session('validation') && session('validation')->hasError('alamat_pendaftar')) : ?>
                                            <div class="invalid-feedback">
                                                Data harus disisi!
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="instansi" class="col-sm-2 col-form-label">Instansi</label>
                                    <div class="col-sm-10">
                                        <input type="teks" class="form-control <?= (session('validation') && session('validation')->hasError('instansi_pendaftar')) ? 'is-invalid' : ''; ?>" id="inputPassword3" placeholder="Instansi" name="instansi_pendaftar" value="<?= old('instansi_pendaftar'); ?>">
                                        <?php if (session('validation') && session('validation')->hasError('instansi_pendaftar')) : ?>
                                            <div class="invalid-feedback">
                                                Data harus disisi!
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <fieldset class="form-group my-3">
                                    <div class="row">
                                        <legend class="col-form-label col-sm-2 pt-0">Jenis Qurban</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_qurban" id="jenis" value="Kambing" checked>
                                                <label class="form-check-label" for="jenis">
                                                    Kambing
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_qurban" id="jenis" value="Domba">
                                                <label class="form-check-label" for="jenis">
                                                    Domba
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_qurban" id="jenis" value="Sapi">
                                                <label class="form-check-label" for="jenis">
                                                    Sapi
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group row my-3">
                                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="gambar" name="bukti_gambar">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="Tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control <?= (session('validation') && session('validation')->hasError('tanggal_antar')) ? 'is-invalid' : ''; ?>" id="Tanggal" name="tanggal_antar" value="<?= old('tanggal_antar'); ?>">
                                        <?php if (session('validation') && session('validation')->hasError('tanggal_antar')) : ?>
                                            <div class="invalid-feedback">
                                                Data harus disisi!
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Pricing Section -->

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