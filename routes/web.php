<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoController;
use App\Models\Foto;

// Route untuk halaman dashboard. Menampilkan semua foto terbaru beserta usernya.
// Hanya bisa diakses oleh user yang sudah login dan terverifikasi.
Route::get('/', function () {
    // Mengambil data foto beserta usernya, diurutkan dari yang terbaru.
    $fotos = Foto::with('user')->latest()->get();
    // Menampilkan view 'dashboard' dengan data foto.
    return view('dashboard', compact('fotos'));
})->middleware(['auth', 'verified'])->name('dashboard');


// Route untuk menampilkan daftar foto.
Route::get('/foto', [FotoController::class, 'index'])->name('foto.index');

// Route untuk halaman profile. 
// Hanya bisa diakses oleh user yang sudah login.
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Route untuk resource FotoController. 
// Hanya bisa diakses oleh user yang sudah login.
// Method yang tersedia: index, create, store, show, edit, update, destroy.
Route::middleware(['auth'])->group(function () {
    Route::resource('foto', FotoController::class);
});

// Memuat route untuk autentikasi.
require __DIR__ . '/auth.php';
