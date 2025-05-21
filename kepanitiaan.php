<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UC Collab | Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="bg-gradient-to-r from-orange-500 to-orange-400 flex items-center justify-between px-6 py-3 shadow-md">
        <a href="#" class="flex items-center">
            <img src="pic/logo.svg" alt="UC Collab Logo" class="h-10 w-auto">
        </a>
        <ul class="flex items-center space-x-6 text-white font-medium">
            <li><a href="#" class="text-white hover:text-gray-100 border-b-2 border-white drop-shadow">Beranda</a></li>
            <li><a href="#" class="text-white hover:text-gray-100 drop-shadow">Kepanitiaan</a></li>
            <li><a href="#" class="text-white hover:text-gray-100 drop-shadow">Daftar</a></li>
            <li>
            <a href="#" class="bg-white text-orange-500 px-4 py-1 rounded-full font-semibold drop-shadow hover:bg-gray-100 transition">
                Masuk
            </a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header class="relative bg-cover bg-center text-white h-[500px] flex items-center justify-center"
        style="background-image: url('pic/header.png')">
        <div class="bg-black bg-opacity-60 p-8 rounded-xl text-center">
            <h1 class="text-4xl font-bold mb-4 drop-shadow-lg">Daftar Kepanitiaan</h1>
            <a href="#"><button class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-2 rounded-full shadow-lg">
                Telusuri
            </button></a>
        </div>
    </header>

    <!-- Daftar Kepanitiaan -->
    <section class="py-10 px-4 md:px-16 bg-white">
        <!-- Search Bar -->
        <div class="flex justify-center mb-8">
            <div class="relative w-full max-w-md">
            <input
                type="text"
                placeholder="Cari"
                class="w-full pl-4 pr-12 py-2 border border-gray-300 rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-400"
            />
            <button
                class="absolute right-1 top-1/2 -translate-y-1/2 bg-orange-400 hover:bg-orange-500 text-white px-4 py-1.5 rounded-full text-sm"
            >
                Cari
            </button>
            </div>
        </div>

        <!-- Title -->
        <h2 class="text-2xl font-bold text-center mb-8">Daftar Kepanitiaan</h2>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card Component Start -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden border hover:shadow-lg transition">
            <img src="pic/o-week.png" alt="O-Week" class="w-full h-40 object-cover">
            <div class="p-4 space-y-2">
                <h3 class="text-lg font-semibold">O-Week 2025</h3>
                <p class="text-sm text-gray-600 flex items-center gap-1">
                <img src="pic/univ-icon.svg" alt="" class="w-4 h-4"> Universitas Ciputra
                </p>
                <p class="text-sm text-gray-600 flex items-center gap-1">
                <img src="pic/time-icon.svg" alt="" class="w-4 h-4"> APR 2025 • 100 posisi terbuka
                </p>
                <button class="mt-2 bg-orange-400 hover:bg-orange-500 text-white text-sm px-4 py-2 rounded-full">Daftar</button>
            </div>
            </div>
            <!-- Card Component End -->
        </div>
    </section>


    <!--  -->
    <footer class="relative bg-[#243D4A] text-white px-10 py-8 overflow-hidden">
        <!-- Decorative Circle -->
        <img src="pic/circle-3.png" alt=""  
            class="absolute -top-5 -left-40 md:left-0 w-[100px] h-full w-auto z-0 opacity-50 pointer-events-none select-none">

        <!-- Main Content -->
        <div class="relative z-10 flex flex-col md:flex-row justify-between items-start gap-10">
            <!-- Logo Area -->
            <div class="flex items-center gap-4">
            <img src="pic/logo.svg" alt="UC Collab Logo" class="h-auto">
            </div>

            <!-- Contact Info -->
            <div class="flex flex-col gap-2 text-sm">
            <h3 class="font-semibold text-lg mb-2">Kontak Kami</h3>
            <div class="flex items-center gap-2">
                <img src="pic/socials/Mail.svg" alt="" class="w-4 h-4">
                <span>clarstasia@gmail.com</span>
            </div>
            <div class="flex items-center gap-2">
                <img src="pic/socials/Instagram.svg" alt="" class="w-4 h-4">
                <span>@clarstasia</span>
            </div>
            <div class="flex items-center gap-2">
                <img src="pic/socials/YouTube.svg" alt="" class="w-5 h-">
                <span>Demo Video Link</span>
            </div>
            </div>

            <!-- Tautan -->
            <div class="flex flex-col gap-2 text-sm">
            <h3 class="font-semibold text-lg mb-2">Tautan</h3>
            <a href="#">Beranda</a>
            <a href="#">Kepanitiaan</a>
            <a href="#">Daftar</a>
            <a href="#">Masuk</a>
            </div>
        </div>

        <!-- Bottom -->
        <div class="relative z-10 mt-6 text-xs text-center md:text-left">
            © 2025 Anastasia Eugene Maylinda and Clarice Harijanto. All rights reserved
        </div>
    </footer>


</body>
</html>