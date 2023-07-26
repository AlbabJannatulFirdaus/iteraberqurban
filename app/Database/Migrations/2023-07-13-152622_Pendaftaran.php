<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pendaftaran extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_pendaftaran' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'nama_pendaftar' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'no_tlpn'      => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
            ],
            'email_pendaftar'           => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'alamat_pendaftar'          => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'instansi_pendaftar'        => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'jenis_qurban'           => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'bukti_gambar'  => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'tanggal_antar' => [
                'type' => 'DATE',
            ],
            'created_at'      => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at'      => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id_pendaftaran', true);
        $this->forge->createTable('pendaftaran');
    }

    public function down()
    {
        //
        $this->forge->dropTable('pendaftaran');
    }
}
