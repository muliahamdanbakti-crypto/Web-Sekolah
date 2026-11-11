<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah - SMAS Taruna Timika</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-50 text-gray-800 antialiased font-sans flex flex-col min-h-screen">


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
                <li><a href="/profil" class="text-blue-700 border-b-2 border-blue-700 pb-1">Profil Sekolah</a></li>
                <li><a href="/fasilitas" class="hover:text-blue-700 transition">Fasilitas</a></li>
                <li><a href="/kontak" class="hover:text-blue-700 transition">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <!-- Konten Utama -->
    <main class="max-w-5xl mx-auto px-6 py-10 fgrow">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Visi & Misi -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <h2 class="text-xl font-bold text-blue-900 mb-4 border-b pb-2">Visi</h2>
                <p class="text-gray-600 italic leading-relaxed">
                    "Menciptakan Lulusan Smas Taruna Timika Yang Berkualitas Dalam Kepemimpinan, Berkarakter , Berwawasan Kebangsaan, Kejuangan Dan Kebudayaan."
                </p>
                
                <h2 class="text-xl font-bold text-blue-900 mt-6 mb-4 border-b pb-2">Misi</h2>
                <ul class="list-disc list-inside text-gray-600 space-y-2 text-sm md:text-base leading-relaxed">
                    <li>Mewujudkan Sumber Daya Manusia Yang Profesional Dalam Mencapi Keunggulan Komperatif.</li>
                    <li>Mewujudkan Peningkatan Mutu Pendidikan, Baik Kualitas Maupun Kuantitas.</li>
                    <li>Mewujudkan Wahana Belajar Sehingga Dapat Membantu Pengembangan, Peningkatan Bakat Dan Kemampuan Taruna/i.</li>
                    <li>Mewujudkan Program Peningkatan Mutu Pendidikan Dan Pelatihan Pada SMAS Taruna Timika.</li>
                    <li>Mewujudkan Keamanan dan Kenyamanan.</li>
                    <li>Meningkatkan Kedisiplinan Taruna/i.</li>
                    <li>Mewujudkan Kebersamaan Dimanapun Berada.</li>
                </ul>
            </div>
            
            <!-- Sejarah Singkat -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <h2 class="text-xl font-bold text-blue-900 mb-4 border-b pb-2">Sejarah Singkat</h2>
                <p class="text-gray-600 leading-relaxed text-sm md:text-base">
                    SMAS Taruna Timika didirikan untuk mencetak generasi muda di Mimika yang disiplin, cerdas, dan siap bersaing di era global. Dengan sistem pembinaan semi Militer, sekolah fokus membentuk fisik, mental, dan spiritual siswa yang kuat.
                </p>
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
