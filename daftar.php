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
        
        /* Custom hover effects */
        .form-input {
            transition: all 0.3s ease;
            border: 1px solid #000;
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
            position: relative;
            overflow: hidden;
        }
        
        .submit-btn:hover {
            transform: translateY(-2px);
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
        
        // jQuery Password validation
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
</head>
<body class="bg-[#FF9149] min-h-screen flex flex-col">

    <!-- Optional navigation include -->
    <?php include "layout/nav.html" ?>

    <main class="flex flex-col md:flex-row min-h-screen">
        <!-- Left image -->
        <div class="hidden md:block w-1/2">
            <img src="pic/uclogin.jpg" alt="UC Collab Background" class="w-full h-full object-cover" />
        </div>

        <!-- Right form -->
        <div class="w-full md:w-1/2 flex items-center justify-center bg-[#FF9149] px-6 m-4">
            <form id="pendaftaranAkun" method="POST" action="daftar.php"
                class="w-full max-w-md bg-[#FFFEF8] rounded-lg shadow-lg p-8 form-container transition duration-300 hover:shadow-xl">
                
                <!-- Logo -->
                <img src="pic/logo.svg" alt="UC Collab Logo" class="h-[60px] w-[180px] bg-contain bg-no-repeat mb-6 mx-auto hover:scale-105 transition-transform duration-300"/>

                <!-- Heading -->
                <h2 class="text-2xl font-bold text-[#273F4F] text-center mb-6 hover:text-[#FF6500] transition-colors duration-300">Daftar</h2>

                <!-- Username -->
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-[#273F4F] hover:text-[#FF6500] transition-colors duration-300">Username*</label>
                    <input placeholder="Username" type="text" id="username" name="username"
                        class="mt-1 w-full p-2 rounded-md bg-white form-input" required />
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-[#273F4F] hover:text-[#FF6500] transition-colors duration-300">Email*</label>
                    <input placeholder="Email" type="email" id="email" name="email"
                        class="mt-1 w-full p-2 rounded-md bg-white form-input" required />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-[#273F4F]">Password*</label>
                    <input placeholder="Password" type="password" id="password" name="password"
                        class="mt-1 w-full p-2 rounded-md bg-white form-input" required />
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <label for="confirmPassword" class="block text-sm font-medium text-[#273F4F] hover:text-[#FF6500] transition-colors duration-300">Ulangi Password*</label>
                    <input placeholder="Ulangi Password" type="password" id="confirmPassword" name="confirmPassword"
                        class="mt-1 w-full p-2 rounded-md bg-white form-input" required />
                </div>

                <!-- Submit Button -->
                <div class="mb-6">
                    <button name="submit" type="submit" class="w-full bg-[#FF6500] text-[#FFFEF8] font-bold py-2 rounded-md submit-btn">
                        Daftar
                    </button>
                </div>

                <!-- Redirect Text -->
                <p class="text-sm text-[#273F4F] text-center">
                    Sudah punya akun?
                    <a href="masuk.php" class="text-blue-500 hover:text-[#FF6500] hover:underline transition-colors duration-300">Masuk</a>
                </p>
            </form>
        </div>
    </main>
</body>
</html>