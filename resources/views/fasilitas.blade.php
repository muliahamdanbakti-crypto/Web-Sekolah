<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas - SMAS Taruna Timika</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-50 text-gray-800 antialiased font-sans flex flex-col min-h-screen">

    </header>

    <!-- Navigasi Presisi dengan Logo Samping Ideal -->
    <nav class="bg-white shadow-sm sticky top-0 z-50 border-b border-gray-100">
        <div class="max-w-5xl mx-auto px-6 py-4 flex flex-col sm:flex-row justify-between items-center gap-4">
            
            <!-- Pemasangan Logo dan Nama Sekolah Berjejer Rapi (Kembali ke h-10 agar Ramping) -->
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Logo SMAS Taruna Timika" class="h-25 w-auto object-contain">
                <div class="font-bold text-xl text-blue-900 tracking-tight flex flex-col justify-center leading-none">
                    <span>SMAS Taruna Timika</span>
                    <span class="text-[10px] text-amber-500 font-semibold tracking-wider mt-1">KABUPATEN MIMIKA</span>
                </div>
            </div>

            <!-- Menu Tautan -->
            <ul class="flex items-center gap-6 font-semibold text-gray-600 text-sm">
                <li><a href="/" class="hover:text-blue-700 transition">Beranda</a></li>
                <li><a href="/profil" class="hover:text-blue-700 transition">Profil Sekolah</a></li>
                <li><a href="/fasilitas" class="text-blue-700 border-b-2 border-blue-700 pb-1">Fasilitas</a></li>
                <li><a href="/kontak" class="hover:text-blue-700 transition">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <!-- Konten Utama dengan Grid Kartu Tiga Kolom -->
    <main class="max-w-5xl mx-auto px-6 py-10 grow">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Card Fasilitas 1 -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition duration-300">
                <h3 class="font-bold text-lg text-blue-900 mb-2 border-b pb-2">Ruang Kelas</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Ruang kelas belajar yang nyaman, bersih, dan dilengkapi fasilitas multimedia interaktif.</p>
            </div>

            <!-- Card Fasilitas 2 -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition duration-300">
                <h3 class="font-bold text-lg text-blue-900 mb-2 border-b pb-2">Lab Komputer</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Laboratorium komputer modern untuk menunjang ujian CBT dan pembelajaran IT praktis.</p>
            </div>

            <!-- Card Fasilitas 3 -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition duration-300">
                <h3 class="font-bold text-lg text-blue-900 mb-2 border-b pb-2">Lapangan Olahraga</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Area luas untuk latihan kedisiplinan ketarunaan serta kegiatan olahraga siswa.</p>
            </div>

        </div>
    </main>

    <!-- Bagian Kaki Halaman / Footer dengan Copyright Resmi -->
    <footer class="bg-blue-950 text-blue-100 text-sm mt-auto border-t border-blue-900/50">
        <div class="max-w-5xl mx-auto px-6 py-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <!-- Bagian Kiri: Teks Hak Cipta otomatis mengikuti tahun berjalan (2026) -->
            <div class="text-center md:text-left text-xs md:text-sm">
                &copy; {{ date('Y') }} <span class="text-white font-bold">SMAS Taruna Timika</span>. MHB.
            </div>
        </div>
    </footer>

</body>
</html>
