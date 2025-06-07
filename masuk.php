<?php
    // Dengan ob_start();, PHP akan menyimpan semua output sementara dalam buffer, dan tidak langsung mengirim ke browser. Jadi kamu masih bisa melakukan header("Location: ...") setelah itu.
    // ob_start(); 

    include "backend/controller.php";
    session_start();

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM organizers WHERE name='$username' AND password='$password'";

        $result = $conn -> query($sql);

        if($result -> num_rows > 0) {
            // Echo before header will not redirect. Once you echo anything, you send headers to the browser, so header() will silently fail.
            // echo "<script type='text/javascript'>alert('Login Berhasil!');</script>";
            $data = $result -> fetch_assoc();
            $_SESSION["user_id"] = $data['organizer_id']; // store id dari database ke session
            $_SESSION["username"] = $data['name']; // store name dari database ke session

            header("Location: dashboard.php");
            
            // Without exit(), PHP keeps executing and might render HTML, which prevents the redirect.
            exit();
        } else {
            echo "<script type='text/javascript'>alert('Login Gagal! Periksa username dan password Anda.');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UC Collab | Login Page</title>
    
    <!-- Tailwind 3 CDN (for arbitrary values) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        
        /* Custom hover effects */
        .form-input {
            transition: all 0.3s ease;
            border: 1px solid #d1d5db; /* gray-300 */
        }
        
        .form-input:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            border-color: #FF6500;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #FF6500;
            box-shadow: 0 0 0 2px rgba(255, 101, 0, 0.2);
        }
        
        .submit-btn {
            transition: all 0.3s ease;
            background-color: #FF6500;
        }
        
        .submit-btn:hover {
            transform: translateY(-2px);
            background-color: #e95c00;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        
        .submit-btn:active {
            transform: translateY(0);
        }
        
        .form-container {
            transition: all 0.3s ease;
        }
        
        .form-container:hover {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .nav-link:hover {
            color: #FF6500;
            transform: translateY(-2px);
        }
    </style>

    <!-- jQuery for any interactivity -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        // Enhanced hover effects with jQuery
        $('.form-input').hover(
            function() {
                $(this).addClass('hover:border-orange-500');
            },
            function() {
                $(this).removeClass('hover:border-orange-500');
            }
        );
        
        // Button hover effect
        $('.submit-btn').hover(
            function() {
                $(this).css('transform', 'translateY(-2px)');
            },
            function() {
                $(this).css('transform', 'translateY(0)');
            }
        );
        
        // Logo hover effect
        $('.logo').hover(
            function() {
                $(this).css('transform', 'scale(1.05)');
            },
            function() {
                $(this).css('transform', 'scale(1)');
            }
        );
    });
    </script>
</head>
<body class="bg-[#FF9149] min-h-screen flex flex-col overflow-x-hidden"> 
    <!-- Optional navigation include -->
    <?php include "layout/nav.html" ?>

    <main class="flex flex-col md:flex-row min-h-screen">
        <!-- Left image -->
        <div class="hidden md:block w-1/2">
            <img src="pic/uclogin.jpg" alt="UC Collab Background" class="w-full h-full object-cover hover:brightness-95 transition duration-300" />
        </div>
            
        <!-- Right form -->
        <div class="w-full md:w-1/2 flex items-center justify-center bg-[#FF9149] px-6 m-4">
            <form id="loginForm" method="POST" action="masuk.php"
                class="w-full max-w-md bg-[#FFFEF8] rounded-lg shadow-lg p-8 form-container">
                
                <!-- Logo with hover effect -->
                <img src="pic/logo.svg" alt="UC Collab Logo" class="h-[60px] w-[180px] bg-contain bg-no-repeat mb-6 mx-auto logo transition-transform duration-300"/>

                <!-- Heading with hover effect -->
                <h2 class="text-2xl font-bold text-[#273F4F] text-center mb-6">Masuk</h2>

                <!-- Username -->
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-[#273F4F] hover:text-[#FF6500] transition-colors duration-300">Username*</label>
                    <input type="text" id="username" name="username" 
                        class="mt-1 block w-full rounded-md p-2 form-input" 
                        placeholder="Masukkan username Anda"
                        required>
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-[#273F4F] hover:text-[#FF6500] transition-colors duration-300">Password*</label>
                    <input type="password" id="password" name="password" 
                        class="mt-1 block w-full rounded-md p-2 form-input" 
                        placeholder="Masukkan password Anda"
                        required>
                </div>

                <!-- Submit Button -->
                <div class="mb-6">
                    <button name="submit" type="submit" 
                        class="w-full text-[#FFFEF8] font-bold py-2 rounded-md submit-btn hover:bg-[#e95c00]">
                        Masuk
                    </button>
                </div>

                <!-- Register Link -->
                <p class="text-sm text-[#273F4F] text-center">
                    Belum punya akun? 
                    <a href="daftar.php" class="text-blue-500 hover:text-[#FF6500] hover:underline transition-colors duration-300">Daftar</a>
                </p>
            </form>
        </div>
    </main>
</body>
</html>