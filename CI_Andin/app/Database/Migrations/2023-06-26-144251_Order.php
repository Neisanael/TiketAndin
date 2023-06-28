<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Order extends Migration
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
            'user_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
            ],
            'movie_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
            ],
            'tiket_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
            ],
            'total_beli' => [
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
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->addForeignKey('movie_id', 'movies', 'id');
        $this->forge->addForeignKey('tiket_id', 'tikets', 'id');
        $this->forge->createTable('orders');
    }

    public function down()
    {
        $this->forge->dropTable('orders');
    }
}
