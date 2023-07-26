<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Data Pendaftaran Qurban</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard') ?>">Dashboard</a></li>
                <li class=" breadcrumb-item active">Edit Pendaftaran</li>
            </ol>

            <!-- Header Tipis -->
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Edit Data Pendaftaran Qurban
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <form action="<?php echo site_url('admin/dashboard/updatedaftar/') ?><?= $pendaftaran['id_pendaftaran']; ?>" method="post" enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="gambarLama" value="<?= $pendaftaran['bukti_gambar']; ?>">
                                <div class="form-group row my-3">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="teks" class="form-control <?= (session('validation') && session('validation')->hasError('nama_pendaftar')) ? 'is-invalid' : ''; ?>" id="nama" placeholder="Nama Lengkap" name="nama_pendaftar" autofocus value="<?= $pendaftaran['nama_pendaftar']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="telepon" class="col-sm-2 col-form-label">No Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="teks" class="form-control <?= (session('validation') && session('validation')->hasError('no_tlpn')) ? 'is-invalid' : ''; ?>" id="inputPassword3" placeholder="No Telepon" name="no_tlpn" value="<?= $pendaftaran['no_tlpn']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control <?= (session('validation') && session('validation')->hasError('email_pendaftar')) ? 'is-invalid' : ''; ?>" id="email" placeholder="Email" name="email_pendaftar" value="<?= $pendaftaran['email_pendaftar']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="teks" class="form-control <?= (session('validation') && session('validation')->hasError('alamat_pendaftar')) ? 'is-invalid' : ''; ?>" id="inputPassword3" placeholder="Alamat Lengkap" name="alamat_pendaftar" value="<?= $pendaftaran['alamat_pendaftar']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="instansi" class="col-sm-2 col-form-label">Instansi</label>
                                    <div class="col-sm-10">
                                        <input type="teks" class="form-control <?= (session('validation') && session('validation')->hasError('instansi_pendaftar')) ? 'is-invalid' : ''; ?>" id="inputPassword3" placeholder="Instansi" name="instansi_pendaftar" value="<?= $pendaftaran['instansi_pendaftar']; ?>">
                                    </div>
                                </div>
                                <fieldset class="form-group my-3">
                                    <div class="row">
                                        <legend class="col-form-label col-sm-2 pt-0">Jenis Qurban</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_qurban" id="jenis" value="Kambing" <?php echo ($pendaftaran['jenis_qurban'] == 'Kambing') ? 'checked' : ''; ?>>
                                                <label class="form-check-label" for="jenis">
                                                    Kambing
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_qurban" id="jenis" value="Domba" <?php echo ($pendaftaran['jenis_qurban'] == 'Domba') ? 'checked' : ''; ?>>
                                                <label class="form-check-label" for="jenis">
                                                    Domba
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_qurban" id="jenis" value="Sapi" <?php echo ($pendaftaran['jenis_qurban'] == 'Sapi') ? 'checked' : ''; ?>>
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
                                        <input type="file" class="form-control" id="gambar" name="bukti_gambar" <?= $pendaftaran['bukti_gambar']; ?>>
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="Tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control <?= (session('validation') && session('validation')->hasError('tanggal_antar')) ? 'is-invalid' : ''; ?>" id="Tanggal" name="tanggal_antar" value="<?= $pendaftaran['tanggal_antar']; ?>">
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