<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePeminjamanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_peminjaman' =>[
                'type' => 'INT',
                'constraint' => 5,
                'unique' => true,
                'auto_increment' => true
            ],
                    'NIP' =>[
                    'type' => 'VARCHAR',
                    'constraint' => 20,
                ],
                'kode_ruangan' =>[
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' =>true,
                ],
                    'jam_mulai' =>[
                    'type' => 'TIME',
                ],
                'jam_selesai' =>[
                    'type' => 'TIME',
                ],
                'tanggal' =>[
                    'type' => 'DATE',
                ],
                'keterangan' =>[
                    'type' => 'TEXT',
                ],
        ]);
        // foreign key nip mahasiswa
        $this->forge->addForeignKey('NIP','peminjam','NIP','CASCADE','RESTRICT');//RESTRICT artinya kalu udah pinjam,ga bisa pinjam lagi dan datanya harus dihapus dulu 
        // foreign key kode_ruangan
        $this->forge->addKey('kode_ruangan','ruangan','kode_ruangan','CASCADE','RESTRICT');
        $this->forge->addKey('id_peminjaman',true);
        $this->forge->createTable('peminjaman');
    }

    public function down()
    {
        $this->forge->dropTable('peminjaman');
    }
}
