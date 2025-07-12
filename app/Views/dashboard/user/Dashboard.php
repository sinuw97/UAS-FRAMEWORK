<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<!-- Hero / Banner -->
<section
  class="relative h-[500px] flex items-center justify-center text-center px-4"
  style="background-image: url('<?= base_url('images/background/header-beranda.webp') ?>'); background-size: cover; background-position: center;">
  <div class="absolute inset-0 bg-black bg-opacity-40"></div>

  <div class="relative z-10 text-[#EEEEEE]">
    <h1 class="text-4xl md:text-5xl font-poppins font-bold leading-tight">
      Elevate Your Style <br> with Authentic Batik
    </h1>
    <a href="<?= base_url('products') ?>" class="mt-8 inline-block bg-[#7C1313] text-white py-3 px-8 rounded-full text-lg font-semibold hover:bg-[#A02020] transition-colors duration-300">
      Explore Collection
    </a>
  </div>
</section>

<!-- Our Collections -->
<?= $this->endSection() ?>