<?= $this->extend('layouts/admin_template') ?>

<?= $this->section('content') ?>
<section>
  <div class="mb-5">
    <h1 class="text-2xl font-bold mb-4">All Product</h1>
    <a href="<?= base_url('/admin/all-products/add-product') ?>" class="flex items-center gap-1 px-2 py-1 bg-[#7C1313] w-[90px] text-[#EEEEEE] rounded-md">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="plus" class="w-[30px] h-[30px]">
        <path fill="#EEEEEE" d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"></path>
      </svg>
      <p>Add</p>
    </a>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    <?php foreach ($products as $product):
      $type = '';
      if ($product->category_id == 1) {
        $type = 'pria';
      } elseif ($product->category_id == 2) {
        $type = 'wanita';
      } elseif ($product->category_id == 3) {
        $type = 'pasangan';
      } elseif ($product->category_id == 4) {
        $type = 'anak';
      } elseif ($product->category_id == 5) {
        $type = 'sarung';
      } elseif ($product->category_id == 6) {
        $type = 'kain';
      }
    ?>
      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <img src="<?= base_url('images/' . $type . '/' . $product->image) ?>" alt="<?= $product->name ?>" class="w-full h-64 object-cover">
        <div class="p-4">
          <a href="<?= base_url('/product/detail/' . $product->product_id) ?>" class="font-poppins text-lg font-semibold text-[#333] mb-1 leading-tight"><?= mb_strimwidth($product->name, 0, 21, "...") ?></a>
          <p class="font-poppins text-xl font-bold text-[#7C1313] mb-1">Rp <?= number_format($product->price, 0, ',', '.') ?></p>
          <p class="text-gray-600 text-sm">Stok: <?= $product->stock ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<?= $this->endSection(); ?>