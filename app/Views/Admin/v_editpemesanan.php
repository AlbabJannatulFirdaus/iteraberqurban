<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Data Pemesanan Qurban</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard') ?>">Dashboard</a></li>
                <li class=" breadcrumb-item active">Edit Pemesanan</li>
            </ol>

            <!-- Header Tipis -->
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Edit Data Pemesanan Qurban
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-8">

                            <form action="<?php echo site_url('admin/dashboard/updatepesan/') ?><?= $pemesanan['id_pemesanan']; ?>" method="post" enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="buktiLama" value="<?= $pemesanan['bukti_transfer']; ?>">
                                <div class="form-group row my-3">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= (session('validation') && session('validation')->hasError('nama_pemesan')) ? 'is-invalid' : ''; ?>" id="nama" placeholder="Nama Lengkap" name="nama_pemesan" autofocus value="<?= $pemesanan['nama_pemesan']; ?>">
                                        <?php if (session('validation') && session('validation')->hasError('nama_pemesan')) : ?>
                                            <div class="invalid-feedback">
                                                Harus Diisi!
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="telepon" class="col-sm-2 col-form-label">No Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= (session('validation') && session('validation')->hasError('no_telepon')) ? 'is-invalid' : ''; ?>" id="inputPassword3" placeholder="No Telepon" name="no_telepon" value="<?= $pemesanan['no_telepon']; ?>">
                                        <?php if (session('validation') && session('validation')->hasError('no_telepon')) : ?>
                                            <div class="invalid-feedback">
                                                Harus Diisi!
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control <?= (session('validation') && session('validation')->hasError('email_pemesan')) ? 'is-invalid' : ''; ?>" id="email" placeholder="Email" name="email_pemesan" value="<?= $pemesanan['email_pemesan']; ?>">
                                        <?php if (session('validation') && session('validation')->hasError('email_pemesan')) : ?>
                                            <div class="invalid-feedback">
                                                Harus Diisi!
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= (session('validation') && session('validation')->hasError('alamat_pemesan')) ? 'is-invalid' : ''; ?>" id="inputPassword3" placeholder="Alamat Lengkap" name="alamat_pemesan" value="<?= $pemesanan['alamat_pemesan']; ?>">
                                        <?php if (session('validation') && session('validation')->hasError('alamat_pemesan')) : ?>
                                            <div class="invalid-feedback">
                                                Harus Diisi!
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="instansi" class="col-sm-2 col-form-label">Instansi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= (session('validation') && session('validation')->hasError('instansi_pemesan')) ? 'is-invalid' : ''; ?>" id="inputPassword3" placeholder="Instansi" name="instansi_pemesan" value="<?= $pemesanan['instansi_pemesan']; ?>">
                                        <?php if (session('validation') && session('validation')->hasError('instansi_pemesan')) : ?>
                                            <div class="invalid-feedback">
                                                Harus Diisi!
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <fieldset class="form-group my-3">
                                    <div class="row">
                                        <legend class="col-form-label col-sm-2 pt-0 ">Paket</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="paket_pemesan" id="paket" value="A. Rp. 2.500.000,-" <?php echo ($pemesanan['paket_pemesan'] == 'A. Rp. 2.500.000,-') ? 'checked' : ''; ?>>
                                                <label class="form-check-label" for="gridRadios1">
                                                    A. Rp. 2.500.000,-
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="paket_pemesan" id="paket" value="B. Rp. 3.000.000,-" <?php echo ($pemesanan['paket_pemesan'] == 'B. Rp. 3.000.000,-') ? 'checked' : ''; ?>>
                                                <label class="form-check-label" for="gridRadios2">
                                                    B. Rp. 3.000.000,-
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group row my-3">
                                    <label for="gambar" class="col-sm-2 col-form-label">Bukti TF</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control " id="gambar" name="bukti_transfer" value="<?= $pemesanan['bukti_transfer']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="Tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control <?= (session('validation') && session('validation')->hasError('tanggal_transfer')) ? 'is-invalid' : ''; ?>" id="Tanggal" name="tanggal_transfer" value="<?= $pemesanan['tanggal_transfer']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Ubah</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </main>