<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>

    <title>Login CabAI</title>
</head>

<body class="bg-red-100 flex justify-center items-center h-screen">

<div class="bg-white p-8 rounded-2xl shadow-xl w-96">

    <!-- LOGO -->
    <div class="text-center mb-6">

        <h1 class="text-4xl mb-1">
            🌶
        </h1>

        <h2 class="text-3xl font-bold text-red-600">
            CabAI
        </h2>

        <p class="text-gray-500 mt-1 text-base">
            Smart Farming AI
        </p>

    </div>

    <!-- ERROR -->
    @if(session('error'))
        <div class="bg-red-200 text-red-700 p-3 rounded-lg mb-4">
            {{ session('error') }}
        </div>
    @endif

    <!-- FORM LOGIN -->
    <form action="/login-proses" method="POST">
        @csrf

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

        <!-- BUTTON LOGIN -->
        <button class="w-full bg-red-600 text-white p-3 rounded-xl hover:bg-red-500 transition duration-300 font-semibold shadow-md">
            Login
        </button>

    </form>

    <!-- REGISTER -->
    <p class="text-center mt-6 text-gray-600">

        Belum punya akun?

        <a href="/register" class="text-red-600 font-bold hover:underline">
            Register
        </a>

    </p>

</div>

</body>
</html>