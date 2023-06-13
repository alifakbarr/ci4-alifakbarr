<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddSlugToArticlestable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('articles', [
            'slug VARCHAR(255) UNIQUE'
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('articles', 'slug');
    }
}
