<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductVariants extends Model
{
    protected $table            = 'product_variants';
    protected $primaryKey       = 'variant_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields = ['product_id', 'size', 'stock', 'price', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
