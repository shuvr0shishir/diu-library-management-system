<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://cdn.tailwindcss.com"></script>

<title>LMS</title>
</head>

<body class="bg-gray-100">

<!-- Navbar -->
<header class="bg-gradient-to-r from-slate-800 to-teal-400 text-white flex justify-between items-center px-4 py-3 shadow">

    <!-- Left -->
    <div class="flex items-center gap-3">
        <!-- Hamburger -->
        <button onclick="toggleSidebar()" class="md:hidden text-2xl">
            ☰
        </button>

        <h1 class="text-lg font-semibold">📚 Library</h1>
    </div>

    <!-- Right -->
    <div class="hidden sm:flex items-center gap-4">
        <span>Welcome, Admin</span>
        <a href="#" class="hover:underline">Logout</a>
    </div>

</header>