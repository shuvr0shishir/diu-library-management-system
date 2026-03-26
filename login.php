<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-r from-slate-800 to-teal-400">

<div class="w-full max-w-md bg-white/90 backdrop-blur-xl rounded-2xl p-8 shadow-lg">

    <h2 class="text-2xl font-bold text-center mb-6">Login</h2>
    

    <form action="dashboard.php">

        <input type="text" placeholder="Username"
            class="w-full mb-4 p-3 border rounded-lg">

        <input type="password" placeholder="Password"
            class="w-full mb-4 p-3 border rounded-lg">

        <button class="w-full bg-gradient-to-r from-slate-800 to-teal-400 text-white py-3 rounded-lg">
            Login
        </button>

    </form>

    <!-- Demo credentials -->
    <div class="bg-gray-300 text-yellow-800 p-3 rounded my-4 text-sm">
        Demo: <br>
        Username: admin <br>
        Password: 1234
    </div>

</div>

</body>
</html>