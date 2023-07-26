<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_user' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
                'unique' => true
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'nama_user' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'email_user' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'unique' => true
            ],
            'no_user' => [
                'type' => 'INT',
                'constraint' => 25,
            ],
            'alamat_user' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'instansi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'target_qurban' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'token' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'last_login timestamp default now()'
        ]);
        $this->forge->addKey('id_user', TRUE);
        $this->forge->createTable('user', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('user');
    }
}
