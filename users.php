<?php include('partials/header.php'); ?>
<div class="flex">
<?php include('partials/sidebar.php'); ?>

<main class="flex-1 p-6">

<div class="flex justify-between mb-6">
<h1 class="text-2xl font-semibold">👥 Users</h1>

<a href="add_user.php" class="bg-teal-500 text-white px-4 py-2 rounded-lg">
+ Add User
</a>
</div>

<div class="bg-white p-6 rounded-xl shadow">

<table class="w-full text-center">
<thead class="bg-gray-100">
<tr>
<th class="p-3">Name</th>
<th class="p-3">Email</th>
<th class="p-3">Role</th>
<th class="p-3">Action</th>
</tr>
</thead>

<tbody>
<tr>
<td class="p-3">John Doe</td>
<td class="p-3">john@mail.com</td>
<td class="p-3">Admin</td>

<td class="p-3 space-x-2">
<a href="edit_user.php" class="bg-yellow-400 px-2 py-1 rounded">Edit</a>
<button class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
</td>
</tr>
</tbody>

</table>

</div>

</main>
</div>