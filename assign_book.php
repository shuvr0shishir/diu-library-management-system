<?php
session_start();
include 'db.php';
?>

<?php include('partials/header.php'); ?>
<div class="flex">
<?php include('partials/sidebar.php'); ?>

<main class="flex-1 p-6">

<h1 class="text-2xl font-semibold mb-6">Assign Book</h1>

<div class="bg-white p-6 rounded-xl shadow">

<form class="space-y-4">

<select class="w-full p-3 border rounded-lg">
<option>Select Book</option>
</select>

<select class="w-full p-3 border rounded-lg">
<option>Select User</option>
</select>

<input type="date" class="w-full p-3 border rounded-lg">

<button class="w-full bg-teal-500 text-white py-3 rounded-lg">
Assign
</button>

</form>

</div>

</main>
</div>