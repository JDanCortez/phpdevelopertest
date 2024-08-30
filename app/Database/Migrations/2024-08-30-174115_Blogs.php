<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Blogs extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
            ],
            'title' => [
                'type'           => 'varchar',
                'constraint'    => '200'
            ],
            'post' => [
                'type'           => 'text',
            ],
            'created_at datetime default current_timestamp'
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('user_id','users', 'id');
        $this->forge->createTable('posts');
    }

    public function down()
    {
        //
        $this->forge->dropTable('posts');
    }
}
