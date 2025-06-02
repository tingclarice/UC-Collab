<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="flex h-screen bg-orange-500"> 
    <!-- Navigation Bar -->
    <nav class="bg-gradient-to-r from-orange-500 to-orange-400 flex items-center justify-between px-6 py-3 shadow-md">
        <a href="index.php" class="flex items-center">
            <img src="pic/logo.svg" alt="UC Collab Logo" class="h-10 w-auto">
        </a>
        <ul class="flex items-center space-x-6 text-white font-medium">
            <li><a href="index.php" class="text-white hover:text-gray-100 border-b-2 border-white drop-shadow">Beranda</a></li>
            <li><a href="kepanitiaan.php" class="text-white hover:text-gray-100 drop-shadow">Kepanitiaan</a></li>
            <li><a href="daftar.php" class="text-white hover:text-gray-100 drop-shadow">Daftar</a></li>
            <li>
            <a href="masuk.php" class="bg-white text-orange-500 px-4 py-1 rounded-full font-semibold drop-shadow hover:bg-gray-100 transition">
                Masuk
            </a>
            </li>
        </ul>
    </nav>

    <div class="w-1/2 bg-cover bg-center" style="background-image: url('pic/uclogin.jpg');"></div>
    <div class="w-1/2 flex items-center justify-center bg-white">
        <div class="w-3/4 p-8 rounded-lg shadow-lg">
            <div class="flex items-center mb-6">
                <img src="pic/logo.svg" alt="UC Collab Logo" class="h-16 mr-2">
                <h1 class="text-2xl font-bold"></h1>
            </div>
            <h2 class="text-xl mb-6">Masuk</h2>
            <form id="loginForm" method="POST" action="submit_login.php">
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-700">Username*</label>
                    <input type="text" id="username" name="username" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password*</label>
                    <input type="password" id="password" name="password" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                </div>
                <div class="mb-4">
                    <button type="submit" class="w-full bg-orange-500 text-white font-bold py-2 rounded-md">Masuk</button> <!-- Button styling -->
                </div>
                <p class="text-sm text-gray-600">Belum punya akun? <a href="daftar.php" class="text-blue-500">Daftar</a></p>
            </form>
        </div>
    </div>
</body>
</html>