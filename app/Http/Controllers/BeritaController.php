<?php

namespace App\Http\Controllers;
use App\Models\Berita;

class BeritaController extends Controller
{
    // Menampilkan halaman utama sekolah (Beranda)
    public function index()
{
    // Mengambil 3 berita terbaru dipajang diberanda
    $berita = Berita::latest()->take(3)->get();
    return view('home', compact('berita'));
}
    // Menampilkan detail sebuah berita
    public function show($slug)
{
    $berita = Berita::where('slug', $slug)->firstorFail();
    return view('berita-detail', compact('berita'));
}
}