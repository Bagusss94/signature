<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Signer extends Migration
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
                'document_id'          => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                ],
                'status'      => [
                    'type'           => 'ENUM',
                    'constraint'     => ['signed', 'waiting', 'queue'],
                    'default'        => 'draft',
                ],
                'signed_at'          => [
                    'type'           => 'DATETIME',
                ],
                'create_at'          => [
                    'type'           => 'DATETIME',
                ],
            ]
        );
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('signer');
    }

    public function down()
    {
        $this->forge->dropTable('signer');
    }
}
