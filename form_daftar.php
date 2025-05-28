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

    <!-- Section : FORM DAFTAR KEPANITIAAN -->
    <section class="bg-[#FFFEF8]">
        <div class="w-3/4 md:max-w-4xl m-10 mx-auto bg-[#FFF3E9] p-8 rounded-lg shadow text-[#273F4F]">
        <!-- POSTER & NAMA ACARA -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mt-2 mb-4">Form Pendaftaran O-Week 2025</h1>
            <img src="pic/kepanitiaan/oweek.PNG" alt="Poster O-Week 2025" class="mx-auto w-full max-w-md rounded-lg shadow-lg">
        </div>

        <!-- FORM START -->
        <form class="space-y-8">
            <!-- Data Diri -->
            <div>
                <h2 class="text-2xl font-semibold mb-4">Data Diri</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block mb-1 font-medium" for="nama">Nama Lengkap*</label>
                    <input type="text" id="nama" name="nama" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
                </div>
                <div>
                    <label class="block mb-1 font-medium" for="email">Email*</label>
                    <input type="email" id="email" name="email" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
                </div>
                <div>
                    <label class="block mb-1 font-medium" for="nim">NIM*</label>
                    <input type="text" id="nim" name="nim" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
                </div>
                <div>
                    <label class="block mb-1 font-medium" for="kontak">ID Line/ No. Whatsapp*</label>
                    <input type="text" id="kontak" name="kontak" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
                </div>
                <div>
                    <label class="block mb-1 font-medium" for="jurusan">Jurusan*</label>
                    <select id="jurusan" name="jurusan" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
                        <option value="IBM-RC">International Business Management - Regular Class</option>
                        <option value="IBM-IC">International Business Management - International Class</option>
                        <option value="ACC">Accounting</option>
                        <option value="VCD">Visual Communication Design</option>
                        <option value="ARS">Architecture</option>
                        <option value="FDB">Fashion Design Business</option>
                        <option value="HTB">Hotel & Tourism Business</option>
                        <option value="CB">Culinary Business</option>
                        <option value="FTP">Food Technology Program</option>
                        <option value="IMT">Informatics</option>
                        <option value="ISB">Information Systems for Business</option>
                        <option value="MED-RC">Medical - Regular Class</option>
                        <option value="MED-IC">Medical - International Class</option>
                        <option value="PSY">Psychology</option>
                        <option value="FIKOM">Communication</option>
                    </select>
                </div>
                <div>
                    <label class="block mb-1 font-medium" for="angkatan">Angkatan*</label>
                    <select id="angkatan" name="angkatan" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                    </select>
                </div>
                </div>
            </div>

            <!-- Pilihan Divisi -->
            <div>
                <h2 class="text-2xl font-semibold mb-4">Pilihan Divisi</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block mb-1 font-medium" for="divisi1">Pilihan Divisi 1*</label>
                    <select id="divisi1" name="divisi1" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
                    <option value="">Pilih Divisi</option>
                    </select>
                    <label class="block mt-3 mb-1 font-medium" for="alasan1">Alasan Memilih*</label>
                    <textarea id="alasan1" name="alasan1" rows="3" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required></textarea>
                </div>
                <div>
                    <label class="block mb-1 font-medium" for="divisi2">Pilihan Divisi 2*</label>
                    <select id="divisi2" name="divisi2" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
                    <option value="">Pilih Divisi</option>
                    </select>
                    <label class="block mt-3 mb-1 font-medium" for="alasan2">Alasan Memilih*</label>
                    <textarea id="alasan2" name="alasan2" rows="3" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required></textarea>
                </div>
                </div>
            </div>

            <!-- Pengumpulan Data -->
            <div>
                <h2 class="text-2xl font-semibold mb-4">Pengumpulan Data</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div>
                    <label class="block mb-1 font-medium" for="cv">Curriculum Vitae (CV)*</label>
                    <input type="file" id="cv" name="cv" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
                </div>
                <div>
                    <label class="block mb-1 font-medium" for="kartu_uc">Kartu Mahasiswa UC*</label>
                    <input type="file" id="kartu_uc" name="kartu_uc" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
                </div>
                <div>
                    <label class="block mb-1 font-medium" for="transkrip">Transkrip Akademik (Terbaru)*</label>
                    <input type="file" id="transkrip" name="transkrip" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
                </div>
                <div>
                    <label class="block mb-1 font-medium" for="o_week">Bukti Lulus O-Week*</label>
                    <input type="file" id="o_week" name="o_week" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
                </div>
                <div>
                    <label class="block mb-1 font-medium" for="lead101">Bukti Lulus Leadership 101*</label>
                    <input type="file" id="lead101" name="lead101" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
                </div>
                <div>
                    <label class="block mb-1 font-medium" for="portofolio">Portofolio (Khusus PDD)</label>
                    <input type="file" id="portofolio" name="portofolio" class="w-full rounded-lg border-2 shadow-sm px-3 py-2">
                </div>
            </div>
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-600 text-white font-semibold px-6 py-2 rounded hover:bg-blue-700">Kirim</button>
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