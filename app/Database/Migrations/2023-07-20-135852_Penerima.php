<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penerima extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_penerima' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_penerima' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'instansi_penerima' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'alamat_penerima' => [
                'type' => 'TEXT',
            ],
            'keterangan' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id_penerima');
        $this->forge->createTable('penerima');
    }

    public function down()
    {
        $this->forge->dropTable('penerima');
    }
}
