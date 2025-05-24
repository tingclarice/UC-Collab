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
            <li><a href="daftar.php" class="text-white hover:text-gray-100 drop-shadow">Daftar</a></li>
            <li>
            <a href="masuk.php" class="bg-white text-orange-500 px-4 py-1 rounded-full font-semibold drop-shadow hover:bg-gray-100 transition">
                Masuk
            </a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header class="relative bg-cover bg-center text-white h-[500px] flex items-center justify-center"
        style="background-image: url('pic/header.png')">
        <div class="bg-black bg-opacity-60 p-8 rounded-xl text-center">
            <h1 class="text-4xl font-bold mb-4 drop-shadow-lg">UC Collab</h1>
            <p class="italic mb-6 drop-shadow-md">"Jembatan Kolaborasi Acara dan Panitia di Universitas Ciputra."</p>
            <a href="#"><button class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-2 rounded-full shadow-lg">
                Telusuri Kepanitiaan
            </button></a>
        </div>
    </header>

    <!-- Mission Section -->
    <section class="py-16 px-6 bg-gray-100">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">Misi Kami</h2>
            <p class="mb-6">Di Universitas Ciputra, sering terjadi dua hal:</p>
            <ul class="list-disc list-inside mb-6">
                <li><strong>Penyelenggara acara</strong> kesulitan mencari panitia, dan</li>
                <li><strong>Mahasiswa</strong> kehilangan peluang untuk terlibat karena kurangnya informasi.</li>
            </ul>
            <p class="mb-6">UC Collab hadir sebagai jembatan digital yang mempertemukan keduanya. Melalui platform ini, penyelenggara acara dapat serta membuka rekrutmen panitia secara terbuka. Mahasiswa lain pun dapat dengan mudah menelusuri acara yang sedang berlangsung, melihat posisi yang tersedia, dan langsung mendaftar secara online.</p>
            <img src="pic/logo.svg" alt="UC Collab Logo" class="h-20 mx-auto">
        </div>
    </section>

    <!-- Feature Section -->
    <section class="py-16 px-6">
        <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-orange-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-4">Pendaftar Kepanitiaan</h3>
                <ul class="list-disc list-inside">
                    <li>🔍 Telusuri acara kampus yang sedang mencari panitia</li>
                    <li>📋 Melihat posisi panitia yang tersedia dan kuota tersisa</li>
                    <li>📝 Mendaftar langsung ke posisi pilihan hanya dengan mengisi formulir</li>
                </ul>
            </div>
            <div class="bg-orange-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-4">Penyelenggara Acara</h3>
                <ul class="list-disc list-inside">
                    <li>🛠️ Membuat dan mengelola acara baru melalui dashboard</li>
                    <li>📌 Menambahkan posisi panitia yang dibutuhkan</li>
                    <li>📊 Melihat daftar pendaftar tiap posisi secara real-time</li>
                </ul>
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