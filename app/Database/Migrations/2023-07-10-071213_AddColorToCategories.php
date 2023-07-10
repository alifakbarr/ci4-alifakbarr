<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColorToCategories extends Migration
{
    public function up()
    {
        // $this->forge->addColumnAfter('categories', [
        //     'color' => [
        //         'type' => 'VARCHAR',
        //         'constraint' => 100,
        //         'null' => true
        //     ]
        // ], 'name');
        $this->db->query("ALTER TABLE categories ADD color VARCHAR(100) AFTER name");
    }

    public function down()
    {
        //
    }
}
