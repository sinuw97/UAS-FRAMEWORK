<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex min-h-screen bg-gray-100 font-sans">
    <!-- Sidebar -->
    <aside class="fixed top-0 left-0 h-screen w-64 bg-[#ffffff] text-[#7C1313] font-bold flex flex-col">
        <div class="p-4 text-center text-xl font-bold border-b border-[#7C1313]">
            Admin Panel
        </div>
        <nav class="flex-1 p-4 space-y-2">
            <a href="<?= base_url('admin/dashboard') ?>" class="block p-2 rounded hover:bg-[#C5A253] hover:text-[#EEEEEE]">Dashboard</a>
            <a href="<?= base_url('admin/all-products') ?>" class="block p-2 rounded hover:bg-[#C5A253] hover:text-[#EEEEEE]">Products</a>
            <a href="<?= base_url('admin/all-orders') ?>" class="block p-2 rounded hover:bg-[#C5A253] hover:text-[#EEEEEE]">Orders</a>
            <a href="<?= base_url('admin/users') ?>" class="block p-2 rounded hover:bg-[#C5A253] hover:text-[#EEEEEE]">Users</a>
            <a href="#" class="block p-2 rounded hover:bg-[#C5A253] hover:text-[#EEEEEE]">Logout</a>
        </nav>
        <div class="p-4 text-sm text-center border-t border-[#7C1313]">
            &copy; <?= date('Y') ?> Iskandar Batik
        </div>
    </aside>

    <!-- Main Content -->
    <main class="ml-64 flex-1 p-6">
        <?= $this->renderSection('content') ?>
    </main>
</body>
</html>