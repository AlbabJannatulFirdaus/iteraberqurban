<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Registrasi - ITERA BERQURBAN</title>
    <!-- Favicons -->
    <link href="<?php echo base_url('home') ?>/assets/img/logoqurban2.png" rel="icon">
    <link href="<?php echo base_url('home') ?>/assets/img/logoqurban.png" rel="apple-touch-icon">
    <link href="<?php echo base_url('admin') ?>/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-kurban">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Daftar Pengqurban</h3>
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo site_url('user/daftar') ?>" method="post" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                        <div class="form-group row my-3">
                                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control <?= (session('validation') && session('validation')->hasError('nama_user')) ? 'is-invalid' : ''; ?>" id="nama" placeholder="Nama Lengkap" name="nama_user" autofocus value="<?= old('nama_user'); ?>">
                                                <?php if (session('validation') && session('validation')->hasError('nama_user')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= session('validation')->getError('nama_user'); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row my-3">
                                            <label for="nama" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control <?= (session('validation') && session('validation')->hasError('username_user')) ? 'is-invalid' : ''; ?>" id="username" placeholder="Username" name="username_user" autofocus value="<?= old('username_user'); ?>">
                                                <?php if (session('validation') && session('validation')->hasError('username_user')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= session('validation')->getError('username_user'); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row my-3">
                                            <label for="telepon" class="col-sm-2 col-form-label">No Telepon</label>
                                            <div class="col-sm-10">
                                                <input type="tel" class="form-control <?= (session('validation') && session('validation')->hasError('no_user')) ? 'is-invalid' : ''; ?>" id="no_user" placeholder="No Telepon" name="no_user" value="<?= old('no_user'); ?>">
                                                <?php if (session('validation') && session('validation')->hasError('no_user')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= session('validation')->getError('no_user'); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row my-3">
                                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control <?= (session('validation') && session('validation')->hasError('email_user')) ? 'is-invalid' : ''; ?>" id="email" placeholder="Email" name="email_user" value="<?= old('email_user'); ?>">
                                                <?php if (session('validation') && session('validation')->hasError('email_user')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= session('validation')->getError('email_user'); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row my-3">
                                            <label for="email" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control <?= (session('validation') && session('validation')->hasError('password_user')) ? 'is-invalid' : ''; ?>" id="password" placeholder="Password" name="password_user" value="<?= old('password_user'); ?>">
                                                <?php if (session('validation') && session('validation')->hasError('password_user')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= session('validation')->getError('password_user'); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row my-3">
                                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control <?= (session('validation') && session('validation')->hasError('alamat_user')) ? 'is-invalid' : ''; ?>" id="inputPassword3" placeholder="Alamat Lengkap" name="alamat_user" value="<?= old('alamat_user'); ?>">
                                                <?php if (session('validation') && session('validation')->hasError('alamat_user')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= session('validation')->getError('alamat_user'); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row my-3">
                                            <label for="instansi" class="col-sm-2 col-form-label">Instansi</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control <?= (session('validation') && session('validation')->hasError('instansi')) ? 'is-invalid' : ''; ?>" id="inputPassword3" placeholder="Instansi" name="instansi" value="<?= old('instansi'); ?>">
                                                <?php if (session('validation') && session('validation')->hasError('instansi')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= session('validation')->getError('instansi'); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <fieldset class="form-group my-3">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-2 pt-0 ">Paket</legend>
                                                <div class="col-sm-10">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="target_qurban" id="paket" value="A. Rp. 2.500.000,-" checked>
                                                        <label class="form-check-label" for="gridRadios1">
                                                            A. Rp. 2.500.000,-
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="target_qurban" id="paket" value="B. Rp. 3.000.000,-">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            B. Rp. 3.000.000,-
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="form-group row my-3">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Daftar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- <div class="card-footer text-center py-3">
                                    <div class="small">
                                        <a href="register.html">Need an account? Sign up!</a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('admin') ?>/js/scripts.js"></script>
</body>

</html>