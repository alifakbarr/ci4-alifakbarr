<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePortfoliosTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'role' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'start_at' => [
                'type' => 'date',
                'null' => true,
            ],
            'finish_at' => [
                'type' => 'date',
                'null' => true,
            ],
            'link' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP on update current_timestamp',

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('portfolios');
    }

    public function down()
    {
        //
    }
}
