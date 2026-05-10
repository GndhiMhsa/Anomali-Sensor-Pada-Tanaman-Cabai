<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CabAI Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
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

    <!-- CONTENT -->
    <main class="flex-1 p-6">

        <!-- HEADER -->
         <div class="flex justify-between items-center mb-8">

            <div>

                <h1 class="text-3xl font-bold text-gray-800">
                 Deteksi Anomali Cabai
                </h1>

                <p class="text-gray-500">
                    Realtime monitoring sensor IoT
                </p>

            </div>

            <div class="bg-green-100 text-green-600 px-4 py-2 rounded-xl font-semibold">
                AI ACTIVE
            </div>

        </div>


        <!-- GRID -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- MONITORING -->
            <div class="bg-white rounded-2xl shadow p-5">

                <div class="flex justify-between items-center mb-4">
                    <div>
                        <h2 class="font-bold text-lg">
                            Greenhouse Monitoring
                        </h2>

                        <p class="text-sm text-gray-500">
                            Realtime Camera Detection
                        </p>
                    </div>
                </div>

                <div class="space-y-5">

                    <!-- CARD 1 -->
                    <div class="border rounded-xl overflow-hidden">

                        <div class="bg-red-50 p-4 border-b">
                            <h3 class="font-semibold">
                                Greenhouse A - Box 1
                            </h3>

                            <p class="text-red-500 text-sm">
                                Tanaman Cabai Terdeteksi Penyakit
                            </p>
                        </div>

                        <img
                            src="https://images.unsplash.com/photo-1588252303782-cb80119abd6d?q=80&w=1200&auto=format&fit=crop"alt="Tanaman Cabai"
                                  class="w-full h-56 object-cover rounded-xl"
                            alt="Tanaman Cabai"
                            class="w-full h-56 object-cover"
                        >

                        <div class="p-3 flex justify-between text-sm text-gray-500">
                            <span>Cabai Monitoring</span>
                            <span>2 menit lalu</span>
                        </div>

                    </div>

                    <!-- CARD 2 -->
                    <div class="border rounded-xl overflow-hidden">

                        <div class="bg-green-50 p-4 border-b">
                            <h3 class="font-semibold">
                                Greenhouse A - Box 2
                            </h3>

                            <p class="text-green-500 text-sm">
                                Tanaman Cabai Sehat
                            </p>
                        </div>

                        <img
                            src="https://images.unsplash.com/photo-1588252303782-cb80119abd6d?q=80&w=1200&auto=format&fit=crop"alt="Tanaman Cabai"
                                  class="w-full h-56 object-cover rounded-xl"
                            alt="Cabai Sehat"
                            class="w-full h-56 object-cover"
                        >

                        <div class="p-3 flex justify-between text-sm text-gray-500">
                            <span>Healthy Chili Plant</span>
                            <span>1 menit lalu</span>
                        </div>

                    </div>

                </div>
            </div>

            <!-- STATISTIK -->
            <div class="bg-white rounded-2xl shadow p-5">

                <h2 class="text-xl font-bold mb-5">
                    Statistik Sensor
                </h2>

                <div class="grid grid-cols-2 gap-4">

                    <div class="bg-gray-100 p-4 rounded-xl">
                        <p class="text-sm text-gray-500">
                            Total Anomali
                        </p>

                        <h1 class="text-3xl font-bold">
                            6
                        </h1>
                    </div>

                    <div class="bg-red-100 p-4 rounded-xl">
                        <p class="text-sm text-red-500">
                            Tingkat Tinggi
                        </p>

                        <h1 class="text-3xl font-bold text-red-600">
                            2
                        </h1>
                    </div>

                    <div class="bg-orange-100 p-4 rounded-xl">
                        <p class="text-sm text-orange-500">
                            Tingkat Sedang
                        </p>

                        <h1 class="text-3xl font-bold text-orange-600">
                            3
                        </h1>
                    </div>

                    <div class="bg-green-100 p-4 rounded-xl">
                        <p class="text-sm text-green-500">
                            ETA Normal
                        </p>

                        <h1 class="text-3xl font-bold text-green-600">
                            4
                        </h1>
                    </div>

                </div>

                <!-- CHART -->
                <div class="mt-8">

                    <h3 class="font-semibold mb-4">
                        Distribusi Anomali
                    </h3>

                    <div class="flex items-end gap-5 h-52 border-l border-b pl-4 pb-3">

                        <div class="text-center">
                            <div class="w-12 bg-red-500 h-40 rounded-t-xl"></div>
                            <p class="text-xs mt-2">Normal</p>
                        </div>

                        <div class="text-center">
                            <div class="w-12 bg-orange-400 h-28 rounded-t-xl"></div>
                            <p class="text-xs mt-2">Rendah</p>
                        </div>

                        <div class="text-center">
                            <div class="w-12 bg-yellow-400 h-20 rounded-t-xl"></div>
                            <p class="text-xs mt-2">Sedang</p>
                        </div>

                        <div class="text-center">
                            <div class="w-12 bg-green-500 h-16 rounded-t-xl"></div>
                            <p class="text-xs mt-2">Ekstrem</p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- AI INSIGHT -->
            <div class="bg-white rounded-2xl shadow p-5">

                <h2 class="text-xl font-bold mb-5">
                    AI Insight & Rekomendasi
                </h2>

                <div class="space-y-4">

                    <!-- CARD 1 -->
                    <div class="border border-red-200 bg-red-50 rounded-xl p-4">

                        <div class="flex justify-between mb-2">
                            <h3 class="font-semibold text-red-600">
                                Tanaman Terdeteksi Penyakit
                            </h3>

                            <span class="bg-red-500 text-white text-xs px-3 py-1 rounded-full">
                                High
                            </span>
                        </div>

                        <p class="text-sm text-gray-700 mb-3">
                            Sistem AI mendeteksi adanya gejala penyakit pada daun cabai seperti:
                        </p>

                        <ul class="text-sm text-gray-600 list-disc pl-5 space-y-1">
                            <li>Daun menguning dan bercak hitam</li>
                            <li>Kemungkinan serangan jamur atau bakteri</li>
                            <li>Kelembapan terlalu tinggi</li>
                            <li>Sirkulasi udara greenhouse kurang baik</li>
                        </ul>

                        <div class="mt-4 bg-white rounded-lg p-3 border">
                            <p class="text-sm font-semibold text-red-500">
                                Rekomendasi AI:
                            </p>

                            <p class="text-sm text-gray-600 mt-1">
                                Kurangi kelembapan udara, cek kondisi tanah, dan lakukan penyemprotan fungisida ringan untuk mencegah penyebaran penyakit.
                            </p>
                        </div>

                    </div>

                    <!-- CARD 2 -->
                    <div class="border border-orange-200 bg-orange-50 rounded-xl p-4">

                        <div class="flex justify-between mb-2">
                            <h3 class="font-semibold text-orange-600">
                                Low Humidity Warning
                            </h3>

                            <span class="bg-orange-400 text-white text-xs px-3 py-1 rounded-full">
                                Medium
                            </span>
                        </div>

                        <p class="text-sm text-gray-700 mb-3">
                            Sensor mendeteksi kelembapan udara menurun drastis.
                        </p>

                        <ul class="text-sm text-gray-600 list-disc pl-5 space-y-1">
                            <li>Tanah mulai mengering</li>
                            <li>Tanaman berisiko kekurangan air</li>
                            <li>Fotosintesis dapat terganggu</li>
                        </ul>

                        <div class="mt-4 bg-white rounded-lg p-3 border">
                            <p class="text-sm font-semibold text-orange-500">
                                Rekomendasi AI:
                            </p>

                            <p class="text-sm text-gray-600 mt-1">
                                Tingkatkan frekuensi penyiraman dan aktifkan sistem humidifier greenhouse.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

</div>

</body>
</html>