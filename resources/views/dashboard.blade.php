
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Dashboard Monitoring Cabai</title>
</head>
<body class="bg-gray-100 font-sans">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white shadow-lg">

        <div class="p-6 border-b">
            <h1 class="text-2xl font-bold text-red-600">
                🌶 CabAI
            </h1>
            <p class="text-sm text-gray-500 mt-1">
                Smart Farming AI
            </p>
        </div>

        <nav class="p-4 space-y-2">

            <a href="#"
               class="flex items-center gap-3 bg-red-100 text-red-600 p-3 rounded-xl font-semibold">
                📊 Dashboard
            </a>

            <a href="/monitoring"
               class="flex items-center gap-3 hover:bg-gray-100 p-3 rounded-xl">
                🌡 Monitoring Sensor
            </a>

            <a href="/deteksi"
               class="flex items-center gap-3 hover:bg-gray-100 p-3 rounded-xl">
                🤖 Deteksi AI
            </a>

            <a href="#"
               class="flex items-center gap-3 hover:bg-gray-100 p-3 rounded-xl">
                📈 Laporan
            </a>

            <a href="#"
               class="flex items-center gap-3 hover:bg-gray-100 p-3 rounded-xl">
                ⚙ Pengaturan
            </a>

            <a href="/logout"
               class="flex items-center gap-3 hover:bg-red-100 text-red-500 p-3 rounded-xl mt-10">
                🚪 Logout
            </a>

        </nav>

    </aside>


    <!-- CONTENT -->
    <main class="flex-1 p-8">

        <!-- HEADER -->
        <div class="flex justify-between items-center mb-8">

            <div>
                <h2 class="text-3xl font-bold text-gray-800">
                    Dashboard Monitoring Cabai
                </h2>

                <p class="text-gray-500 mt-1">
                    Monitoring kondisi kebun secara realtime
                </p>
            </div>

            <div class="bg-white px-4 py-2 rounded-xl shadow">
                👨 Admin
            </div>

        </div>


        <!-- CARD SENSOR -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">

            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-500">Suhu</p>
                        <h3 class="text-3xl font-bold mt-2">27°C</h3>
                    </div>
                    <div class="text-4xl">🌡</div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-500">Kelembapan</p>
                        <h3 class="text-3xl font-bold mt-2">75%</h3>
                    </div>
                    <div class="text-4xl">💧</div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-500">pH Tanah</p>
                        <h3 class="text-3xl font-bold mt-2">6.5</h3>
                    </div>
                    <div class="text-4xl">🧪</div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-500">Nutrisi</p>
                        <h3 class="text-3xl font-bold mt-2">1380 PPM</h3>
                    </div>
                    <div class="text-4xl">🌱</div>
                </div>
            </div>

        </div>


        <!-- GRID CONTENT -->
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

            <!-- CHART -->
            <div class="xl:col-span-2 bg-white p-6 rounded-2xl shadow">

                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-bold text-gray-700">
                        Grafik Monitoring Sensor
                    </h3>

                    <select class="border rounded-lg px-3 py-2">
                        <option>Hari Ini</option>
                        <option>Minggu Ini</option>
                        <option>Bulan Ini</option>
                    </select>
                </div>

                <canvas id="sensorChart" height="100"></canvas>

            </div>


            <!-- STATUS AI -->
            <div class="bg-white p-6 rounded-2xl shadow">

                <h3 class="text-xl font-bold text-gray-700 mb-6">
                    Status AI Daun Cabai
                </h3>

                <div class="space-y-4">

                    <div class="flex justify-between items-center bg-green-100 p-4 rounded-xl">
                        <div>
                            <h4 class="font-semibold text-green-700">
                                Daun Sehat
                            </h4>
                            <p class="text-sm text-gray-600">
                                80% kondisi baik
                            </p>
                        </div>
                        <span class="text-2xl">✅</span>
                    </div>

                    <div class="flex justify-between items-center bg-yellow-100 p-4 rounded-xl">
                        <div>
                            <h4 class="font-semibold text-yellow-700">
                                Warning
                            </h4>
                            <p class="text-sm text-gray-600">
                                15% terdeteksi gejala
                            </p>
                        </div>
                        <span class="text-2xl">⚠</span>
                    </div>

                    <div class="flex justify-between items-center bg-red-100 p-4 rounded-xl">
                        <div>
                            <h4 class="font-semibold text-red-700">
                                Penyakit
                            </h4>
                            <p class="text-sm text-gray-600">
                                5% perlu penanganan
                            </p>
                        </div>
                        <span class="text-2xl">❌</span>
                    </div>

                </div>

            </div>

        </div>


        <!-- RIWAYAT -->
        <div class="bg-white p-6 rounded-2xl shadow mt-8">

            <div class="flex justify-between items-center mb-6">
                <h3 class="text-xl font-bold text-gray-700">
                    Riwayat Deteksi AI
                </h3>

                <button class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-500">
                    Lihat Semua
                </button>
            </div>

            <div class="overflow-x-auto">

                <table class="w-full">

                    <thead>
                        <tr class="border-b text-left">
                            <th class="py-3">Gambar</th>
                            <th class="py-3">Nama Penyakit</th>
                            <th class="py-3">Status</th>
                            <th class="py-3">Tanggal</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-4">🌶 Daun Cabai</td>
                            <td>Antraknosa</td>
                            <td>
                                <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm">
                                    Bahaya
                                </span>
                            </td>
                            <td>10 Mei 2026</td>
                        </tr>

                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-4">🌶 Daun Cabai</td>
                            <td>Bercak Daun</td>
                            <td>
                                <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-sm">
                                    Warning
                                </span>
                            </td>
                            <td>10 Mei 2026</td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                            <td class="py-4">🌶 Daun Cabai</td>
                            <td>Sehat</td>
                            <td>
                                <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">
                                    Aman
                                </span>
                            </td>
                            <td>10 Mei 2026</td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </main>

</div>


<!-- CHART JS -->
<script>

const ctx = document.getElementById('sensorChart');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['08:00', '09:00', '10:00', '11:00', '12:00', '13:00'],
        datasets: [
            {
                label: 'Suhu',
                data: [24, 25, 26, 27, 26, 28],
                borderColor: 'red',
                backgroundColor: 'rgba(255,0,0,0.1)',
                tension: 0.4
            },
            {
                label: 'Kelembapan',
                data: [70, 72, 75, 74, 76, 78],
                borderColor: 'blue',
                backgroundColor: 'rgba(0,0,255,0.1)',
                tension: 0.4
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top'
            }
        }
    }
});

</script>

</body>
</html>
```

