<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('assets/css/tailwind.css') ?>" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&family=Great+Vibes&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Iskandar Batik</title>
</head>

<body>
    <nav class="absolute top-0 left-1/2 -translate-x-1/2 w-[70%] z-50 bg-[#7C1313] text-[#EEEEEE] py-2 shadow-md rounded-b-xl">
        <div class="flex justify-between items-center px-6">

            <div class="flex items-center gap-6">
                <div class="flex items-center gap-1">
                    <img src="<?= base_url('logo/logo.png') ?>" alt="logo-company" class="w-[50px] h-[50px]">
                    <p class="font-messiri text-sm text-center whitespace-nowrap">Iskandar Batik</p>
                </div>
                <div class="relative flex items-center w-[250px] md:w-[300px] font-poppins">
                    <input
                        type="text"
                        placeholder="Search"
                        class="text-[#EEEEEE] w-full pl-3 pr-9 py-1 rounded-lg text-sm focus:outline-none bg-[#D9D9D9]/45 placeholder-[#EEEEEE] focus:ring-1 focus:ring-[#EEEEEE]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-[#EEEEEE] absolute right-3 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </div>
            </div>

            <div class="flex gap-4 items-center text-sm">
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="hover:text-gray-300 transition flex items-center gap-1">
                        Product
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform" :class="{ 'rotate-180': open }" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false" x-transition
                        class="absolute bg-[#EEEEEE] text-black mt-2 rounded shadow-md w-40 z-50">
                        <a href="" class="block px-4 py-2 hover:bg-gray-100">Batik Pria</a>
                        <a href="" class="block px-4 py-2 hover:bg-gray-100">Batik Wanita</a>
                        <a href="" class="block px-4 py-2 hover:bg-gray-100">Batik Pasangan</a>
                        <a href="" class="block px-4 py-2 hover:bg-gray-100">Batik Anak</a>
                        <a href="" class="block px-4 py-2 hover:bg-gray-100">Sarung Batik</a>
                        <a href="" class="block px-4 py-2 hover:bg-gray-100">Kain Batik</a>
                    </div>
                </div>

                <a href="/product/my-cart" class="hover:text-gray-300 transition flex gap-1 whitespace-nowrap">
                    <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="shopping-basket" class="w-[20px] h-[20px]">
                        <path fill="#EEEEEE" d="M14,18a1,1,0,0,0,1-1V15a1,1,0,0,0-2,0v2A1,1,0,0,0,14,18Zm-4,0a1,1,0,0,0,1-1V15a1,1,0,0,0-2,0v2A1,1,0,0,0,10,18ZM19,6H17.62L15.89,2.55a1,1,0,1,0-1.78.9L15.38,6H8.62L9.89,3.45a1,1,0,0,0-1.78-.9L6.38,6H5a3,3,0,0,0-.92,5.84l.74,7.46a3,3,0,0,0,3,2.7h8.38a3,3,0,0,0,3-2.7l.74-7.46A3,3,0,0,0,19,6ZM17.19,19.1a1,1,0,0,1-1,.9H7.81a1,1,0,0,1-1-.9L6.1,12H17.9ZM19,10H5A1,1,0,0,1,5,8H19a1,1,0,0,1,0,2Z"></path>
                    </svg>My Cart
                </a>

                <a href=""
                    class="bg-[#EEEEEE] text-[#0E0E0E] px-2 rounded-lg hover:bg-gray-200 transition flex gap-1 whitespace-nowrap">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="user" class="w-[20px] h-[20px]">
                        <path fill="#0E0E0E" d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1,1,0,0,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1A10,10,0,0,0,15.71,12.71ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z"></path>
                    </svg>Sign In
                </a>
            </div>
        </div>
    </nav>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
         <?= $this->renderSection('footer') ?>
    </footer>
</body>

</html>