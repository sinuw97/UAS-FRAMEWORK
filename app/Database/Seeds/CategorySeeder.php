<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class CategorySeeder extends Seeder
{
    public function run()
    {
        try {
            $data = [
                ['name' => 'Batik Pria', 'created_at' => Time::now(), 'updated_at' => Time::now()],
                ['name' => 'Batik Wanita', 'created_at' => Time::now(), 'updated_at' => Time::now()],
                ['name' => 'Batik Pasangan', 'created_at' => Time::now(), 'updated_at' => Time::now()],
                ['name' => 'Batik Anak', 'created_at' => Time::now(), 'updated_at' => Time::now()],
                ['name' => 'Sarung Batik', 'created_at' => Time::now(), 'updated_at' => Time::now()],
                ['name' => 'Kain Batik', 'created_at' => Time::now(), 'updated_at' => Time::now()],
            ];

            $this->db->table('categories')->insertBatch($data);
        } catch (\Exception $e) {
            echo 'Terjadi Kesalahan: ', $e->getMessage();
        }
    }
}
