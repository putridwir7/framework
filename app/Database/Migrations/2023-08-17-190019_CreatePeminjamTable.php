<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePeminjamrTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'NIP' =>[
                'type' => 'VARCHAR',
                'constraint' => 20,
                'unique' => true
            ],
            'nama' =>[
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'username' =>[
                'type' => 'VARCHAR',
                'constraint' => 100,
                'unique' => true
            ],
            'telp' =>[
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
        ]);
        $this->forge->addForeignKey('username','users','username','CASCADE','CASCADE');
        $this->forge->addKey('NIP',true);
        $this->forge->createTable('peminjam');
    }

    public function down()
    {
        $this->forge->dropTable('peminjam');
    }
}
