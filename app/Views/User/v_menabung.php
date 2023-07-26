<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Form Tabungan Qurban</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo site_url('user/dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Menabung</li>
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
                    Tabungan Qurban - Institut Teknologi Sumatera
                </div>
                <div class="card-body">
                    <div class="col-8">
                        <form action="<?php echo site_url('user/dashboard/create') ?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <div class="form-group row my-3">
                                <label for="input_post_status" class="col-sm-2 col-form-label">Jumlah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= (session('validation') && session('validation')->hasError('besar_tabungan')) ? 'is-invalid' : ''; ?>" id="input_jumlah" name="besar_tabungan" value="<?= old('besar_tabungan'); ?>">
                                    <?php if (session('validation') && session('validation')->hasError('besar_tabungan')) : ?>
                                        <div class="invalid-feedback">
                                            Harus disisi
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row my-3">
                                <label for="input_post_thumbnail" class="col-sm-2 col-form-label">Bukti Tranfer</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="input_bukti_tf" name="bukti_tabungan">
                                </div>
                            </div>
                            <div class="form-group row my-3">
                                <label for="Tanggal" class="col-sm-2 col-form-label">Tanggal:</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control <?= (session('validation') && session('validation')->hasError('tgl_tabungan')) ? 'is-invalid' : ''; ?>" id="Tanggal" name="tgl_tabungan" value="<?= old('tgl_tabungan'); ?>">
                                    <?php if (session('validation') && session('validation')->hasError('tgl_tabungan')) : ?>
                                        <div class="invalid-feedback">
                                            Harus disisi
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div>
                                <input type="submit" name="submit" value="Kirim" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>