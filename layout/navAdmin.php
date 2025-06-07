<?php
    require_once("backend/controller.php");
    if(session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Ambil data dari session
    $organizer_id = $_SESSION["user_id"];
    $username = $_SESSION["username"];


?>

<!-- Clean Profile Navigation Bar -->
<nav class="sticky top-0 z-50 bg-gradient-to-r from-orange-500 to-orange-400 px-6 py-3 shadow-md">
    <div class="flex items-center justify-between">
        <!-- UC Collab Logo -->
        <a href="index.php" class="flex items-center">
        <img src="pic/logo.svg" alt="UC Collab Logo" class="h-10 w-auto">
        </a>

        <!-- Profile Dropdown -->
        <div class="relative">
        <button id="profile-toggle" class="flex items-center focus:outline-none">
            <!-- Profile Icon Only -->
            <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center overflow-hidden border-2 border-white shadow-sm hover:bg-orange-100 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            </div>
        </button>

        <!-- Dropdown Menu -->
        <div id="profile-dropdown" class="hidden absolute right-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 z-50 border border-orange-100">
            <a href="dashboard.php" class="flex items-center px-4 py-3 text-sm text-orange-600 hover:bg-orange-50 transition">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
            </svg>
            Dashboard
            </a>
            <a href="profile.php?profileID=<?=$organizer_id;?>" class="flex items-center px-4 py-3 text-sm text-orange-600 hover:bg-orange-50 transition">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
            </svg>
            Edit Profile
            </a>
            <a href="logout.php" class="flex items-center px-4 py-3 text-sm text-orange-600 hover:bg-orange-50 transition">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
            </svg>
            Logout
            </a>
        </div>
        </div>
    </div>
    </nav>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
    const profileToggle = document.getElementById('profile-toggle');
    const dropdown = document.getElementById('profile-dropdown');
    
    // Toggle dropdown
    profileToggle.addEventListener('click', function(e) {
        e.stopPropagation();
        dropdown.classList.toggle('hidden');
    });
    
    // Close when clicking outside
    document.addEventListener('click', function() {
        dropdown.classList.add('hidden');
    });
    });
</script>