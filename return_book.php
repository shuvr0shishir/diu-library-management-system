<?php
session_start();
include 'db.php';
?>

<?php include('partials/header.php'); ?>
<div class="flex">
<?php include('partials/sidebar.php'); ?>

<main class="flex-1 p-6">

<h1 class="text-2xl font-semibold mb-6">Return Book</h1>

<div class="bg-white p-6 rounded-xl shadow">

<table class="w-full text-center">
<thead>
<tr>
<th class="p-3">Book</th>
<th class="p-3">User</th>
<th class="p-3">Status</th>
<th class="p-3">Action</th>
</tr>
</thead>

<tbody>
<tr>
<td class="p-3">Clean Code</td>
<td class="p-3">John</td>
<td class="p-3 text-red-500">Overdue</td>

<td class="p-3">
<a href="return_detail.php" class="bg-blue-500 text-white px-3 py-1 rounded">
Return
</a>
</td>
</tr>
</tbody>

</table>

</div>

</main>
</div>