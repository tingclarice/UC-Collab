<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UC Collab | Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FFFEF8]">
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
    <div class="flex justify-center items-center gap-2 mb-8">
        <input type="text" placeholder="Cari kepanitiaan..."
        class="shadow-md border rounded-full px-4 py-2 w-[250px] focus:outline-none" />
        <button class="shadow-md bg-orange-400 hover:bg-orange-500 text-white font-semibold px-4 py-2 rounded-full">
        
        Cari
        </button>
    </div>

    <!-- Section Title -->
    <h2 class="text-center text-xl font-bold mb-6">Daftar Kepanitiaan</h2>

    <!-- Grid of Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
        <!-- Card O-Week -->
        <div class="bg-[#FFE8D9] border border-black rounded-xl shadow p-3">
        <img src="pic/kepanitiaan/oweek.PNG" alt="O-Week 2025" class="rounded-lg mb-3 h-40 w-full object-cover" />
        <h3 class="font-semibold text-center -mb-2 text-lg">O-Week 2025</h3>
        <div class="flex justify-center gap-4 text-sm text-gray-500 mb-4">
            <div class="flex items-center gap-3 mt-4">
        <!-- Calendar -->
        <div class="bg-white text-center text-sm font-semibold rounded-xl shadow px-2 py-1 leading-tight w-14 h-16 flex flex-col justify-center items-center">
            <div class="text-xs text-gray-500 uppercase">Apr</div>
            <div class="text-lg text-black leading-none">4</div>
            <div class="text-[10px] text-gray-500">2025</div>
        </div>

        <!-- Event Info -->
        <div class="text-sm">
            <p class="flex items-center gap-2 text-gray-800">
            <img src="pic/kepanitiaan/penyelenggara-icon.png" class="w-4 h-4" /> Universitas Ciputra
            </p>
            <p class="flex items-center gap-2 text-gray-800">
            <img src="pic/kepanitiaan/posisi-icon.png" class="w-4 h-4" /> 100 posisi terbuka
            </p>
        </div>
        </div>

        </div>
        <button class="shadow-md w-full bg-orange-400 hover:bg-orange-500 text-white py-2 rounded-full font-semibold">
            Daftar
        </button>
        </div>

        <!-- Card Bounceback 2025 -->
        <div class="bg-[#FFE8D9] border border-black rounded-xl shadow p-3">
        <img src="pic/kepanitiaan/bounceback.jpg" alt="O-Week 2025" class="rounded-lg mb-3 h-40 w-full object-cover" />
        <h3 class="font-semibold text-center -mb-2 text-lg">Bounceback 2025</h3>
        <div class="flex justify-center gap-4 text-sm text-gray-500 mb-4">
            <div class="flex items-center gap-3 mt-4">
        <!-- Calendar -->
        <div class="bg-white text-center text-sm font-semibold rounded-xl shadow px-2 py-1 leading-tight w-14 h-16 flex flex-col justify-center items-center">
            <div class="text-xs text-gray-500 uppercase">Apr</div>
            <div class="text-lg text-black leading-none">4</div>
            <div class="text-[10px] text-gray-500">2025</div>
        </div>

        <!-- Event Info -->
        <div class="text-sm">
            <p class="flex items-center gap-2 text-gray-800">
            <img src="pic/kepanitiaan/penyelenggara-icon.png" class="w-4 h-4" /> Universitas Ciputra
            </p>
            <p class="flex items-center gap-2 text-gray-800">
            <img src="pic/kepanitiaan/posisi-icon.png" class="w-4 h-4" /> 100 posisi terbuka
            </p>
        </div>
        </div>

        </div>
        <button class="shadow-md w-full bg-orange-400 hover:bg-orange-500 text-white py-2 rounded-full font-semibold">
            Daftar
        </button>
        </div>

        <!-- Card CoFFEE 2025 -->
        <div class="bg-[#FFE8D9] border border-black rounded-xl shadow p-3">
        <img src="pic/kepanitiaan/coffee.PNG" alt="O-Week 2025" class="rounded-lg mb-3 h-40 w-full object-cover" />
        <h3 class="font-semibold text-center -mb-2 text-lg">CoFFEE 2025</h3>
        <div class="flex justify-center gap-4 text-sm text-gray-500 mb-4">
            <div class="flex items-center gap-3 mt-4">
        <!-- Calendar -->
        <div class="bg-white text-center text-sm font-semibold rounded-xl shadow px-2 py-1 leading-tight w-14 h-16 flex flex-col justify-center items-center">
            <div class="text-xs text-gray-500 uppercase">Apr</div>
            <div class="text-lg text-black leading-none">4</div>
            <div class="text-[10px] text-gray-500">2025</div>
        </div>

        <!-- Event Info -->
        <div class="text-sm">
            <p class="flex items-center gap-2 text-gray-800">
            <img src="pic/kepanitiaan/penyelenggara-icon.png" class="w-4 h-4" /> Universitas Ciputra
            </p>
            <p class="flex items-center gap-2 text-gray-800">
            <img src="pic/kepanitiaan/posisi-icon.png" class="w-4 h-4" /> 100 posisi terbuka
            </p>
        </div>
        </div>

        </div>
        <button class="shadow-md w-full bg-orange-400 hover:bg-orange-500 text-white py-2 rounded-full font-semibold">
            Daftar
        </button>
        </div>

        <!-- Card Ohanami Festival -->
        <div class="bg-[#FFE8D9] border border-black rounded-xl shadow p-3">
        <img src="pic/kepanitiaan/ohanami.png" alt="O-Week 2025" class="rounded-lg mb-3 h-40 w-full object-cover" />
        <h3 class="font-semibold text-center -mb-2 text-lg">Ohanami Festival</h3>
        <div class="flex justify-center gap-4 text-sm text-gray-500 mb-4">
            <div class="flex items-center gap-3 mt-4">
        <!-- Calendar -->
        <div class="bg-white text-center text-sm font-semibold rounded-xl shadow px-2 py-1 leading-tight w-14 h-16 flex flex-col justify-center items-center">
            <div class="text-xs text-gray-500 uppercase">Apr</div>
            <div class="text-lg text-black leading-none">4</div>
            <div class="text-[10px] text-gray-500">2025</div>
        </div>

        <!-- Event Info -->
        <div class="text-sm">
            <p class="flex items-center gap-2 text-gray-800">
            <img src="pic/kepanitiaan/penyelenggara-icon.png" class="w-4 h-4" /> Universitas Ciputra
            </p>
            <p class="flex items-center gap-2 text-gray-800">
            <img src="pic/kepanitiaan/posisi-icon.png" class="w-4 h-4" /> 100 posisi terbuka
            </p>
        </div>
        </div>

        </div>
        <button class="shadow-md w-full bg-orange-400 hover:bg-orange-500 text-white py-2 rounded-full font-semibold">
            Daftar
        </button>
        </div>

        <!-- Narcobye 3.0 -->
        <div class="bg-[#FFE8D9] border border-black rounded-xl shadow p-3">
        <img src="pic/kepanitiaan/narcobye.jpg" alt="O-Week 2025" class="rounded-lg mb-3 h-40 w-full object-cover" />
        <h3 class="font-semibold text-center -mb-2 text-lg">Narcobye 3.0</h3>
        <div class="flex justify-center gap-4 text-sm text-gray-500 mb-4">
            <div class="flex items-center gap-3 mt-4">
        <!-- Calendar -->
        <div class="bg-white text-center text-sm font-semibold rounded-xl shadow px-2 py-1 leading-tight w-14 h-16 flex flex-col justify-center items-center">
            <div class="text-xs text-gray-500 uppercase">Apr</div>
            <div class="text-lg text-black leading-none">4</div>
            <div class="text-[10px] text-gray-500">2025</div>
        </div>

        <!-- Event Info -->
        <div class="text-sm">
            <p class="flex items-center gap-2 text-gray-800">
            <img src="pic/kepanitiaan/penyelenggara-icon.png" class="w-4 h-4" /> Universitas Ciputra
            </p>
            <p class="flex items-center gap-2 text-gray-800">
            <img src="pic/kepanitiaan/posisi-icon.png" class="w-4 h-4" /> 100 posisi terbuka
            </p>
        </div>
        </div>

        </div>
        <button class="shadow-md w-full bg-orange-400 hover:bg-orange-500 text-white py-2 rounded-full font-semibold">
            Daftar
        </button>
        </div>

        <!-- Mindspace -->
        <div class="bg-[#FFE8D9] border border-black rounded-xl shadow p-3">
        <img src="pic/kepanitiaan/mindspace.jpg" alt="O-Week 2025" class="rounded-lg mb-3 h-40 w-full object-cover" />
        <h3 class="font-semibold text-center -mb-2 text-lg">Mindspace</h3>
        <div class="flex justify-center gap-4 text-sm text-gray-500 mb-4">
            <div class="flex items-center gap-3 mt-4">
        <!-- Calendar -->
        <div class="bg-white text-center text-sm font-semibold rounded-xl shadow px-2 py-1 leading-tight w-14 h-16 flex flex-col justify-center items-center">
            <div class="text-xs text-gray-500 uppercase">Apr</div>
            <div class="text-lg text-black leading-none">4</div>
            <div class="text-[10px] text-gray-500">2025</div>
        </div>

        <!-- Event Info -->
        <div class="text-sm">
            <p class="flex items-center gap-2 text-gray-800">
            <img src="pic/kepanitiaan/penyelenggara-icon.png" class="w-4 h-4" /> Universitas Ciputra
            </p>
            <p class="flex items-center gap-2 text-gray-800">
            <img src="pic/kepanitiaan/posisi-icon.png" class="w-4 h-4" /> 100 posisi terbuka
            </p>
        </div>
        </div>

        </div>
        <button class="shadow-md w-full bg-orange-400 hover:bg-orange-500 text-white py-2 rounded-full font-semibold">
            Daftar
        </button>
        </div>
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