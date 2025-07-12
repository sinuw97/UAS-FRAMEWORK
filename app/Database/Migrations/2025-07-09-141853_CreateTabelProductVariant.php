<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTabelProductVariant extends Migration
{
        public function up()
    {
        try {
            $this->forge->addField([
                'variant_id' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'auto_increment' => true,
                ],
                'product_id' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                ],
                'size' => [
                    'type'       => 'VARCHAR',
                    'constraint' => '50',
                ],
                'stock' => [
                    'type'       => 'INT',
                    'constraint' => 11,
                    'default'    => 0,
                ],
                'price' => [
                    'type'       => 'DECIMAL',
                    'constraint' => '12,2',
                    'null'       => true,
                ],
                'created_at' => [
                    'type'    => 'DATETIME',
                    'null'    => true,
                ],
                'updated_at' => [
                    'type'    => 'DATETIME',
                    'null'    => true,
                ],
            ]);

            $this->forge->addKey('variant_id', true);
            $this->forge->addForeignKey('product_id', 'products', 'product_id', 'CASCADE', 'CASCADE');
            $this->forge->createTable('product_variants');
        } catch (\Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }
    public function down()
    {
        $this->forge->dropTable('product_variants');
    }
}
