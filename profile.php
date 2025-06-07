<?php
    require_once("backend/controller.php");
    $data_to_be_updated = $_GET["profileID"];
    $data = getOrganizerWithID($data_to_be_updated);

    if (isset($_POST["submit"])) {
        $name = $_POST["nameEdit"];
        $email = $_POST["emailEdit"];
        $password = $_POST["passEdit"];

        $result = updateOrganizer($data_to_be_updated, $name, $email, $password);
    }
?>

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
    <?php include "layout/navAdmin.php" ?>

    <!-- Section : Profil -->
    <section class="bg-[#FFFEF8]">
        <div class="w-3/4 md:max-w-4xl m-10 mx-auto bg-[#FFF3E9] p-8 rounded-lg shadow text-[#273F4F]">
    <h1 class="text-3xl font-bold mb-6">Profil</h1>
    
        <h2 class="text-xl font-semibold mb-4">Informasi Umum</h2>
        
        <form class="space-y-4" action="profile.php?profileID=<?=$data_to_be_updated?>" method="POST">
            <div>
                <label class="block text-gray-700 mb-2">Nama Penyelenggara</label>
                <input name="nameEdit" type="text" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="<?=$data['name']?>"/>
            </div>
            
            <div>
                <label class="block text-gray-700 mb-2">Email</label>
                <input name="emailEdit" type="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="<?=$data['email']?>"/>
            </div>
            
            <div>
                <label class="block text-gray-700 mb-2">Password</label>
                <input name="passEdit" type="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" value="<?=$data['password']?>"/>
            </div>
            
            <div class="flex space-x-4 pt-4">
                <button type="submit" name="submit"  class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 transition">
                    Simpan
                </button>
                <a href="dashboard.php" class="border border-gray-300 px-6 py-2 rounded-lg hover:bg-gray-50 transition">
                    Kembali
                </a>
            </div>
        </form>
    </section>
</main>

    <!-- Footer -->
    <?php include "layout/footer.html" ?>


</body>
</html>