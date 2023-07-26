<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dataqurban extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_dataqurban' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'jenis' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'sumber' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'jumlah' => [
                'type' => 'DOUBLE',
                'default' => 0,
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
            'id_pemesanan' => [ // Kolom kunci asing untuk tabel pemesanan
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'id_pendaftaran' => [ // Kolom kunci asing untuk tabel pendaftaran
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'id_user' => [ // Kolom kunci asing untuk tabel user
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id_dataqurban');
        $this->forge->addForeignKey('id_pemesanan', 'pemesanan', 'id_pemesanan');
        $this->forge->addForeignKey('id_pendaftaran', 'pendaftaran', 'id_pendaftaran');
        $this->forge->addForeignKey('id_user', 'user', 'id_user'); // Kolom kunci asing untuk tabel user
        $this->forge->createTable('dataqurban');
    }

    public function down()
    {
        $this->forge->dropTable('dataqurban');
    }
}
