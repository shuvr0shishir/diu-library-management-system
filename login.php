<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Demo login check
    if ($username == "admin" && $password == "1234") {
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>DIU Library | Login</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-r from-slate-800 to-teal-400">

<div class="w-full max-w-svw sm:max-w-md bg-white/90 backdrop-blur-xl rounded-2xl p-8 shadow-lg">

    <h2 class="text-xl font-bold text-center mb-2">📚 DIU Library Management System</h2>
    <h2 class="text-2xl  text-center mb-6 text-gray-700 font-semibold">Login</h2>

    <!-- Error -->
    <?php if(isset($error)): ?>
        <div class="bg-red-100 text-red-600 p-2 mb-4 rounded">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>

    <form method="POST">

        <input type="text" name="username" placeholder="Username"
            class="w-full mb-4 p-3 border rounded-lg" required>

        <input type="password" name="password" placeholder="Password"
            class="w-full mb-4 p-3 border rounded-lg" required>

        <button class="w-full bg-gradient-to-r from-slate-800 to-teal-400 text-white py-3 rounded-lg">
            Login
        </button>

    </form>

    <!-- Demo -->
    <div class="bg-gray-300 text-gray-700 font-semibold p-3 rounded-lg text-center my-4 text-sm">
        Demo Credentials: <br>
        Username: admin <br>
        Password: 1234
    </div>

</div>

</body>
</html>