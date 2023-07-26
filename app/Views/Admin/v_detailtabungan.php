<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Detail Data Tabungan Qurban</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tabungan</li>
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
            <!-- Tampilkan informasi pengguna dalam tabel -->
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-user me-1"></i>
                    Informasi Pengguna
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td style="width: 200px;">Nama</td>
                                <td><?= $userInfo['nama_user']; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 200px;">Email</td>
                                <td><?= $userInfo['email_user']; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 200px;">Nomor Telepon</td>
                                <td><?= $userInfo['no_user']; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 200px;">Alamat</td>
                                <td><?= $userInfo['alamat_user']; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 200px;">Instansi</td>
                                <td><?= $userInfo['instansi']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Detail Data Tabungan Qurban
                </div>
                <div class="card-body table-responsive">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Jumlah Tabungan</th>
                                <th>Total Tabungan</th>
                                <th>Bukti</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php if (empty($detailtabungan)) : ?>
                                <p>Tidak ada data tabungan.</p>
                            <?php else : ?>
                                <!-- Lakukan foreach hanya jika $detailtabungan berisi data -->
                                <?php foreach ($detailtabungan as $tbn) : ?>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <td><?= $tbn['tgl_tabungan'] ?></td>
                                        <td><?= $tbn['besar_tabungan'] ?></td>
                                        <?php $totalTabungan += $tbn['besar_tabungan']; ?>
                                        <td><?= $totalTabungan ?></td>
                                        <td class="gallery-cell">
                                            <a href="<?php echo base_url('home') ?>/asset/img/<?= $tbn['bukti_tabungan'] ?>" class="gallery-lightbox">
                                                <img src="<?php echo base_url('home') ?>/asset/img/<?= $tbn['bukti_tabungan'] ?>" alt="<?= $tbn['bukti_tabungan'] ?>" class="img-thumbnail">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?php echo site_url('admin/dashboard/deletetabungan/') ?><?= $tbn['id_tabungan']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>