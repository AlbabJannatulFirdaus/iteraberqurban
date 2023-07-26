<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table = 'pendaftaran';
    protected $primaryKey = 'id_pendaftaran';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'nama_pendaftar',
        'no_tlpn',
        'email_pendaftar',
        'alamat_pendaftar',
        'instansi_pendaftar',
        'jenis_qurban',
        'bukti_gambar',
        'tanggal_antar',
    ];

    public function hapusData($id_pendaftaran)
    {
        return $this->delete($id_pendaftaran);
    }

    public function dataPendaftaran($id_pendaftaran)
    {
        return $this->find($id_pendaftaran);
    }
}
