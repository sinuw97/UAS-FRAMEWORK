<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductModel;

class AdminController extends BaseController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
        helper(['form']);
    }
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
            dd($e->getMessage());
        }
    }
    public function showAddProduct()
    {
        try {
            return view('dashboard/admin/product/AddProduct');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    private function getUploadFolder($categoryId)
    {
        switch ($categoryId) {
            case 1:
                return 'pria';
            case 2:
                return 'wanita';
            case 3:
                return 'pasangan';
            case 4:
                return 'anak';
            case 5:
                return 'sarung';
            case 6:
                return 'kain';
            default:
                return 'lainnya';
        }
    }

    public function addProduct()
    {
        try {
            $validation = \Config\Services::validation();
            $rules = [
                'name' => 'required|min_length[3]',
                'description' => 'required',
                'price' => 'required|numeric',
                'stock' => 'required|integer',
                'category' => 'required',
                'product-type' => 'required',
                'image' => 'uploaded[image]|is_image[image]|max_size[image,2048]',
            ];

            if (!$this->validate($rules)) {
                return redirect()->back()->withInput()->with('errors', $validation->getErrors());
            }

            $category_id = $this->request->getPost('category');
            $image = $this->request->getFile('image');

            if ($image->isValid() && !$image->hasMoved()) {
                $categoryFolder = $this->getUploadFolder($category_id);
                $imageName = $image->getRandomName();

                $uploadPath = 'images/' . $categoryFolder;
                if (!is_dir($uploadPath)) {
                    mkdir($uploadPath, 0777, true);
                }

                $image->move($uploadPath, $imageName);
            } else {
                return redirect()->back()->with('error', 'Gagal upload gambar');
            }

            $data = [
                'name' => $this->request->getPost('name'),
                'description' => $this->request->getPost('description'),
                'price' => $this->request->getPost('price'),
                'stock' => $this->request->getPost('stock'),
                'category_id' => $category_id,
                'product_type' => $this->request->getPost('product-type'),
                'image' => $imageName,
            ];

            $this->productModel->save($data);

            return redirect()->to('/admin/all-products')->with('success', 'Product added successfully.');
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
