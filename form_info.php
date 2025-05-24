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

    <!-- Section : FORM UPLOAD OPEN RECRUITMENT KEPANITIAAN -->
    <!-- SECTION: FORM INFORMASI KEPANITIAAN -->
    <section class="bg-[#FFFEF8]">
    <div class="w-3/4 md:max-w-4xl m-10 mx-auto bg-[#FFF3E9] p-8 rounded-lg shadow text-[#273F4F]">

        <h1 class="text-3xl font-semibold text-center mb-8">Form Informasi Kepanitiaan</h1>

        <form class="space-y-8">
        <!-- Informasi Umum -->
        <div>
            <h2 class="text-2xl font-semibold mb-4">Informasi Umum</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block mb-1 font-medium" for="namaKepanitiaan">Nama Kepanitiaan*</label>
                <input type="text" id="namaKepanitiaan" name="namaKepanitiaan" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
            </div>
            <div>
                <label class="block mb-1 font-medium" for="deskripsi">Deskripsi Singkat*</label>
                <input type="text" id="deskripsi" name="deskripsi" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
            </div>
            <div>
                <label class="block mb-1 font-medium" for="kategori">Kategori*</label>
                <select id="kategori" name="kategori" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
                <option value="">Pilih Kategori</option>
                <option value="internal">Internal</option>
                <option value="eksternal">Eksternal</option>
                </select>
            </div>
            </div>
        </div>

        <!-- Waktu & Lokasi -->
        <div>
            <h2 class="text-2xl font-semibold mb-4">Waktu & Lokasi</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block mb-1 font-medium" for="tanggalBuka">Tanggal Pendaftaran Dibuka*</label>
                <input type="date" id="tanggalBuka" name="tanggalBuka" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
            </div>
            <div>
                <label class="block mb-1 font-medium" for="tanggalTutup">Tanggal Pendaftaran Ditutup*</label>
                <input type="date" id="tanggalTutup" name="tanggalTutup" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
            </div>
            <div>
                <label class="block mb-1 font-medium" for="tanggalKegiatan">Tanggal Pelaksanaan Kegiatan*</label>
                <input type="date" id="tanggalKegiatan" name="tanggalKegiatan" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
            </div>
            <div>
                <label class="block mb-1 font-medium" for="lokasi">Lokasi*</label>
                <input type="text" id="lokasi" name="lokasi" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
            </div>
            </div>
        </div>

        <!-- Struktur Kepanitiaan -->
        <div>
            <h2 class="text-2xl font-semibold mb-4">Struktur Kepanitiaan</h2>
            <label class="block mb-1 font-medium" for="divisi">Pilihan Divisi (Contoh: Acara, PDD Desain, PDD Dokumentasi)</label>
            <textarea id="divisi" name="divisi" rows="3" class="w-full rounded-lg border-2 shadow-sm px-3 py-2"></textarea>
        </div>

        <!-- Unggah Poster -->
        <div>
            <h2 class="text-2xl font-semibold mb-4">Unggah Poster</h2>
            <label class="block mb-1 font-medium" for="poster">Poster Kepanitiaan</label>
            <input type="file" id="poster" name="poster" class="w-full rounded-lg border-2 shadow-sm px-3 py-2">
        </div>

        <!-- Tombol -->
        <div class="flex flex-wrap justify-center gap-4">
            <button type="submit" class="bg-white border-2 border-gray-300 text-gray-700 font-semibold px-6 py-2 rounded hover:bg-gray-100">Simpan Draft</button>
            <button type="submit" class="bg-orange-500 text-white font-semibold px-6 py-2 rounded hover:bg-orange-600">Publikasikan</button>
            <button type="reset" class="bg-white border-2 border-gray-300 text-gray-700 font-semibold px-6 py-2 rounded hover:bg-gray-100">Reset Form</button>
        </div>
        </form>

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