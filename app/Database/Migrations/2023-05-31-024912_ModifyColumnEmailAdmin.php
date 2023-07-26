<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ModifyColumnEmailAdmin extends Migration
{
    public function up()
    {
        $this->forge->modifyColumn('admin', ['email varchar(255)']);
    }

    public function down()
    {
        //
    }
}
