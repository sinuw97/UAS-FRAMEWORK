<?= $this->extend('layouts/admin_template') ?>

<?= $this->section('content') ?>
<section>
  <h1 class="text-2xl font-bold mb-4">Dashboard</h1>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
    <!-- Card 1 -->
    <div class="bg-white p-4 rounded shadow">
      <h2 class="text-lg font-semibold">Total Products</h2>
      <p class="text-2xl font-bold mt-2">120</p>
    </div>
    <!-- Card 2 -->
    <div class="bg-white p-4 rounded shadow">
      <h2 class="text-lg font-semibold">Total Orders</h2>
      <p class="text-2xl font-bold mt-2">35</p>
    </div>
    <!-- Card 3 -->
    <div class="bg-white p-4 rounded shadow">
      <h2 class="text-lg font-semibold">Total Users</h2>
      <p class="text-2xl font-bold mt-2">80</p>
    </div>
  </div>

  <!-- Table Example -->
  <div class="bg-white p-4 rounded shadow">
    <h2 class="text-lg font-semibold mb-4">Recent Orders</h2>
    <table class="w-full text-left border">
      <thead class="bg-[#7C1313] text-white">
        <tr>
          <th class="p-2">Order ID</th>
          <th class="p-2">Customer</th>
          <th class="p-2">Status</th>
          <th class="p-2">Total</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-t">
          <td class="p-2">#001</td>
          <td class="p-2">John Doe</td>
          <td class="p-2">Pending</td>
          <td class="p-2">Rp. 250,000</td>
        </tr>
        <tr class="border-t">
          <td class="p-2">#002</td>
          <td class="p-2">Jane Smith</td>
          <td class="p-2">Completed</td>
          <td class="p-2">Rp. 300,000</td>
        </tr>
        <tr class="border-t">
          <td class="p-2">#003</td>
          <td class="p-2">Alice Brown</td>
          <td class="p-2">Shipped</td>
          <td class="p-2">Rp. 150,000</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>
<?= $this->endSection(); ?>