<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SiswaSeeder extends Seeder
{
    public function run()
    {
        $data =[
            'username' => '123',
            'password' => password_hash('123',PASSWORD_DEFAULT), //gunanya untuk mengenkripsi
            "role" => "user"
        ];
        $this->db->table('users')->insert($data);
    }
}
