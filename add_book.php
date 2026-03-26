<?php include('partials/header.php'); ?>

<div class="flex">

    <?php include('partials/sidebar.php'); ?>

    <main class="flex-1 p-6">

        <!-- Page Title -->
        <h1 class="text-2xl font-semibold mb-6">📚 Add New Book</h1>

        <!-- Error Message -->
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            Error message will be printed here
        </div>

        <!-- Form -->
        <div class="bg-white p-6 rounded-xl shadow">

            <form class="space-y-4">

                <div class="grid grid-cols-2 gap-4">
                    <input type="text" placeholder="Book Title"
                        class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-teal-400">

                    <input type="text" placeholder="Author"
                        class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-teal-400">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <input type="text" placeholder="ISBN"
                        class="w-full p-3 border rounded-lg">

                    <select class="w-full p-3 border rounded-lg">
                        <option>Select Category</option>
                        <option>Fiction</option>
                        <option>Technology</option>
                    </select>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <input type="text" placeholder="Publisher"
                        class="w-full p-3 border rounded-lg">

                    <input type="date"
                        class="w-full p-3 border rounded-lg">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <input type="number" placeholder="Pages"
                        class="w-full p-3 border rounded-lg">

                    <input type="number" placeholder="Quantity"
                        class="w-full p-3 border rounded-lg">
                </div>

                <button class="w-full bg-gradient-to-r from-slate-800 to-teal-400 text-white py-3 rounded-lg">
                    Add Book
                </button>

            </form>

        </div>

    </main>

</div>

</body>
</html>