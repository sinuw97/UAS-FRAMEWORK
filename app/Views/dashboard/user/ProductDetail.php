<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<section class="w-full mt-[75px] flex items-center justify-center">
  <div class="w-[70%] h-auto">
    <a href="<?= base_url('/products') ?>" class="flex gap-1">
      <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="arrow-left" class="w-[35-px] h-[35px]">
        <path fill="#0E0E0E" d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"></path>
      </svg>
      <p class="text-[17pt] font-bold text-[#0E0E0E]">Back</p>
    </a>

    <div class="h-auto py-3 mx-10 flex">
      <?php
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
      <div class="border border-black w-[35%] h-[400px]">
        <img src="<?= base_url('images/' . $type . '/' . $product->image) ?>" alt="<?= $product->name ?>" class="h-auto w-full h-64 object-cover">
      </div>
      <div class=" w-[65%] h-[400px] font-poppins pl-5">
        <!-- Product name -->
        <h2 class="text-2xl font-bold"><?= esc($product->name) ?></h2>
        <!-- Descriptions -->
        <div class="py-3">
          <p>
            <?= esc($product->description) ?>
          </p>
        </div>

        <p id="product-price" class="text-lg font-bold">Rp. <?= number_format($product->price, 0, ',', '.') ?></p>
        <span id="product-stock" class="text-sm">Stock: <?= esc($product->stock) ?></span>
        <p class="text-sm">Size</p>
        <div class="flex gap-3 pb-4">
          <?php foreach ($sizes as $size): ?>
            <div class="size-button w-[35px] h-[35px] border border-black text-center p-1 cursor-pointer" data-size="<?= esc($size) ?>">
              <?= esc($size) ?>
            </div>
          <?php endforeach; ?>
        </div>

        <form id="add-to-cart-form" method="post" action="<?= base_url('/cart/add') ?>">
          <?= csrf_field() ?>
          <input type="hidden" name="product_id" value="<?= $product->product_id ?>">
          <input type="hidden" name="size" id="selected-size" value="">
          <input type="hidden" name="quantity" value="1">
          <button type="submit" class="bg-[#C5A253] w-[34%] rounded-lg py-1 hover:bg-[#7C1313] hover:text-[#EEEEEE]">
            Add to cart
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
<script>
  let selectedSize = '';

  document.querySelectorAll('.size-button').forEach(btn => {
    btn.addEventListener('click', function() {
      const size = this.dataset.size;
      const productId = <?= $product->product_id ?>;

      fetch(`<?= base_url('product/variant') ?>/${productId}/${size}`)
        .then(response => response.json())
        .then(data => {
          document.getElementById('product-price').textContent = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR'
          }).format(data.price);
          document.getElementById('product-stock').textContent = 'Stok: ' + data.stock;
        });

      document.querySelectorAll('.size-button').forEach(b => {
        b.classList.remove('bg-[#7C1313]', 'text-white', 'border-[#7C1313]');
        b.classList.add('bg-white', 'text-black', 'border-black');
      });

      this.classList.add('bg-[#7C1313]', 'text-white', 'border-[#7C1313]');
      this.classList.remove('bg-white', 'text-black', 'border-black');
    });
  });

  document.querySelectorAll('.size-button').forEach(btn => {
    btn.addEventListener('click', function() {
      selectedSize = this.dataset.size;
      document.getElementById('selected-size').value = selectedSize;
    });
  });

  document.getElementById('add-to-cart-form').addEventListener('submit', function(e) {
    if (!selectedSize) {
      e.preventDefault();
      alert('Pilih size terlebih dahulu!');
    }
  });
</script>
<?= $this->endSection() ?>