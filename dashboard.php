<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UC Collab | Daftar Kepanitiaan</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind 3 CDN (for arbitrary values) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet" />
    <style>
        body {
        font-family: 'Inter', sans-serif;
        }
    </style>

    <!-- jQuery for any interactivity -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-[#FFFEF8]">
    <!-- Optional navigation include -->
    <?php include "layout/nav.html" ?>

    <!-- Header -->
    <header class="relative bg-cover bg-center text-white h-[500px] flex items-center justify-center"
        style="background-image: url('pic/header.png')">
        <div class="bg-black bg-opacity-60 p-10 rounded-xl text-center">
            <h1 class="text-4xl font-bold mb-4 drop-shadow-lg">Daftar Acara</h1>
            <a href="#"><button class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-2 rounded-full shadow-lg">
                Buat Acara Baru
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
    <h2 class="text-center text-xl font-bold mb-6">Daftar Acara</h2>

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
            Edit
        </button>
        </div>

    </div>
    </section>

    <?php include "layout/footer.html" ?>

</body>
</html>