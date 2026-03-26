<?php include('partials/header.php'); ?>

<div class="flex flex-col md:flex-row">

<?php include('partials/sidebar.php'); ?>

<main class="flex-1 p-4 md:p-6">

<h1 class="text-2xl font-semibold mb-6">👤 Add User</h1>

<div class="bg-white p-6 rounded-xl shadow">

<form class="grid grid-cols-1 md:grid-cols-2 gap-4">

<input type="text" placeholder="First Name"
class="border p-3 rounded-lg">

<input type="text" placeholder="Last Name"
class="border p-3 rounded-lg">

<input type="email" placeholder="Email"
class="border p-3 rounded-lg">

<input type="text" placeholder="Phone"
class="border p-3 rounded-lg">

<input type="date"
class="border p-3 rounded-lg">

<select class="border p-3 rounded-lg">
<option>Select Role</option>
<option>Admin</option>
<option>Member</option>
</select>

<textarea placeholder="Address"
class="border p-3 rounded-lg md:col-span-2"></textarea>

<button class="bg-teal-500 text-white py-3 rounded-lg md:col-span-2">
Create User
</button>

</form>

</div>

</main>

</div>

</body>
</html>