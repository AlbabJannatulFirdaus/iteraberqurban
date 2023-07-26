<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        //
        $data = [
            'username' => 'albabjannatul',
            'password' => password_hash('12345678', PASSWORD_DEFAULT),
            'nama_user' => 'Albab Jannatul',
            'email_user' => 'babaljafir@gmail.com',
            'no_user' => '081368098016',
            'alamat_user' => 'Sukarame Bandar Lampung',
            'instansi' => 'ITERA',
            'target_qurban' => 'Rp 3 Juta',
        ];
        $this->db->table('user')->insert($data);
    }
}
