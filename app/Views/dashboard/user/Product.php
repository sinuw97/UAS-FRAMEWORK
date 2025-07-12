<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<!-- Hero  -->
<section class="relative h-[500px] flex items-center justify-center text-center px-4"
  style="background-image: url('<?= base_url('images/background/hero-product 1.svg') ?>'); background-size: cover; background-position: center;">
  <div class="absolute inset-0 bg-black bg-opacity-40"></div>

  <div class="relative z-10 text-[#EEEEEE] flex flex-col md:flex-row justify-between items-center w-full max-w-7xl mx-auto px-8 md:px-24">
    <div class="w-full md:w-[260px] text-center p-2 md:p-0">
      <h3 class="text-3xl md:text-4xl font-poppins font-bold leading-tight">
        Discover the <br> Art of Timeless Batik
      </h3>
    </div>
    <div class="w-full md:w-[260px] text-center p-2 md:p-0 mt-8 md:mt-0">
      <h3 class="text-3xl md:text-4xl font-poppins font-bold leading-tight">
        Explore Our Exclusive Batik Selection
      </h3>
    </div>
  </div>
</section>

<!-- Produk Baju -->
<section class="max-w-6xl mx-auto p-4 py-12">
  <!-- Header -->
  <div class="flex justify-between items-center mb-8">
    <h2 class="text-3xl font-poppins font-semibold text-[#333]">Our Batik Collections</h2>
    <div class="flex flex-wrap gap-x-6 gap-y-2 text-base font-medium text-gray-700">
      <span class="cursor-pointer hover:text-[#7C1313] transition duration-200">Pria</span>
      <span class="cursor-pointer hover:text-[#7C1313] transition duration-200">Wanita</span>
      <span class="cursor-pointer hover:text-[#7C1313] transition duration-200">Pasangan</span>
      <span class="cursor-pointer hover:text-[#7C1313] transition duration-200">Anak</span>
    </div>
  </div>
  <!-- Card Product -->
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
        <img src="<?= base_url('images/' . $type . '/' .$product->image) ?>" alt="<?= $product->name ?>" class="w-full h-64 object-cover">
        <div class="p-4">
          <a href="<?= base_url('/product/detail/' . $product->product_id) ?>" class="font-poppins text-lg font-semibold text-[#333] mb-1 leading-tight"><?= mb_strimwidth($product->name, 0, 21, "...") ?></a>
          <p class="font-poppins text-xl font-bold text-[#7C1313] mb-1">Rp <?= number_format($product->price, 0, ',', '.') ?></p>
          <p class="text-gray-600 text-sm">Stok: <?= $product->stock ?></p>
          <button class="mt-4 w-full bg-[#C5A253] text-[0E0E0E] py-2.5 rounded-md text-sm font-semibold hover:bg-[#A02020] hover:text-[#EEEEEE] transition-colors duration-300">
            Add to cart
          </button>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- Banner -->
<section class="relative h-[500px] flex items-center justify-center text-center px-4"
  style="background-image: url('<?= base_url('images/background/kain-batik.webp') ?>'); background-size: cover; background-position: center;">
  <div class="absolute inset-0 bg-black bg-opacity-40"></div>

  <div class="relative z-10 text-[#EEEEEE] flex flex-col md:flex-row justify-between items-center w-full max-w-7xl mx-auto px-8 md:px-24">
    <div class="w-full md:w-[450px] text-center p-2 md:p-0 ">
      <h3 class="text-2xl md:text-3xl font-poppins font-bold leading-tight">
        Discover pieces that carry the story of Indonesian craftsmanship
      </h3>
    </div>
  </div>
</section>

