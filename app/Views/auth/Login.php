<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Memuat Tailwind CSS dari CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Memuat Lucide Icons dari CDN untuk ikon -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Menyembunyikan ikon Lucide secara default dan menampilkannya setelah diinisialisasi */
        .lucide {
            display: inline-block;
        }
    </style>
</head>
<body class="h-screen flex items-center justify-center bg-gray-100">
    <!-- Kontainer utama yang membagi halaman menjadi dua kolom -->
    <div class="flex flex-col md:flex-row w-full max-w-4xl h-full md:h-3/4 bg-white rounded-lg shadow-lg overflow-hidden">

        <!-- Bagian Kiri: Logo -->
        <div class="md:w-1/2 flex items-center justify-center p-8 bg-white">
            <!-- Path logo telah diperbarui sesuai struktur folder Anda: public/img/logo.png -->
            <img src="<?php echo base_url('logo/logo.png'); ?>" alt="" class="max-w-full h-auto rounded-full">
        </div>

        <!-- Bagian Kanan: Formulir Login -->
        <div class="md:w-1/2 flex flex-col items-center justify-center p-8 bg-gray-300">
            <h2 class="text-3xl font-bold mb-8 text-gray-800">Login</h2>

            <form action="#" method="POST" class="w-full max-w-sm">
                <!-- Input Email -->
                <div class="mb-6 relative">
                    <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">
                        <i data-lucide="mail" class="w-5 h-5"></i>
                    </span>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Email"
                        class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#7C1313] transition duration-200"
                        required
                    >
                </div>

                <!-- Input Password -->
                <div class="mb-8 relative">
                    <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">
                        <i data-lucide="lock" class="w-5 h-5"></i>
                    </span>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Password"
                        class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#7C1313] transition duration-200"
                        required
                    >
                </div>

                <!-- Tombol Login -->
                <button
                    type="submit"
                    class="w-full bg-[#7C1313] text-white py-3 rounded-lg hover:bg-[#C5A253] focus:outline-none focus:ring-2 focus:ring-[#7C1313] focus:ring-offset-2 transition duration-200 font-semibold shadow-md"
                >
                    Log In
                </button>
            </form>
        </div>
    </div>

    <!-- Skrip untuk menginisialisasi ikon Lucide -->
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
