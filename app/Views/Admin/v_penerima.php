<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Penerima Qurban</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Penerima Qurban</li>
            </ol>
            <?php if (session()->getFlashdata('status')) : ?>
                <div class="alert alert-success" role="alert">
                    <p><?= session()->getFlashdata('status') ?></p>
                </div>
            <?php endif; ?>
            <!-- <div class="card mb-4">
                <div class="card-body">
                    DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                    <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                    .
                </div>
            </div> -->
            <div class="card mb-4">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>
                            <i class="fas fa-table me-1"></i>
                            Data Penerima Qurban
                        </span>
                        <a href="<?= site_url('admin/dashboard/tambahpenerima') ?>" class="btn btn-sm btn-primary">Tambah Data Penerima</a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Instansi</th>
                                <th>Alamat</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($dataPenerima as $penerima) : ?>
                                <tr>
                                    <th><?= $no++ ?></th>
                                    <td><?= $penerima['nama_penerima'] ?></td>
                                    <td><?= $penerima['instansi_penerima'] ?></td>
                                    <td><?= $penerima['alamat_penerima'] ?></td>
                                    <td><?= $penerima['keterangan'] ?></td>
                                    <th>
                                        <!-- Tambahkan tombol untuk mengedit dan menghapus data -->
                                        <a href="<?= site_url('admin/dashboard/editpenerima/' . $penerima['id_penerima']) ?>"><i class="fas fa-edit"></i></a> &nbsp;
                                        <a href="<?= site_url('admin/dashboard/deletepenerima/' . $penerima['id_penerima']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                                    </th>
                                </tr>
                            <?php endforeach; ?>
                        <tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>