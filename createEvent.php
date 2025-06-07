<?php
    ob_start(); 

    include "backend/controller.php";
    session_start();

    if(!isset($_SESSION['user_id'])) {
        header ("location: masuk.php");
    }

    // Ambil data dari session
    $user_id = $_SESSION["user_id"];
    $username = $_SESSION["username"];

    // Form submission handling
    if(isset($_POST['submit'])) {
        // Get form data
        $namaKepanitiaan = $_POST['namaKepanitiaan'];
        $kategori = $_POST['kategori'];
        $deskripsi = $_POST['deskripsi'];
        $tanggalTutup = $_POST['tanggalTutup'];
        $lokasi = $_POST['lokasi'];
        
        $fileName = $_FILES['poster']['name'];
        $fileTmpName = $_FILES['poster']['tmp_name'];
        $fileSize = $_FILES['poster']['size'];
        $fileError = $_FILES['poster']['error'];
        $fileType = $_FILES['poster']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg', 'jpeg', 'png');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                // Debug Message
                // echo "<script type='text/javascript'>alert('File size: \"". $fileSize ."\"bytes');</script>";

                $maxSize = 500 * 1024 * 1024; // 500 MB in bytes

                // Check file size (max 500MB)
                if ($fileSize <= $maxSize) {
                    // The uniqid() function generates a unique ID based on the microtime (the current time in microseconds)
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);

                    // Database Insertion
                    $sql_check = "SELECT * FROM events WHERE event_name = '$namaKepanitiaan'";
                    $result = $conn->query($sql_check);

                    if ($result->num_rows > 0) {
                        $_SESSION['error'] = "Acara dengan nama \"$namaKepanitiaan\" sudah terdaftar. Silakan gunakan nama lain.";
                        header("Location: createEvent.php");
                        exit();
                    } else {
                        // Validate form data
                        $sql = "INSERT INTO events (event_name, description, location, application_deadline, poster_url, organizer_id, category_id) 
                            VALUES ('$namaKepanitiaan', '$deskripsi', '$lokasi', '$tanggalTutup', '$fileDestination', $user_id, $kategori)";
                    
                        if($conn -> query($sql)) {
                            // Jangan tampilkan alert sebelum header
                            // The ?success=create part below is a query string or URL query parameter.
                            // It lets you pass small bits of information via the URL between pages.
                            // Commonly used for status messages, filtering, pagination
                            header("Location: dashboard.php?success=create");
                            exit();
                        }
                    }
                } else {
                    echo "<script type='text/javascript'>alert('File terlalu besar! Maksimal 500mb.');</script>";
                }
            } else {
                echo "<script type='text/javascript'>alert('Ada error dalam file upload!');</script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('Format file tidak didukung. Silakan unggah file JPG atau PNG.');</script>";
            exit();
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
    <?php if (isset($_SESSION['error'])): ?>
        <script>
            alert("<?php echo $_SESSION['error']; ?>");
        </script>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

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
                    <input type="file" id="poster" name="poster" accept=".jpg, .jpeg, .png" class="w-full rounded-lg border-2 shadow-sm px-3 py-2" required>
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