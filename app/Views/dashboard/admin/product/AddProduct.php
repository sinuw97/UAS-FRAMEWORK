<?= $this->extend('layouts/admin_template') ?>

<?= $this->section('content') ?>
<section>
  <h1 class="text-2xl font-bold mb-6">Add Product</h1>

  <form action="<?= base_url('/admin/add-product') ?>" method="post" class="space-y-4" enctype="multipart/form-data">
    <div>
      <label for="name" class="block font-medium mb-1">Name:</label>
      <input type="text" id="name" name="name"
        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-[#7C1313]">
    </div>

    <div>
      <label for="description" class="block font-medium mb-1">Description:</label>
      <textarea id="description" name="description" rows="4"
        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-[#7C1313]"></textarea>
    </div>

    <div>
      <label for="price" class="block font-medium mb-1">Price:</label>
      <input type="text" id="price" name="price"
        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-[#7C1313]">
    </div>

    <div>
      <label for="stock" class="block font-medium mb-1">Stock:</label>
      <input type="text" id="stock" name="stock"
        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-[#7C1313]">
    </div>

    <div>
      <label for="category" class="block font-medium mb-1">Category:</label>
      <select id="category" name="category"
        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-[#7C1313]">
        <option value="1">Batik Pria</option>
        <option value="2">Batik Wanita</option>
        <option value="3">Batik Pasangan</option>
        <option value="4">Batik Anak</option>
        <option value="5">Sarung Batik</option>
        <option value="6">Kain Batik</option>
      </select>
    </div>

    <div>
      <label for="product-type" class="block font-medium mb-1">Product Type:</label>
      <select id="product-type" name="product-type"
        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-[#7C1313]">
        <option value="baju">Baju</option>
        <option value="kain">Kain</option>
      </select>
    </div>

    <div>
      <label for="image" class="block font-medium mb-1">Image:</label>
      <input type="file" id="image" name="image"
        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-[#7C1313]">
    </div>

    <div>
      <button type="submit"
        class="bg-blue-600 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-700 transition">
        Add Product
      </button>
    </div>
  </form>
</section>
<?= $this->endSection(); ?>