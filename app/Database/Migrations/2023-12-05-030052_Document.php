<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Document extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id'          => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                    'auto_increment' => true
                ],
                'file_name'          => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
                ],
                'status'          => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
                ],
                'date_of_use'          => [
                    'type'           => 'DATETIME',
                ],
                'created_at'          => [
                    'type'           => 'DATETIME',
                ],
            ]
        );
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('document');
    }

    public function down()
    {
        $this->forge->dropTable('document');
    }
}
