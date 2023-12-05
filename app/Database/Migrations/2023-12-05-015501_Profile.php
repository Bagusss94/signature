<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profile extends Migration
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
                'user_id'          => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                ],
                'full_name'          => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
                ],
                'email'          => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
                ],
                'no_hp'          => [
                    'type'           => 'INT',
                    'constraint'     => 20,
                ],
                'nip'          => [
                    'type'           => 'INT',
                    'constraint'     => 100,
                ],
                'job_position'          => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
                ],
                'company'          => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
                ],
                'created_at'          => [
                    'type'           => 'DATETIME',
                ],
                'updated_at'          => [
                    'type'           => 'DATETIME',
                ],
            ]
        );
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('user_profile');
    }

    public function down()
    {
        $this->forge->dropTable('user_profile');
    }
}
