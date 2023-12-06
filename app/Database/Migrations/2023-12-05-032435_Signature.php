<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Signature extends Migration
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
                'profil_id'          => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                ],
                'filename'          => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
                ],
                'created_at DATETIME DEFAULT NOW()'
            ]
        );
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('signature');
    }

    public function down()
    {
        $this->forge->dropTable('signature');
    }
}
