<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Data Galeri ITERA BerQurban</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo site_url('user/dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Tambah Galeri</li>
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
                    Tambah Data galeri - Institut Teknologi Sumatera
                </div>
                <div class="card-body">
                    <div class="col-8">
                        <form action="<?php echo site_url('admin/dashboard/rekap') ?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <div class="form-group row my-3">
                                <label for="input_nama" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= (session('validation') && session('validation')->hasError('judul_galeri')) ? 'is-invalid' : ''; ?>" id="input_nama" name="judul_galeri" autofocus value="<?= old('judul_galeri'); ?>">
                                    <?php if (session('validation') && session('validation')->hasError('judul_galeri')) : ?>
                                        <div class="invalid-feedback">
                                            <?= session('validation')->getError('judul_galeri'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row my-3">
                                <label for="input_post_thumbnail" class="col-sm-2 col-form-label">Dokumentasi</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="input_galeri" name="gambar_galeri">
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