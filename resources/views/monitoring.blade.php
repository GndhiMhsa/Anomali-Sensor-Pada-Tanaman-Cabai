<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Chart JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Monitoring Sensor</title>
</head>

<body class="bg-gray-100 font-sans">

<div class="flex min-h-screen">


   <aside class="w-64 bg-white shadow-lg hidden md:block min-h-screen">

    <!-- LOGO -->
    <div class="p-6 border-b">

        <h1 class="text-2xl font-bold text-red-600">
            🌶 CabAI
        </h1>

        <p class="text-sm text-gray-500 mt-1">
            Smart Farming AI
        </p>

    </div>

    <!-- MENU -->
    <nav class="p-4 space-y-2">

        <!-- DASHBOARD -->
        <a href="/dashboard"
           class="flex items-center gap-3 p-3 rounded-xl font-semibold transition

           {{ request()->is('dashboard') 
           ? 'bg-red-100 text-red-600 border border-orange-300' 
           : 'hover:bg-gray-100 text-gray-700' }}">

            <span>📊</span>
            <span>Dashboard</span>

        </a>

        <!-- MONITORING -->
        <a href="/monitoring"
           class="flex items-center gap-3 p-3 rounded-xl font-semibold transition

           {{ request()->is('monitoring') 
           ? 'bg-red-100 text-red-600 border border-orange-300' 
           : 'hover:bg-gray-100 text-gray-700' }}">

            <span>🌡</span>
            <span>Monitoring Sensor</span>

        </a>

        <!-- DETEKSI -->
        <a href="/deteksi"
           class="flex items-center gap-3 p-3 rounded-xl font-semibold transition

           {{ request()->is('deteksi') 
           ? 'bg-red-100 text-red-600 border border-orange-300' 
           : 'hover:bg-gray-100 text-gray-700' }}">

            <span>🤖</span>
            <span>Deteksi AI</span>

        </a>

        <!-- LAPORAN -->
        <a href="/laporan"
           class="flex items-center gap-3 p-3 rounded-xl font-semibold transition

           {{ request()->is('laporan') 
           ? 'bg-red-100 text-red-600 border border-orange-300' 
           : 'hover:bg-gray-100 text-gray-700' }}">

            <span>📈</span>
            <span>Laporan</span>

        </a>

        <!-- PENGATURAN -->
        <a href="/pengaturan"
           class="flex items-center gap-3 p-3 rounded-xl font-semibold transition

           {{ request()->is('pengaturan') 
           ? 'bg-red-100 text-red-600 border border-orange-300' 
           : 'hover:bg-gray-100 text-gray-700' }}">

            <span>⚙</span>
            <span>Pengaturan</span>

        </a>

        <!-- LOGOUT -->
        <a href="/logout"
           class="flex items-center gap-3 hover:bg-red-100 text-red-500 p-3 rounded-xl mt-10 transition">

            <span>🚪</span>
            <span>Logout</span>

        </a>

    </nav>

