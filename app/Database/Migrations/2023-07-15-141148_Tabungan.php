<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tabungan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_tabungan'    => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username'       => [
                'type'       => 'VARCHAR',
                'constraint' => 25,
            ],
            'besar_tabungan' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'bukti_tabungan' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'tgl_tabungan'   => [
                'type' => 'DATE',
            ],
            'created_at'     => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at'     => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id_tabungan', true);
        $this->forge->addForeignKey('username', 'user', 'username', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tabungan');
    }

    public function down()
    {
        $this->forge->dropTable('tabungan');
    }
}
