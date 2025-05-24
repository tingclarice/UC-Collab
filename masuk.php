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
    <div class="w-1/2 bg-cover bg-center" style="background-image: url('https://placehold.co/600x800?text=Building+Image');"></div>
    <div class="w-1/2 flex items-center justify-center bg-white">
        <div class="w-3/4 p-8 rounded-lg shadow-lg">
            <div class="flex items-center mb-6">
                <img src="https://placehold.co/180x60?text=UC+Collab" alt="UC Collab Logo" class="h-16 mr-2">
                <h1 class="text-2xl font-bold">UC Collab</h1>
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
            </form>
        </div>
    </div>
</body>
</html>