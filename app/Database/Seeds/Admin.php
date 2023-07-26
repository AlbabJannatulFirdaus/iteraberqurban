<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Admin extends Seeder
{
    public function run()
    {
        //
        $data = [
            'username' => 'admin',
            'password' => password_hash('123456', PASSWORD_DEFAULT),
            'nama_lengkap' => 'Albab Jannatul Firdaus',
            'email' => 'albab.119140097@student.itera.ac.id'
        ];
        $this->db->table('admin')->insert($data);
    }
}
