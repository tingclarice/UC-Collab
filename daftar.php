<?php
    include "backend/controller.php";
    
    if(isset($_SESSION["is_login"])) {
        header ("location: dashboard.php");
    }

    if(isset($_POST['submit'])) {
        // Get form data
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        
        $sql_check = "SELECT * FROM organizers WHERE email = '$email'";
        $result = $conn->query($sql_check);

        if ($result->num_rows > 0) {
            echo "<script type='text/javascript'>alert('Email sudah terdaftar. Silakan gunakan email lain.');</script>";
            sleep(5); // delay for 5 seconds
            echo "<script type='text/javascript'>alert('Kembali ke halaman daftar');</script>";
            sleep(5); // delay for 5 seconds
            header("Location: daftar.php");
        } else {
            // Validate form data
            $sql = "INSERT INTO organizers (name, email, password) VALUES ('$username', '$email', '$password')";
        
            if($conn -> query($sql)) {
                echo "<script type='text/javascript'>alert('Akun berhasil dibuat!');</script>";
                header("Location: masuk.php");
                exit();
            } else {
                echo "<script type='text/javascript'>alert('Gagal membuat akun');</script>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>UC Collab | Registration Page</title>

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
    <body class="bg-[#FF9149] min-h-screen flex flex-col">
    
    <!-- jQuery Password Validation -->
    <script>
    $(document).ready(function() {
        $('#pendaftaranAkun').on('submit', function(e) {
            var password = $('#password').val();
            var confirmPassword = $('#confirmPassword').val();

            if (password.length < 8) {
                alert('Password harus minimal 8 karakter.');
                e.preventDefault();
                return;
            }

            if (password !== confirmPassword) {
                alert('Password dan konfirmasi password tidak cocok.');
                e.preventDefault();
                return;
            }
        });
    });
    </script>

    <!-- Optional navigation include -->
    <?php include "layout/nav.html" ?>

    <main class="flex flex-col md:flex-row min-h-screen ">
        <!-- Left image -->
        <div class="hidden md:block w-1/2">
        <img src="pic/uclogin.jpg" alt="UC Collab Background" class="w-full h-full object-cover" />
        </div>

        <!-- Right form -->
        <div class="w-full md:w-1/2 flex items-center justify-center bg-[#FF9149] px-6 m-4">
        <form id="pendaftaranAkun" method="POST" action="daftar.php"
            class="w-full max-w-md bg-[#FFFEF8] rounded-lg shadow-lg p-8">
            
            <!-- Logo -->
            <img src="pic/logo.svg" alt="UC Collab Logo" class="h-[60px] w-[180px] bg-contain bg-no-repeat mb-6 mx-auto"/>

            <!-- Heading -->
            <h2 class="text-2xl font-bold text-[#273F4F] text-center mb-6">Daftar</h2>

            <!-- Username -->
            <div class="mb-4">
            <label for="username" class="block text-sm font-medium text-[#273F4F]">Username*</label>
            <input placeholder="Username" type="text" id="username" name="username"
                class="mt-1 w-full p-2 border border-black rounded-md bg-white" required />
            </div>

            <!-- Email -->
            <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-[#273F4F]">Email*</label>
            <input placeholder="Email" type="email" id="email" name="email"
                class="mt-1 w-full p-2 border border-black rounded-md bg-white" required />
            </div>

            <!-- Password -->
            <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-[#273F4F]">Password*</label>
            <input placeholder="Password" type="password" id="password" name="password"
                class="mt-1 w-full p-2 border border-black rounded-md bg-white" required />
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
            <label for="confirmPassword" class="block text-sm font-medium text-[#273F4F]">Ulangi Password*</label>
            <input placeholder="Ulangi Password" type="password" id="confirmPassword" name="confirmPassword"
                class="mt-1 w-full p-2 border border-black rounded-md bg-white" required />
            </div>

            <!-- Submit Button -->
            <div class="mb-6">
            <button name="submit" type="submit" class="w-full bg-[#FF6500] text-[#FFFEF8] font-bold py-2 rounded-md hover:bg-[#e95c00] transition">
                Daftar
            </button>
            </div>

            <!-- Redirect Text -->
            <p class="text-sm text-[#273F4F] text-center">
            Sudah punya akun?
            <a href="masuk.php" class="text-blue-500 hover:underline">Masuk</a>
            </p>
        </form>
        </div>
    </main>

    
</body>
</html>
