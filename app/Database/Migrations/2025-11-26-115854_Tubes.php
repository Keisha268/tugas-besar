<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class tubes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama_prasarana' => [
                'type'       => 'VARCHAR',
                'constraint' => '255'
            ],
            'daya_tampung' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true
            ],
            'luas_ruang' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true
            ],
            'status_kepemilikan' => [
                'type'       => 'ENUM',
                'constraint' => ['M','W'], 
            ],
            'status_lisensi' => [
                'type'       => 'ENUM',
                'constraint' => ['L','P','T'],
            ],
            'perangkat' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true
            ],
            'link_bukti' => [
                'type'       => 'TEXT',
                'null'       => true
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('tubes');
    }

    public function down()
    {
        $this->forge->dropTable('tubes');
    }
}
