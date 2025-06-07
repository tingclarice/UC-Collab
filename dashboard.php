<?php
    require_once("backend/controller.php");
    session_start();

    if (isset($_GET['success']) && $_GET['success'] === 'create') {
        echo "<script>alert('Event berhasil dipublikasikan!');</script>";
    }

    if (isset($_GET['success']) && $_GET['success'] === 'deleted') {
        echo "<script>alert('Event berhasil dihapus!');</script>";
    }

    if(!isset($_SESSION['user_id'])) {
        header ("location: masuk.php");
    }

    // Ambil data dari session
    $user_id = $_SESSION["user_id"];
    $username = $_SESSION["username"];
?>

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

    <!-- jQuery for interactivity -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-[#FFFEF8]">
    <!-- Navigation bar -->
    <?php include "layout/navAdmin.php" ?>

    <!-- Header -->
    <header class="relative bg-cover bg-center text-white h-[500px] flex items-center justify-center"
        style="background-image: url('pic/header.png')">
        <div class="bg-black bg-opacity-60 p-10 rounded-xl text-center">
            <h1 class="text-4xl font-bold mb-4 drop-shadow-lg">Organizer Dashboard</h1>
            <a href="createEvent.php"><button class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-2 rounded-full shadow-lg">
                Buat Acara Baru
            </button></a>
        </div>
    </header>

    <!-- Daftar Kepanitiaan -->
    <section class="py-10 px-4 md:px-16 bg-white">

    <!-- Section Title -->
    <h2 class="text-center text-xl font-bold mb-6">Daftar Acara</h2>

    <!-- Grid of Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
    <?php
        $result = readEvent();
        foreach ($result as $barisdata) {
    ?>
        <!-- A Singular Card -->
        <div class="bg-[#FFE8D9] border border-black rounded-xl shadow p-3">
        <img src="<?=$barisdata["poster_url"]?>" alt="Event Poster" class="rounded-lg mb-3 h-40 w-full object-cover" />
        <h3 class="font-semibold text-center -mb-2 text-lg"><?=$barisdata["event_name"]?></h3>
        <div class="flex justify-center gap-4 text-sm text-gray-500 mb-4">
            <div class="flex items-center gap-3 mt-4">
        <!-- Calendar -->
        <div class="bg-white text-center text-sm font-semibold rounded-xl shadow px-2 py-1 leading-tight w-14 h-16 flex flex-col justify-center items-center">
            <!-- The strtotime() function parses an English textual datetime into a Unix timestamp -->
        
            <!-- M = short month name (e.g., Jan, Feb) -->
            <div class="mt-1 text-xs text-gray-500 uppercase"><?= date("M", strtotime($barisdata["application_deadline"])) ?></div>
            
            <!-- j = Day of month (no leading 0) -->
            <div class="mt-1 text-lg text-black leading-none"><?= date("j", strtotime($barisdata["application_deadline"])) ?></div>

            <!-- Y = Full 4-digit year -->
            <div class="mt-1 text-[10px] text-gray-500"><?= date("Y", strtotime($barisdata["application_deadline"])) ?></div>
        </div>

        <!-- Event Info -->
        <div class="text-sm">
            <!-- Organizer (Penyelenggara) -->
            <p class="flex items-center gap-2 text-gray-800">
                <!-- University Icon SVG -->
                <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2L1 7l11 5 9-4.09V17h2V7L12 2zM2.18 9L12 13.82 21.82 9 12 4.18 2.18 9zM4 10.9v6.74l8 3.64 8-3.64V10.9l-8 3.64-8-3.64z" />
                </svg>
                <?=$barisdata["organizer_id"];?>
            </p>

            <!-- Location -->
            <p class="flex items-center gap-2 text-gray-800">
                <!-- Location Icon SVG -->
                <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5 14.5 7.62 14.5 9 13.38 11.5 12 11.5z"/>
                </svg>
                <?=$barisdata["location"];?>
            </p>
        </div>
        </div>

        </div>
        
        <div class="flex gap-2">
            <button class="w-1/2 shadow-md bg-orange-400 hover:bg-orange-500 text-white py-2 rounded-full font-semibold">
                Edit
            </button>
            
            
            <a href="deleteEvent.php?deleteid=<?=$barisdata["event_id"];?>"
            onclick="return confirm('Are you sure you want to delete this event?');"
            class="w-1/2 text-center shadow-md bg-red-500 hover:bg-red-600 text-white py-2 rounded-full font-semibold block">
            Delete
            </a>
            
        </div>

        </div>
    <?php
    }
    ?>
    </div>
    </section>

    <?php include "layout/footer.html" ?>

</body>
</html>