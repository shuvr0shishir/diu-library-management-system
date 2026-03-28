<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
include 'db.php';
?>

<?php include('partials/header.php'); ?>

<div class="flex">
<?php include('partials/sidebar.php'); ?>

<main class="flex-1 p-6 min-h-[calc(100vh-128px)]">

<h1 class="text-2xl font-semibold mb-6">📊 Dashboard</h1>

<!-- Stats -->
<div class="grid sm:grid-cols-4 gap-4 mb-6">

    <div class="bg-gradient-to-r from-slate-800 to-teal-400 text-white p-6 rounded-xl shadow hover:-translate-y-1 hover:shadow-xl transition duration-300 flex justify-between items-center sm:block">
        <h3>Total Books</h3>
        <p class="text-3xl font-bold">
        <?php
        $res=mysqli_query($conn,"SELECT COUNT(*) as total FROM books");
        $row=mysqli_fetch_assoc($res);
        echo $row['total'];
        ?>
        </p>
    </div>

    <div class="bg-yellow-400 text-white p-6 rounded-xl shadow hover:-translate-y-1 hover:shadow-xl transition duration-300 flex justify-between items-center sm:block">
        <h3>Assigned</h3>
        <p class="text-3xl font-bold">45</p>
    </div>

    <div class="bg-green-500 text-white p-6 rounded-xl shadow hover:-translate-y-1 hover:shadow-xl transition duration-300 flex justify-between items-center sm:block">
        <h3>Returned</h3>
        <p class="text-3xl font-bold">40</p>
    </div>

    <div class="bg-blue-500 text-white p-6 rounded-xl shadow hover:-translate-y-1 hover:shadow-xl transition duration-300 flex justify-between items-center sm:block">
        <h3>Users</h3>
        <p class="text-3xl font-bold">
            <?php
            $res=mysqli_query($conn,"SELECT COUNT(*) as total FROM users");
            $row=mysqli_fetch_assoc($res);
            echo $row['total'];
            ?>
        </p>
    </div>

</div>

<!-- Table -->
<div class="bg-white p-6 rounded-xl shadow">

<table class="w-full">
<thead class="bg-gray-100">
<tr>
<th class="p-3 text-left">Title</th>
<th class="p-3 text-left">Author</th>
<th class="p-3 text-left">Due Date</th>
</tr>
</thead>

<tbody>
<tr class="hover:bg-gray-50">
<td class="p-3">Clean Code</td>
<td class="p-3">Robert C. Martin</td>
<td class="p-3">26 Oct</td>
</tr>
</tbody>

</table>

</div>

</main>
</div>

<?php include('partials/footer.php'); ?>