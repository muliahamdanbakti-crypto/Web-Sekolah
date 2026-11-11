<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Menggunakan Query Builder agar cepat tanpa perlu membuat Model

class KontakController extends Controller
{
    public function kirimPesan(Request $request)
    {
        // 1. Validasi Input agar data tidak kosong/salah format
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'kontak'       => 'required|string|max:255',
            'isi_pesan'    => 'required|string',
        ]);

        // 2. Simpan Data ke dalam database (tabel: pesan_kontak)
        DB::table('pesan_kontak')->insert([
            'nama_lengkap' => $request->nama_lengkap,
            'kontak'       => $request->kontak,
            'isi_pesan'    => $request->isi_pesan,
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);

        // 3. Kembali ke halaman kontak dengan membawa pesan sukses
        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
