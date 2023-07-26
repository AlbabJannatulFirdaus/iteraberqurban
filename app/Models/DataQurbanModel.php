<?php

namespace App\Models;

use CodeIgniter\Model;

class DataqurbanModel extends Model
{
    protected $table = 'dataqurban';
    protected $primaryKey = 'id_dataqurban';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'nama',
        'jenis',
        'sumber',
        'jumlah',
        'keterangan'
    ];

    public function getDataQurban()
    {
        // Ambil data dari tabel pemesanan
        $pemesananData = $this->db->table('pemesanan')
            ->select('id_pemesanan as id_dataqurban, nama_pemesan as nama, paket_pemesan as jenis, "Pemesanan" as sumber, null as jumlah, null as keterangan')
            ->get()->getResultArray();

        // Ambil data dari tabel pendaftaran
        $pendaftaranData = $this->db->table('pendaftaran')
            ->select('id_pendaftaran as id_dataqurban, nama_pendaftar as nama, jenis_qurban as jenis, "Pendaftaran" as sumber, null as jumlah, null as keterangan')
            ->get()->getResultArray();

        // Ambil data dari tabel user
        $userData = $this->db->table('user')
            ->select('id_user as id_dataqurban, nama_user as nama, target_qurban as jenis, "Tabungan" as sumber, null as jumlah, null as keterangan')
            ->get()->getResultArray();

        // Gabungkan data dari ketiga tabel
        $dataQurban = array_merge($pemesananData, $pendaftaranData, $userData);

        // Urutkan data berdasarkan id_dataqurban (id_dataqurban bisa diganti dengan kolom lain yang dianggap lebih sesuai)
        usort($dataQurban, function ($a, $b) {
            return $a['id_dataqurban'] - $b['id_dataqurban'];
        });

        return $dataQurban;
    }
}
