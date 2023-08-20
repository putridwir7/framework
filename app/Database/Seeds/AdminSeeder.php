<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data =[
            'username' => 'admin',
            'password' => password_hash('admin',PASSWORD_DEFAULT), //gunanya untuk mengenkripsi
            "role" => "admin"
        ];
        $this->db->table('users')->insert($data);
    }
}
