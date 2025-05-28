<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Ambil data dari input teks
        $namaKepanitiaan = $_POST['namaKepanitiaan'];
        $deskripsi = $_POST['deskripsi'];
        $kategori = $_POST['kategori'];
        $tanggalBuka = $_POST['tanggalBuka'];
        $tanggalTutup = $_POST['tanggalTutup'];
        $tanggalKegiatan = $_POST['tanggalKegiatan'];
        $lokasi = $_POST['lokasi'];
        $divisi = $_POST['divisi'];

        // Proses file upload
        if (isset($_FILES['poster']) && $_FILES['poster']['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['poster']['tmp_name'];
            $fileName = $_FILES['poster']['name'];
            $uploadDir = 'uploads/poster_acara/';
            $dest_path = $uploadDir . basename($fileName);

            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                echo "Poster berhasil diupload ke: " . $dest_path;
            } else {
                echo "Gagal mengupload poster.";
            }
        } else {
            echo "Tidak ada poster yang diupload atau terjadi error.";
        }

        // Output data untuk pengecekan
        echo "<h2>Data yang diterima:</h2>";
        echo "Nama Kepanitiaan: $namaKepanitiaan<br>";
        echo "Deskripsi: $deskripsi<br>";
        echo "Kategori: $kategori<br>";
        echo "Tanggal Buka: $tanggalBuka<br>";
        echo "Tanggal Tutup: $tanggalTutup<br>";
        echo "Tanggal Kegiatan: $tanggalKegiatan<br>";
        echo "Lokasi: $lokasi<br>";
        echo "Divisi: $divisi<br>";
    }
?>
