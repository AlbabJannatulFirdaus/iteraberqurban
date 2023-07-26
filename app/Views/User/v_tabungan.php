<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Tabungan Qurban</h1>
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
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Tabungan Qurban
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($tabungan as $tb) : ?>
                                <?php if ($tb['username_user'] === session()->get('akun_username_user')) : ?>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <td><?= $tb['tgl_tabungan'] ?></td>
                                        <td><?= $tb['besar_tabungan'] ?></td>
                                        <?php $totalTabungan += $tb['besar_tabungan']; ?>
                                        <td><?= $totalTabungan ?></td>
                                        <td class="gallery-cell">
                                            <a href="<?php echo base_url('home') ?>/asset/img/<?= $tb['bukti_tabungan'] ?>" class="gallery-lightbox">
                                                <img src="<?php echo base_url('home') ?>/asset/img/<?= $tb['bukti_tabungan'] ?>" alt="<?= $tb['bukti_tabungan'] ?>" class="img-thumbnail">
                                            </a>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>