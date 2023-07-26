<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Pemesanan Qurban</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard') ?>">Dashboard</a></li>
                <li class=" breadcrumb-item active">Pemesanan</li>
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
                    <i class="fas fa-table me-1"></i>
                    Data Pemesanan Qurban
                </div>
                <div class="card-body table-responsive">
                    <table id="datatablesSimple" class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Email</th>
                                <th>Nama</th>
                                <th>No Telepon</th>
                                <th>Alamat</th>
                                <th>Instansi</th>
                                <th>Paket</th>
                                <th>Bukti</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <!-- <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot> -->
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pemesanan as $ps) : ?>
                                <tr>
                                    <th><?= $i++ ?></th>
                                    <td><?= $ps['email_pemesan'] ?></td>
                                    <td><?= $ps['nama_pemesan'] ?></td>
                                    <td><?= $ps['no_telepon'] ?></td>
                                    <td><?= $ps['alamat_pemesan'] ?></td>
                                    <td><?= $ps['instansi_pemesan'] ?></td>
                                    <td><?= $ps['paket_pemesan'] ?></td>
                                    <td class="gallery-cell">
                                        <a href="<?php echo base_url('home') ?>/asset/img/<?= $ps['bukti_transfer'] ?>" class="gallery-lightbox">
                                            <img src="<?php echo base_url('home') ?>/asset/img/<?= $ps['bukti_transfer'] ?>" alt="<?= $ps['bukti_transfer'] ?>" class="img-thumbnail">
                                        </a>
                                    </td>
                                    <th><?= $ps['tanggal_transfer'] ?></th>
                                    <td>
                                        <a href="<?php echo site_url('admin/dashboard/editpesan/') ?><?= $ps['id_pemesanan']; ?>"><i class="fas fa-edit"></i></a> &nbsp;
                                        <a href="<?php echo site_url('admin/dashboard/deletepesan/') ?><?= $ps['id_pemesanan']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>