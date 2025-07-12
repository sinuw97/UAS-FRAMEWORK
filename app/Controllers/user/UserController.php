<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\CartModel;
use App\Models\ProductModel;
use App\Models\ProductVariants;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function showBeranda()
    {
        try {
            return view('dashboard/user/Dashboard');
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data.');
        }
    }
    public function showProduct()
    {
        try {
            $productModel = new ProductModel();
            // AMbil semua produk
            $all_product = $productModel->findAll();
            return view('dashboard/user/Product', ['products' => $all_product]);
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengambil data produk');
        }
    }
    public function showProductDetail($id)
    {
        try {
            $productModel = new ProductModel();

            $specific_product = $productModel->find($id);

            if (!$specific_product) {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Product not found');
            }

            $sizes = [];
            if ($specific_product->category_id == 1) {
                $sizes = ['XXL', 'XL', 'L', 'M', 'S'];
            } elseif ($specific_product->category_id == 2) {
                $sizes = ['XL', 'L', 'M', 'S', 'XS'];
            } else {
                $sizes = [];
            }

            $data = [
                "title" => "Detail Product",
                "product" => $specific_product,
                "sizes" => $sizes,
            ];

            return view('dashboard/user/ProductDetail', $data);
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengambil detail');
        }
    }
    // AMbil product variant
    public function getVariant($productId, $size)
    {
        try {
            $variantModel = new ProductVariants();
            $variant = $variantModel
                ->where('product_id', $productId)
                ->where('size', $size)->first();

            if ($variant) {
                return $this->response->setJSON([
                    'price' => $variant->price,
                    'stock' => $variant->stock,
                ]);
            } else {
                return $this->response->setJSON([
                    'price' => 0,
                    'stock' => 0,
                ]);
            }
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengambil data variant produk');
        }
    }
    public function showCart()
    {
        try {
            // Dari session
            $cart = session()->get('cart') ?? [];
            $data = [
                'title' => 'My Cart',
                'cart' => $cart
            ];

            return view('dashboard/user/Cart', $data);

            return view('dashboard/user/Cart');
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengambil cart');
        }
    }
    private function getCategoryName($categoryId)
    {
        $categories = [
            1 => 'pria',
            2 => 'wanita',
            3 => 'pasangan',
            4 => 'anak',
            5 => 'sarung',
            6 => 'kain'
        ];

        return $categories[$categoryId] ?? 'unknown';
    }
    public function addToCart()
    {
        try {
            $productId = $this->request->getPost('product_id');
            $size = $this->request->getPost('size');
            $quantity = $this->request->getPost('quantity') ?? 1;

            $productModel = new ProductModel();
            $variantModel = new ProductVariants();

            $product = $productModel->find($productId);
            if (!$product) {
                return redirect()->back()->with('error', 'Product not found');
            }
            $variant = $variantModel
                ->where('product_id', $productId)
                ->where('size', $size)
                ->first();

            if (!$variant) {
                return redirect()->back()->with('error', 'Variant not found');
            }

            $cart = session()->get('cart') ?? [];
            $cart[] = [
                'product_id' => $product->product_id,
                'name' => $product->name,
                'image' => $product->image,
                'type' => $this->getCategoryName($product->category_id),
                'size' => $size,
                'quantity' => $quantity,
                'price' => $variant->price ?? $product->price,
            ];

            session()->set('cart', $cart);

            return redirect()->to('/cart')->with('success', 'Product added to cart');
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return redirect()->back()->with('error', 'Failed to add to cart');
        }
    }
}
