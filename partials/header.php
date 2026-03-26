<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://cdn.tailwindcss.com"></script>

<title>DIU Library Management System</title>
</head>

<body class="bg-gray-100">

<!-- Navbar -->
<header class="bg-gradient-to-r from-slate-800 to-teal-400 text-white flex justify-between items-center px-5 py-3 shadow">

    <!-- Left -->
    <div class="flex items-center gap-3">
        <!-- Hamburger -->
        <button onclick="toggleSidebar()" class="md:hidden text-2xl">
            ☰
        </button>

        <h1 class="text-lg font-semibold">📚 DIU Library</h1>
    </div>

    <!-- Right -->
    <div class="flex items-center gap-4">
        <span class="hidden sm:flex">Welcome, Admin</span>
        <a href="logout.php" class="px-4 py-2 rounded-xl text-white font-semibold border-2 border-gray-300 bg-black/10 hover: hover:shadow-xl transition">Logout</a>
    </div>

</header>