<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRuanganTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode_ruangan' =>[
                'type' => 'INT',
                'constraint' => 5,
                'unique' => true,
                'auto_increment' => true
            ], 
            'nama_ruangan' =>[
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
        ]);
        $this->forge->addKey('kode_ruangan',true);
        $this->forge->createTable('ruangan');
    }

    public function down()
    {
        $this->forge->dropTable('ruangan');
        
    }
}
