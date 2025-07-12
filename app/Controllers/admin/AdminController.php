<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductModel;

class AdminController extends BaseController
{
    public function showDashboard()
    {
        return view('dashboard/admin/Dashboard');
    }
    public function showProduct()
    {
        try {
            $productModel = new ProductModel();
            // AMbil semua produk
            $all_product = $productModel->findAll();
            return view('dashboard/admin/Product', ['products' => $all_product]);
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengambil data produk');
        }
    }
    public function showAddProduct()
    {
        try {
            return view('dashboard/admin/product/AddProduct');
        } catch (\Exception $e) {
        }
    }
}
