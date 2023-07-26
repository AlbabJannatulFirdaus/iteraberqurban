<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pemesanan extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'nama_pemesan'     => 'John Doe',
                'no_telepon'       => '081234567890',
                'email_pemesan'            => 'john@example.com',
                'alamat_pemesan'           => 'Jl. Contoh Alamat 123',
                'instansi_pemesan'         => 'ITERA',
                'paket_pemesan'            => 'Paket A',
                'bukti_transfer'   => 'contoh_bukti_transfer.jpg',
                'tanggal_transfer' => '2023-07-12',
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ],
            [
                'nama_pemesan'     => 'Jane Smith',
                'no_telepon'       => '087654321098',
                'email_pemesan'            => 'jane@example.com',
                'alamat_pemesan'           => 'Jl. Alamat Lain 456',
                'instansi_pemesan'         => 'UNILA',
                'paket_pemesan'            => 'Paket B',
                'bukti_transfer'   => 'bukti_transfer.jpg',
                'tanggal_transfer' => '2023-07-11',
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('pemesanan')->insertBatch($data);
    }
}
