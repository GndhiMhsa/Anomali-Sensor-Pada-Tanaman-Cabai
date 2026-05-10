<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Sistem Anomali Cabai</title>
</head>

<body class="bg-gray-100">

<div class="flex">

    <!-- Sidebar -->
    <aside class="w-64 h-screen bg-red-600 text-white p-5">

        <h1 class="text-2xl font-bold mb-10">
            🌶 Sistem Cabai
        </h1>

        <ul class="space-y-3">

            <li>
                <a href="#" class="block p-3 rounded hover:bg-red-500">
                    Dashboard
                </a>
            </li>

            <li>
                <a href="#" class="block p-3 rounded hover:bg-red-500">
                    Data Sensor
                </a>
            </li>

            <li>
                <a href="#" class="block p-3 rounded hover:bg-red-500">
                    Deteksi Anomali
                </a>
            </li>

            <li>
                <a href="#" class="block p-3 rounded hover:bg-red-500">
                    Grafik
                </a>
            </li>

        </ul>

    </aside>

    <!-- Content -->
    <main class="flex-1 p-10">

        <h1 class="text-4xl font-bold mb-6">
            Dashboard Monitoring Cabai
        </h1>

        <!-- Card -->
        <div class="grid grid-cols-3 gap-6">

            <div class="bg-white p-6 rounded-xl shadow">
                <h2 class="text-xl font-bold text-gray-700">
                    Suhu
                </h2>

                <p class="text-4xl font-bold text-red-500 mt-4">
                    32°C
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <h2 class="text-xl font-bold text-gray-700">
                    Kelembapan
                </h2>

                <p class="text-4xl font-bold text-blue-500 mt-4">
                    70%
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <h2 class="text-xl font-bold text-gray-700">
                    Status
                </h2>

                <p class="text-2xl font-bold text-green-500 mt-4">
                    Normal
                </p>
            </div>

        </div>

        <!-- Table -->
        <div class="bg-white mt-10 p-6 rounded-xl shadow">

            <h2 class="text-2xl font-bold mb-4">
                Data Sensor
            </h2>

            <table class="w-full">

                <thead class="bg-red-500 text-white">

                    <tr>
                        <th class="p-3">No</th>
                        <th class="p-3">Suhu</th>
                        <th class="p-3">Kelembapan</th>
                        <th class="p-3">Status</th>
                    </tr>

                </thead>

                <tbody>

                    <tr class="border-b text-center">
                        <td class="p-3">1</td>
                        <td class="p-3">32°C</td>
                        <td class="p-3">70%</td>
                        <td class="p-3 text-green-500 font-bold">
                            Normal
                        </td>
                    </tr>

                    <tr class="border-b text-center">
                        <td class="p-3">2</td>
                        <td class="p-3">45°C</td>
                        <td class="p-3">30%</td>
                        <td class="p-3 text-red-500 font-bold">
                            Anomali
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </main>

</div>

</body>
</html>