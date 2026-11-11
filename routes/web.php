<?php

use Illuminate\Support\Facades\Route;

// Halaman Beranda (Utama)
Route::get('/', function () {
    return view('Beranda');
});

// Halaman Profil Sekolah
Route::get('/profil', function () {
    return view('profil');
});

// Halaman Fasilitas
Route::get('/fasilitas', function () {
    return view('fasilitas');
});

// Halaman Kontak
Route::get('/kontak', function () {
    return view('kontak');
});

