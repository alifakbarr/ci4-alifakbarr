<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateArticleCategoriesTable extends Migration
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
            'article_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'category_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP on update current_timestamp',

        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey(['article_id', 'category_id']);
        $this->forge->addForeignKey('article_id', 'articles', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('category_id', 'categories', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('article_categories');
    }

    public function down()
    {
        $this->forge->dropTable('article_categories');
    }
}