<!-- Produk kain dan Sarung-->
<section class="max-w-6xl mx-auto p-4 py-12">
  <!-- Header -->
  <div class="flex justify-between items-center mb-8">
    <h2 class="text-3xl font-poppins font-semibold text-[#333]">Our Collection Kain Batik</h2>
    <div class="flex flex-wrap gap-x-6 gap-y-2 text-base font-medium text-gray-700">
      <span class="cursor-pointer hover:text-[#7C1313] transition duration-200">Sarung Batik</span>
      <span class="cursor-pointer hover:text-[#7C1313] transition duration-200">Kain Batik</span>
    </div>
  </div>
  <!-- Card Product -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
      <img src="<?= base_url('images/pria/kemeja_bangau_pekalongan.jpg') ?>" alt="Kemeja Lunar New Year" class="w-full h-64 object-cover">
      <div class="p-4">
        <h3 class="font-poppins text-lg font-semibold text-[#333] mb-1 leading-tight">Kemeja Lunar New Year</h3>
        <p class="font-poppins text-xl font-bold text-[#7C1313] mb-1">Rp 999.999</p>
        <p class="text-gray-600 text-sm">Stok: 999</p>
        <button class="mt-4 w-full bg-[#C5A253] text-[0E0E0E] py-2.5 rounded-md text-sm font-semibold hover:bg-[#A02020] hover:text-[#EEEEEE] transition-colors duration-300">
          Add to cart
        </button>
      </div>
    </div>
    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
      <img src="<?= base_url('images/pria/kemeja_barong_biru_pendek.jpeg') ?>" alt="Kemeja Lunar New Year" class="w-full h-64 object-cover">
      <div class="p-4">
        <h3 class="font-poppins text-lg font-semibold text-[#333] mb-1 leading-tight">Kemeja Lunar New Year</h3>
        <p class="font-poppins text-xl font-bold text-[#7C1313] mb-1">Rp 999.999</p>
        <p class="text-gray-600 text-sm">Stok: 999</p>
        <button class="mt-4 w-full bg-[#C5A253] text-[0E0E0E] py-2.5 rounded-md text-sm font-semibold hover:bg-[#A02020] hover:text-[#EEEEEE] transition-colors duration-300">
          Add to cart
        </button>
      </div>
    </div>
    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
      <img src="<?= base_url('images/pria/kemeja_barong_flora.jpeg') ?>" alt="Kemeja Lunar New Year" class="w-full h-64 object-cover">
      <div class="p-4">
        <h3 class="font-poppins text-lg font-semibold text-[#333] mb-1 leading-tight">Kemeja Lunar New Year</h3>
        <p class="font-poppins text-xl font-bold text-[#7C1313] mb-1">Rp 999.999</p>
        <p class="text-gray-600 text-sm">Stok: 999</p>
        <button class="mt-4 w-full bg-[#C5A253] text-[0E0E0E] py-2.5 rounded-md text-sm font-semibold hover:bg-[#A02020] hover:text-[#EEEEEE] transition-colors duration-300">
          Add to cart
        </button>
      </div>
    </div>
    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
      <img src="<?= base_url('images/pria/kemeja_lunar.jpg') ?>" alt="Kemeja Lunar New Year" class="w-full h-64 object-cover">
      <div class="p-4">
        <h3 class="font-poppins text-lg font-semibold text-[#333] mb-1 leading-tight">Kemeja Lunar New Year</h3>
        <p class="font-poppins text-xl font-bold text-[#7C1313] mb-1">Rp 999.999</p>
        <p class="text-gray-600 text-sm">Stok: 999</p>
        <button class="mt-4 w-full bg-[#C5A253] text-[0E0E0E] py-2.5 rounded-md text-sm font-semibold hover:bg-[#A02020] hover:text-[#EEEEEE] transition-colors duration-300">
          Add to cart
        </button>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('footer') ?>
