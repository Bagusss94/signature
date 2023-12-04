<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BanyakKaryawan extends Migration
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
                'firs_name'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255'
                ],
                'last_name'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255'
                ],
                'email'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255'
                ],
                'university'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255'
                ],
            ]
        );
        $this->forge->addKey('id', TRUE);

        // Membuat tabel news
        $this->forge->createTable('karyawan', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('karyawan');
    }
}