</aside>

    <!-- Content -->
    <main class="flex-1 p-8">

        <!-- Header -->
        <div class="flex justify-between items-center mb-8">

            <div>

                <h1 class="text-3xl font-bold text-gray-800">
                    Monitoring Sensor Tanaman Cabai
                </h1>

                <p class="text-gray-500">
                    Realtime monitoring sensor IoT
                </p>

            </div>

            <div class="bg-green-100 text-green-600 px-4 py-2 rounded-xl font-semibold">
                AI ACTIVE
            </div>

        </div>

        <!-- Alert -->
        <div class="bg-red-100 border border-red-300 text-red-600 p-4 rounded-xl mb-6">

            ⚠ Terdeteksi anomali suhu tinggi pada sensor cabai.

        </div>

        <!-- Sensor Cards -->
        <div class="grid grid-cols-4 gap-5 mb-8">

            <!-- Suhu -->
            <div class="bg-white p-5 rounded-2xl shadow">

                <div class="flex justify-between">

                    <p class="text-gray-500">
                        Suhu
                    </p>

                    <span class="text-red-500">
                        🌡
                    </span>

                </div>

                <h2 class="text-4xl font-bold text-red-500 mt-3">
                    29.9°C
                </h2>

                <p class="text-green-500 mt-2">
                    Normal
                </p>

            </div>

            <!-- Kelembaban -->
            <div class="bg-white p-5 rounded-2xl shadow">

                <div class="flex justify-between">

                    <p class="text-gray-500">
                        Kelembaban Udara
                    </p>

                    <span class="text-blue-500">
                        💧
                    </span>

                </div>

                <h2 class="text-4xl font-bold text-blue-500 mt-3">
                    75.4%
                </h2>

                <p class="text-green-500 mt-2">
                    Stabil
                </p>

            </div>

            <!-- Tanah -->
            <div class="bg-white p-5 rounded-2xl shadow">

                <div class="flex justify-between">

                    <p class="text-gray-500">
                        Kelembaban Tanah
                    </p>

                    <span class="text-green-500">
                        🌱
                    </span>

                </div>

                <h2 class="text-4xl font-bold text-green-500 mt-3">
                    65.9%
                </h2>

                <p class="text-green-500 mt-2">
                    Aman
                </p>

            </div>

            <!-- Cahaya -->
            <div class="bg-white p-5 rounded-2xl shadow">

                <div class="flex justify-between">

                    <p class="text-gray-500">
                        Intensitas Cahaya
                    </p>

                    <span class="text-yellow-500">
                        ☀
                    </span>

                </div>

                <h2 class="text-4xl font-bold text-yellow-500 mt-3">
                    1317
                </h2>

                <p class="text-green-500 mt-2">
                    Optimal
                </p>

            </div>

        </div>

        <!-- Chart -->
        <div class="bg-white p-6 rounded-2xl shadow mb-8">

            <div class="flex justify-between items-center mb-5">

                <h2 class="text-2xl font-bold">
                    Grafik Sensor Realtime
                </h2>

                <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">
                    LIVE
                </span>

            </div>

            <canvas id="sensorChart"></canvas>

        </div>

        <!-- Statistik -->
        <div class="grid grid-cols-3 gap-5">

            <div class="bg-white p-5 rounded-2xl shadow">

                <p class="text-gray-500">
                    Total Pembacaan
                </p>

                <h2 class="text-4xl font-bold text-purple-500 mt-3">
                    48
                </h2>

            </div>

            <div class="bg-white p-5 rounded-2xl shadow">

                <p class="text-gray-500">
                    Anomali Terdeteksi
                </p>

                <h2 class="text-4xl font-bold text-red-500 mt-3">
                    6
                </h2>

            </div>

            <div class="bg-white p-5 rounded-2xl shadow">

                <p class="text-gray-500">
                    Status Sistem
                </p>

                <h2 class="text-3xl font-bold text-green-500 mt-3">
                    AKTIF
                </h2>

            </div>

        </div>

    </main>

</div>

<!-- Chart -->
<script>

const ctx = document.getElementById('sensorChart');

new Chart(ctx, {
    type: 'line',

    data: {

        labels: [
            '08:00',
            '09:00',
            '10:00',
            '11:00',
            '12:00',
            '13:00',
            '14:00'
        ],

        datasets: [

            {
                label: 'Suhu',
                data: [28,29,30,29,31,32,30],
                borderColor: 'red',
                tension: 0.4
            },

            {
                label: 'Kelembaban',
                data: [70,72,74,75,73,76,75],
                borderColor: 'blue',
                tension: 0.4
            },

            {
                label: 'Tanah',
                data: [60,61,62,63,64,65,66],
                borderColor: 'green',
                tension: 0.4
            }

        ]
    }
});

</script>

</body>
</html>


