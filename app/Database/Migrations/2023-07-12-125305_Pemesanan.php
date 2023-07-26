<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pemesanan extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_pemesanan' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'nama_pemesan' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'no_telepon'      => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
            ],
            'email_pemesan'           => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'alamat_pemesan'          => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'instansi_pemesan'        => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'paket_pemesan'           => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'bukti_transfer'  => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'tanggal_transfer' => [
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

        $this->forge->addKey('id_pemesanan', true);
        $this->forge->createTable('pemesanan');
    }

    public function down()
    {
        //
        $this->forge->dropTable('pemesanan');
    }
}
