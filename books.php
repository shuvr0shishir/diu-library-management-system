<?php include('partials/header.php'); ?>
<div class="flex">
<?php include('partials/sidebar.php'); ?>

<main class="flex-1 p-6">

<div class="flex justify-between mb-6">
<h1 class="text-2xl font-semibold">📚 Books</h1>

<a href="add_book.php" class="bg-teal-500 text-white px-4 py-2 rounded-lg">
+ Add Book
</a>
</div>

<div class="bg-white p-6 rounded-xl shadow">

<table class="w-full text-center">
<thead class="bg-gray-100">
<tr>
<th class="p-3">#</th>
<th class="p-3">Title</th>
<th class="p-3">Author</th>
<th class="p-3">Status</th>
<th class="p-3">Action</th>
</tr>
</thead>

<tbody>
<tr class="hover:bg-gray-50">
<td class="p-3">1</td>
<td class="p-3">Atomic Habits</td>
<td class="p-3">James Clear</td>
<td class="p-3 text-green-600">Available</td>

<td class="p-3 space-x-2">
<a href="edit_book.php" class="bg-yellow-400 px-2 py-1 rounded">Edit</a>
<button class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
</td>
</tr>
</tbody>

</table>

</div>

</main>
</div>