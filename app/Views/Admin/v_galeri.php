<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data galeri</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Galeri</li>
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
                            Data Galeri
                        </span>
                        <a href="<?= site_url('admin/dashboard/tambahgaleri') ?>" class="btn btn-sm btn-primary">Tambah Galeri</a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Dokumentasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($dataGaleri as $galeri) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $galeri['judul_galeri'] ?></td>
                                    <td class="gallery-cell">
                                        <a href="<?php echo base_url('home') ?>/asset/img/<?= $galeri['gambar_galeri'] ?>" class="gallery-lightbox">
                                            <img src="<?php echo base_url('home') ?>/asset/img/<?= $galeri['gambar_galeri'] ?>" alt="<?= $galeri['gambar_galeri'] ?>" class="img-thumbnail">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?= site_url('admin/dashboard/deletegaleri/' . $galeri['id_galeri']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>