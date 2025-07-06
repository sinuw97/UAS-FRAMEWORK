<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin1',
                'email' => 'test-admin@gmail.com',
                'password' => password_hash('admin123', PASSWORD_BCRYPT),
                'roles' => 'admin',
                'created_at' => Time::now('Asia/Jakarta'),
                'updated_at' => Time::now('Asia/Jakarta')
            ],
            [
                'username' => 'mas_tian',
                'email' => 'mas_tian@gmail.com',
                'password' => password_hash('mastian123', PASSWORD_BCRYPT),
                'roles' => 'pembeli',
                'created_at' => Time::now('Asia/Jakarta'),
                'updated_at' => Time::now('Asia/Jakarta')
            ],
            [
                'username' => 'mas_fahrur',
                'email' => 'mas_fahrur@gmail.com',
                'password' => password_hash('masfahrur123', PASSWORD_BCRYPT),
                'roles' => 'pembeli',
                'created_at' => Time::now('Asia/Jakarta'),
                'updated_at' => Time::now('Asia/Jakarta')
            ],
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
