<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Data Penerima Qurban</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo site_url('user/dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Tambah Penerima</li>
            </ol>
            <!-- <div class="card mb-4">
                <div class="card-body">
                    DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                    <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                    .
                </div>
            </div> -->
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tambah Data Penerima Qurban - Institut Teknologi Sumatera
                </div>
                <div class="card-body">
                    <div class="col-8">
                        <form action="<?php echo site_url('admin/dashboard/store') ?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <div class="form-group row my-3">
                                <label for="input_nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= (session('validation') && session('validation')->hasError('nama_penerima')) ? 'is-invalid' : ''; ?>" id="input_nama" name="nama_penerima" autofocus value="<?= old('nama_penerima'); ?>">
                                    <?php if (session('validation') && session('validation')->hasError('nama_penerima')) : ?>
                                        <div class="invalid-feedback">
                                            <?= session('validation')->getError('nama_penerima'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row my-3">
                                <label for="input_instansi" class="col-sm-2 col-form-label">Instansi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= (session('validation') && session('validation')->hasError('instansi_penerima')) ? 'is-invalid' : ''; ?>" id="input_instansi" name="instansi_penerima" value="<?= old('instansi_penerima'); ?>">
                                    <?php if (session('validation') && session('validation')->hasError('instansi_penerima')) : ?>
                                        <div class="invalid-feedback">
                                            <?= session('validation')->getError('instansi_penerima'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row my-3">
                                <label for="input_alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= (session('validation') && session('validation')->hasError('alamat_penerima')) ? 'is-invalid' : ''; ?>" id="input_alamat" name="alamat_penerima" value="<?= old('alamat_penerima'); ?>">
                                    <?php if (session('validation') && session('validation')->hasError('alamat_penerima')) : ?>
                                        <div class="invalid-feedback">
                                            <?= session('validation')->getError('alamat_penerima'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row my-3">
                                <label for="input_keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= (session('validation') && session('validation')->hasError('keterangan')) ? 'is-invalid' : ''; ?>" id="input_keterangan" name="keterangan" value="<?= old('keterangan'); ?>">
                                    <?php if (session('validation') && session('validation')->hasError('keterangan')) : ?>
                                        <div class="invalid-feedback">
                                            <?= session('validation')->getError('keterangan'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div>
                                <input type="submit" name="submit" value="Tambah" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>