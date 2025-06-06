<?php
include "backend/controller.php";
session_start();

// // Verify organizer is logged in
// if(!isset($_SESSION['organizer_id'])) {
//     echo "<script>
//         alert('Please login as an organizer first.');
//     </script>";
//     header("Location: masuk.php");
// }

if(isset($_POST['submit'])) {
    // Verify organizer exists
    $check_organizer = $conn->query("SELECT 1 FROM organizers WHERE organizer_id = {$_SESSION['organizer_id']}");
    if($check_organizer->num_rows === 0) {
        die("<script>
            alert('Your organizer account is invalid!');
            window.location.href='login.php';
        </script>");
    }

    // Process form data...
    $event_name = $conn->real_escape_string($_POST['namaKepanitiaan']);
    $category_id = (int)$_POST['kategori'];
    $description = $conn->real_escape_string($_POST['deskripsi']);
    $tanggalTutup = $conn->real_escape_string($_POST['tanggalTutup']);
    $lokasi = $conn->real_escape_string($_POST['lokasi']);
    
    // File upload handling...
    $poster_name = $_FILES['poster']['name'];
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($poster_name);
    
    if(move_uploaded_file($_FILES['poster']['tmp_name'], $targetFile)) {
        $sql = "INSERT INTO events 
               (event_name, description, location, application_deadline, poster_url, organizer_id, category_id) 
               VALUES ('$event_name', '$description', '$lokasi', '$tanggalTutup', '$targetFile', {$_SESSION['organizer_id']}, $category_id)";
        
        if($conn->query($sql)) {
            echo "<script>
                alert('Event created successfully!');
                window.location.href='dashboard.php';
            </script>";
        } else {
            unlink($targetFile);
            echo "<script>alert('Database error: ".$conn->error."');</script>";
        }
    } else {
        echo "<script>alert('Failed to upload poster image.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Create Event</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Navigation Bar -->
    <?php include "layout/navAdmin.html" ?>

    <!-- Section : FORM UPLOAD OPEN RECRUITMENT KEPANITIAAN -->
    <section class="bg-[#FFFEF8]">
        <div class="w-3/4 md:max-w-4xl m-10 mx-auto bg-[#FFF3E9] p-8 rounded-lg shadow text-[#273F4F]">

            <h1 class="text-3xl font-semibold text-center mb-8">Form Informasi Kepanitiaan</h1>

            <form class="space-y-8" action="createEvent.php" method="POST" enctype="multipart/form-data">
                <!-- Informasi Umum -->
                <div>
                    <h2 class="text-2xl font-semibold mb-4">Informasi Umum</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block mb-1 font-medium" for="namaKepanitiaan">Nama Kepanitiaan*</label>
                        <input type="text" id="namaKepanitiaan" name="namaKepanitiaan" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
                    </div>
                    <div>
                        <label class="block mb-1 font-medium" for="kategori">Kategori*</label>
                        <select id="kategori" name="kategori" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
                        <option value=>Pilih Kategori</option>
                        <option value=1>Seminar</option>
                        <option value=2>Workshop</option>
                        <option value=3>Kompetisi</option>
                        <option value=4>Bazaar</option>
                        <option value=5>O-Week</option>
                        </select>
                    </div>
                    <div>
                        <label class="block mb-1 font-medium" for="deskripsi">Deskripsi Singkat*</label>
                        <textarea id="deskripsi" name="deskripsi" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required></textarea>
                    </div>
                    
                    </div>
                </div>

                <!-- Waktu & Lokasi -->
                <div>
                    <h2 class="text-2xl font-semibold mb-4">Waktu & Lokasi</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block mb-1 font-medium" for="tanggalTutup">Tanggal Pendaftaran Ditutup*</label>
                            <input type="date" id="tanggalTutup" name="tanggalTutup" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
                        </div>
                        <div>
                            <label class="block mb-1 font-medium" for="lokasi">Lokasi*</label>
                            <input type="text" id="lokasi" name="lokasi" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
                        </div>
                    </div>
                </div>

                <!-- Unggah Poster -->
                <div>
                    <h2 class="text-2xl font-semibold mb-4">Unggah Poster</h2>
                    <label class="block mb-1 font-medium" for="poster">Poster Kepanitiaan</label>
                    <input type="file" id="poster" name="poster" class="w-full rounded-lg border-2 shadow-sm px-3 py-2">
                </div>

                <!-- Tombol -->
                <div class="flex flex-wrap justify-center gap-4">
                    <button name="submit" type="submit" class="bg-orange-500 text-white font-semibold px-6 py-2 rounded hover:bg-orange-600">Publikasikan</button>
                </div>
            </form>

        </div>
    </section>


    <!-- FOOTER -->
    <?php include "layout/footer.html" ?>
</body>
</html>