<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-kurban2 text-white mb-4">
                        <div class="card-body">
                            <h2><?= $totalUser ?></h2>
                            <h4>Penabung</h4>
                        </div>
                        <div class="card-footer bg-kurban d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?php echo site_url('admin/dashboard/tabungan') ?>">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-kurban2 text-white mb-4">
                        <div class="card-body">
                            <h2><?= $totalPendaftaran ?></h2>
                            <h4>Pendaftar</h4>
                        </div>
                        <div class="card-footer bg-kurban d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?php echo site_url('admin/dashboard/pendaftaran') ?>">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-kurban2 text-white mb-4">
                        <div class="card-body">
                            <h2><?= $totalPemesanan ?></h2>
                            <h4>Pemesan</h4>
                        </div>
                        <div class="card-footer bg-kurban d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?php echo site_url('admin/dashboard/pemesanan') ?>">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-kurban2 text-white mb-4">
                        <div class="card-body">
                            <h2><?= $totalPenerima ?></h2>
                            <h4>Penerima</h4>
                        </div>
                        <div class="card-footer bg-kurban d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?php echo site_url('admin/dashboard/penerima') ?>">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>