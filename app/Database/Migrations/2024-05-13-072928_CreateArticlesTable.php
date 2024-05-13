<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => "INT",
                'null'              => false,
                'auto_increment'    => true
            ],
            'title' => [
                'type'              => 'VARCHAR',
                'null'              => false,
                'constraint'        => 128
            ],
            'content' => [
                'type'              => 'TEXT',
                'null'              => false
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('Articles');
    }

    public function down()
    {
        $this->forge->dropTable('Articles');
    }
}
