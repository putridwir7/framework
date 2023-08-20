<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up() 
    {
        $this->forge->addField( //menambahkan atribut
            [
                'username' =>[
                'type' => 'VARCHAR',
                'constraint' => 100,
                'unique' => true //usernya harus beda ga boleh sama
                ],
                'password' =>[
                    'type' => 'text',
                ], 
                'role' =>[ 
                    'type' => 'ENUM',
                    'constraint' => ['admin','user'],
                    'default' => 'user' //kalu  ga diisi keluarnya user
                    ],
            ]
        );
        $this->forge->addKey('username',true); //menambahkan primary key
        $this->forge->createTable('users');

    }

    public function down() //kesalahan data,yang berakibatkan mengahapus semua data
    {
        $this->forge->dropTable('users');
    }
}