<footer class="bg-[#0E0E0E] text-[#EEEEEE] font-poppins py-8">
  <div class="container mx-auto px-[150px] flex flex-wrap justify-between gap-8">
    <div class="w-full md:w-1/3 flex flex-col gap-4">
      <div class="flex items-center gap-3">
        <img src="<?= base_url('logo/logo.png') ?>" alt="Logo Iskandar" class="w-[75px] h-[75px]">
        <h1 class="text-2xl font-messiri leading-tight">ISKANDAR <br> BATIK</h1>
      </div>
      <p class="text-sm">Our contact. Follow our social media on Instagram</p>

      <div class="flex items-center gap-2 text-[#EEEEEE]/80 text-sm">
        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" id="whatsapp" class="w-[20px] h-[20px]">
          <path fill="#C5A253" d="M16.6 14c-.2-.1-1.5-.7-1.7-.8-.2-.1-.4-.1-.6.1-.2.2-.6.8-.8 1-.1.2-.3.2-.5.1-.7-.3-1.4-.7-2-1.2-.5-.5-1-1.1-1.4-1.7-.1-.2 0-.4.1-.5.1-.1.2-.3.4-.4.1-.1.2-.3.2-.4.1-.1.1-.3 0-.4-.1-.1-.6-1.3-.8-1.8-.1-.7-.3-.7-.5-.7h-.5c-.2 0-.5.2-.6.3-.6.6-.9 1.3-.9 2.1.1.9.4 1.8 1 2.6 1.1 1.6 2.5 2.9 4.2 3.7.5.2.9.4 1.4.5.5.2 1 .2 1.6.1.7-.1 1.3-.6 1.7-1.2.2-.4.2-.8.1-1.2l-.4-.2m2.5-9.1C15.2 1 8.9 1 5 4.9c-3.2 3.2-3.8 8.1-1.6 12L2 22l5.3-1.4c1.5.8 3.1 1.2 4.7 1.2 5.5 0 9.9-4.4 9.9-9.9.1-2.6-1-5.1-2.8-7m-2.7 14c-1.3.8-2.8 1.3-4.4 1.3-1.5 0-2.9-.4-4.2-1.1l-.3-.2-3.1.8.8-3-.2-.3c-2.4-4-1.2-9 2.7-11.5S16.6 3.7 19 7.5c2.4 3.9 1.3 9-2.6 11.4"></path>
        </svg>
        <span>0123456789</span>
      </div>

      <div class="flex items-center gap-2 text-[#EEEEEE]/80 text-sm">
        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="instagram" class="w-[20px] h-[20px]">
          <path fill="#C5A253" d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z"></path>
        </svg>
        <span>iskandarbatik</span>
      </div>

      <div class="flex items-center gap-2 text-[#EEEEEE]/80 text-sm">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="at" class="w-[20px] h-[20px]">
          <path fill="#C5A253" d="M12,2a10,10,0,1,0,5,18.66,1,1,0,1,0-1-1.73A8,8,0,1,1,20,12v.75a1.75,1.75,0,0,1-3.5,0V8.5a1,1,0,0,0-1-1,1,1,0,0,0-1,.79A4.45,4.45,0,0,0,12,7.5,4.5,4.5,0,1,0,15.3,15,3.74,3.74,0,0,0,22,12.75V12A10,10,0,0,0,12,2Zm0,12.5A2.5,2.5,0,1,1,14.5,12,2.5,2.5,0,0,1,12,14.5Z"></path>
        </svg>
        <span>iskandarbatik@gmail.com</span>
      </div>

      <p class="text-sm">Jalan lorem ipsum dolor it, Surakarta, Jawa Tengah, Indonesia</p>
    </div>
    <!-- Quick Links -->
    <div class="w-full md:w-1/4">
      <p class="text-[15pt] border-b border-[#C5A253] pb-1 inline-block">Quick Links</p>
      <div class="flex flex-col gap-2 text-sm text-[#EEEEEE]/70 pt-4">
        <a href="">About Us</a>
        <a href="">Delivery Information</a>
        <a href="">Privacy Policy</a>
        <a href="">Brands</a>
        <a href="">Contact Us</a>
        <a href="">Location</a>
        <a href="">Products Return</a>
        <a href="">FAQs</a>
      </div>
    </div>
    <!--Company Info -->
    <div class="w-full md:w-1/4">
      <p class="text-[15pt] border-b border-[#C5A253] pb-1 inline-block">Company Informations</p>
      <div class="flex flex-col gap-2 text-sm text-[#EEEEEE]/70 pt-4">
        <a href="">Newsletter</a>
        <a href="">Blog Post</a>
      </div>
    </div>

  </div>
</footer>
<?= $this->endSection() ?>