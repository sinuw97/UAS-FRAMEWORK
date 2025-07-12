<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<section>
  <div class="w-full h-[70px]"></div>

  <div class="flex justify-center">
    <div class="w-[70%] h-auto">
      <a href="<?= base_url('/products') ?>" class="flex gap-1">
        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="arrow-left" class="w-[35-px] h-[35px]">
          <path fill="#0E0E0E" d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"></path>
        </svg>
        <p class="text-[17pt] font-bold text-[#0E0E0E]">Back</p>
      </a>
      <div class="flex gap-3 mt-2 w-full h-auto font-poppins">
        <div class="w-[75%] h-auto border border-[#d7d7d7] shadow-md rounded-md py-2 px-5">
          <h2 class="text-2xl">My Cart</h2>
          <!-- Card -->
          <div class="flex flex-col gap-3 py-2">
            <?php foreach ($cart as $item): ?>
              <div class="bg-[#EEEEEE] rounded-sm w-full h-[140px] px-3 py-2">
                <div class="flex gap-3">
                  <div class="w-[20%] h-[120px] text-center">
                    <img src="<?= base_url('images/' . $item['type'] . '/' . $item['image']) ?>" alt="<?= esc($item["name"]) ?>" class="w-full h-full object-cover">
                  </div>
                  <div class="w-[80%] h-[120px]">
                    <h2 class="font-bold text-lg"><?= esc($item['name'])?></h2>
                    <p>Size: <?= esc($item['size']) ?></p>
                    <div class="flex items-center gap-2 w-[20%] h-[20%] mt-[20px]">
                      <button class="bg-[#C5A253] w-[20px] rounded-sm">+</button>
                      <span><?= esc($item['quantity']) ?></span>
                      <button class="bg-[#C5A253] w-[20px] rounded-sm">-</button>
                    </div>
                    <p>Price: Rp. <?= number_format($item['price'], 0, ',', '.') ?></p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="w-[30%] h-10 border border-black py-2 px-3">
          <h2 class="text-2xl">Order Summary</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>