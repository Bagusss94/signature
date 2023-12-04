<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use SebastianBergmann\Type\TrueType;

class Datamasuk extends Migration
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
                'tgl_dipakai'          => [
                    'type'           => 'DATE',
                ],
                'kepada'          => [
                    'type'           => 'DATE',
                ],
                'keterangan'          => [
                    'type'           => 'VARCHAR',
                    'constraint'           => '255',
                ],
            ]
        );
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('data-masuk', True);
    }

    public function down()
    {
        $this->forge->dropTable('data-masuk');
    }
}
