<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="flex h-screen bg-orange-500"> 
    <div class="w-1/2 bg-cover bg-center" style="background-image: url('pic/uclogin.jpg');"></div>
    <div class="w-1/2 flex items-center justify-center bg-white">
        <div class="w-3/4 p-8 rounded-lg shadow-lg">
            <div style="background-image: url('pic/logo.svg'); height: 60px; width: 180px; background-size: contain; background-repeat: no-repeat; margin-bottom: 24px;"></div>
            <h2 class="text-xl mb-6">Daftar</h2>
            <form id="registrationForm" method="POST" action="submit.php">
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-700">Username*</label>
                    <input type="text" id="username" name="username" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email*</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password*</label>
                    <input type="password" id="password" name="password" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                </div>
                <div class="mb-4">
                    <label for="confirmPassword" class="block text-sm font-medium text-gray-700">Ulangi Password*</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                </div>
                <div class="mb-4">
                    <button type="submit" class="w-full bg-orange-500 text-white font-bold py-2 rounded-md">Daftar</button> <!-- Button styling -->
                </div>
                <p class="text-sm text-gray-600">Sudah punya akun? <a href="login.php" class="text-blue-500">Masuk</a></p>
            </form>
        </div>
    </div>
</body>
</html>