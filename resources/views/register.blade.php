<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Register Admin</title>
</head>

<body class="bg-red-100 flex justify-center items-center h-screen">

<div class="bg-white p-8 rounded-2xl shadow-xl w-96">

    <!-- TITLE -->
    <div class="flex items-center justify-center gap-2 mb-6">

        <h1 class="text-3xl font-bold text-red-600">
            Register
        </h1>

        <span class="text-3xl">
            🌶
        </span>

    </div>

    <!-- FORM -->
    <form action="/register-proses" method="POST">
        @csrf

        <!-- NAMA -->
        <div class="mb-4">

            <label class="text-gray-700 font-medium">
                Nama
            </label>

            <input type="text"
                   name="name"
                   placeholder="Masukkan nama"
                   class="w-full border border-gray-300 p-3 rounded-xl mt-2 focus:outline-none focus:ring-2 focus:ring-red-400"
                   required>

        </div>

        <!-- EMAIL -->
        <div class="mb-4">

            <label class="text-gray-700 font-medium">
                Email
            </label>

            <input type="email"
                   name="email"
                   placeholder="Masukkan email"
                   class="w-full border border-gray-300 p-3 rounded-xl mt-2 focus:outline-none focus:ring-2 focus:ring-red-400"
                   required>

        </div>

        <!-- PASSWORD -->
        <div class="mb-5">

            <label class="text-gray-700 font-medium">
                Password
            </label>

            <input type="password"
                   name="password"
                   placeholder="Masukkan password"
                   class="w-full border border-gray-300 p-3 rounded-xl mt-2 focus:outline-none focus:ring-2 focus:ring-red-400"
                   required>

        </div>

        <!-- BUTTON -->
        <button class="w-full bg-red-600 text-white p-3 rounded-xl hover:bg-red-500 transition duration-300 font-semibold shadow-md">
            Register
        </button>

    </form>

    <!-- LOGIN -->
    <p class="text-center mt-5 text-gray-600">

        Sudah punya akun?

        <a href="/login" class="text-red-600 font-bold hover:underline">
            Login
        </a>

    </p>

</div>

</body>
</html>