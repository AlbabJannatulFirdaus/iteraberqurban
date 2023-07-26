<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Tabungan Qurban</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard') ?>">Dashboard</a></li>
                <li class=" breadcrumb-item active">Tabungan</li>
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
                    Data Tabungan Qurban
                </div>
                <div class="card-body table-responsive">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Email</th>
                                <th>Nama</th>
                                <th>No Telepon</th>
                                <th>Alamat</th>
                                <th>Instansi</th>
                                <th>Paket</th>
                                <th>Tabungan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($user as $u) : ?>
                                <tr>
                                    <th><?= $i++ ?></th>
                                    <td><?= $u['email_user'] ?></td>
                                    <td><?= $u['nama_user'] ?></td>
                                    <td><?= $u['no_user'] ?></td>
                                    <td><?= $u['alamat_user'] ?></td>
                                    <td><?= $u['instansi'] ?></td>
                                    <td><?= $u['target_qurban'] ?></td>
                                    <td><?= $u['target_qurban'] ?></td>
                                    <th>
                                        <a href="<?php echo site_url('admin/dashboard/detail/') ?><?= $u['username_user']; ?>"><i class="fas fa-eye"></i></a>
                                    </th>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>