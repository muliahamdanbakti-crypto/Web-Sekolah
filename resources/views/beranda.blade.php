<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - SMAS Taruna Timika</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-50 text-gray-800 antialiased font-sans flex flex-col min-h-screen">

    <!-- Navigasi Presisi dengan Logo Samping Ideal -->
    <nav class="bg-white shadow-sm sticky top-0 z-50 border-b border-gray-100">
        <div class="max-w-5xl mx-auto px-6 py-4 flex flex-col sm:flex-row justify-between items-center gap-4">
            
            <!-- Pemasangan Logo dan Nama Sekolah Berjejer Rapi -->
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Logo SMAS Taruna Timika" class="h-25 w-auto object-contain">
                <div class="font-bold text-xl text-blue-900 tracking-tight flex flex-col justify-center leading-none">
                    <span>SMAS Taruna Timika</span>
                    <span class="text-[10px] text-amber-500 font-semibold tracking-wider mt-1">KABUPATEN MIMIKA</span>
                </div>
            </div>

            <!-- Menus Tautan (Menu Ekstrakurikuler Sudah Dihapus) -->
            <ul class="flex items-center gap-6 font-semibold text-gray-600 text-sm">
                <li><a href="/" class="text-blue-700 border-b-2 border-blue-700 pb-1">Beranda</a></li>
                <li><a href="/profil" class="hover:text-blue-700 transition">Profil Sekolah</a></li>
                <li><a href="/fasilitas" class="hover:text-blue-700 transition">Fasilitas</a></li>
                <li><a href="/kontak" class="hover:text-blue-700 transition">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <!-- Konten Utama dengan Card Rapi -->
    <main class="max-w-5xl mx-auto px-6 py-10 fgrow">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Card Pengumuman -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <h2 class="text-xl font-bold text-blue-900 mb-4 border-b pb-2">Berita & Informasi Terbaru</h2>
                <p class="text-gray-500 italic text-sm">Belum ada informasi terbaru saat ini.</p>
            </div>
            
            <!-- Card Sambutan Pendek -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <h2 class="text-xl font-bold text-blue-900 mb-4 border-b pb-2">Sambutan Sekolah</h2>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Selamat datang di website SMAS Taruna Timika. Kami berkomitmen membentuk generasi muda Mimika yang disiplin, cerdas, berkarakter, dan berbudaya lingkungan.
                </p>
            </div>

             <!-- Card ekstrakurikuler -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <h2 class="text-xl font-bold text-blue-900 mb-4 border-b pb-2">Ekstrakurikuler</h2>
                <p class="text-gray-600 text-sm leading-relaxed">
                <li>Pramuka</li>
                <li>Paskibra</li>
                <li>PMR</li>
                <li>Marching Band</li>
                <li>PERS</li>
                <li>Futsal</li>
                <li>Taruna Voice</li>
                <li>English Club</li>

                </p>
            </div>

        </div>
    </main>

    <!-- Bagian Kaki Halaman / Footer dengan Copyright Resmi -->
    <footer class="bg-blue-950 text-blue-100 text-sm mt-auto border-t border-blue-900/50">
        <div class="max-w-5xl mx-auto px-6 py-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <!-- Bagian Kiri: Teks Hak Cipta otomatis mengikuti tahun berjalan -->
            <div class="text-center md:text-left text-xs md:text-sm">
                &copy; {{ date('Y') }} <span class="text-white font-bold">SMAS Taruna Timika</span>. MHB.
            </div>
        </div>
    </footer>

</body>
</html>
