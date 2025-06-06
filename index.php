<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UC Collab | Beranda</title>
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
<body>
    <?php include "layout/nav.html" ?>

    <!-- Header -->
    <header class="relative bg-cover bg-center text-white h-[500px] flex items-center justify-center"
        style="background-image: url('pic/header.png')">
        <div class="bg-black bg-opacity-60 p-8 rounded-xl text-center">
            <h1 class="text-4xl font-bold mb-4 drop-shadow-lg">UC Collab</h1>
            <p class="italic mb-6 drop-shadow-md">"Jembatan Kolaborasi Acara dan Panitia di Universitas Ciputra."</p>
            <a href="kepanitiaan.php"><button class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-2 rounded-full shadow-lg">
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

    <?php include "layout/footer.html" ?>

</body>
</html>