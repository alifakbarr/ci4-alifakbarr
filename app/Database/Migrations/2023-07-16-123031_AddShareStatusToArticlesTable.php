<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddShareStatusToArticlesTable extends Migration
{
    public function up()
    {
        $this->db->query("ALTER TABLE articles ADD share VARCHAR(100), ADD status VARCHAR(100) AFTER slug");
    }

    public function down()
    {
        //
    }
}
