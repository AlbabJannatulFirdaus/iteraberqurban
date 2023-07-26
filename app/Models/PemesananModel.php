<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model
{
    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'nama_pemesan',
        'no_telepon',
        'email_pemesan',
        'alamat_pemesan',
        'instansi_pemesan',
        'paket_pemesan',
        'bukti_transfer',
        'tanggal_transfer',
    ];

    public function hapusData($id_pemesanan)
    {
        return $this->delete($id_pemesanan);
    }

    public function dataPemesanan($id_pemesanan)
    {
        return $this->find($id_pemesanan);
    }
}
