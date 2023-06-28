<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tiket extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 8, 
                'unsigned' => TRUE,
            ],
            'stok' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tikets');
    }

    public function down()
    {
        $this->forge->dropTable('tikets');
    }
}
