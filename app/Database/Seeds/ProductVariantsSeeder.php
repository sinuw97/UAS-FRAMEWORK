<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use App\Models\ProductModel;

class ProductVariantsSeeder extends Seeder
{
    public function run()
    {
        $productModel = new ProductModel();
        $products = $productModel->findAll();

        $variants = [];

        foreach ($products as $product) {
            $sizes = [];
            $price = $product->price;
            $stock = (int)$product->stock;

            if ($product->category_id == 1) {
                $sizes = ['XXL', 'XL', 'L', 'M', 'S'];
                $pricePercents = [1.00, 0.98, 0.96, 0.94, 0.92];
            } elseif ($product->category_id == 2) {
                $sizes = ['XL', 'L', 'M', 'S', 'XS'];
                $pricePercents = [1.00, 0.98, 0.96, 0.94, 0.92];
            } else {
                continue;
            }

            $stockPerSize = floor($stock / count($sizes));

            foreach ($sizes as $index => $size) {
                $variantPrice = floor($price * $pricePercents[$index]);
                $variants[] = [
                    'product_id' => $product->product_id,
                    'size'       => $size,
                    'stock'      => $stockPerSize,
                    'price'      => $variantPrice,
                    'created_at' => Time::now(),
                    'updated_at' => Time::now(),
                ];
            }
        }

        $this->db->table('product_variants')->insertBatch($variants);
    }
}
