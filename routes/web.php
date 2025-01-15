<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoController;
use App\Models\Foto;

// Route untuk halaman home dengan data foto
Route::get('/', function () {
    $fotos = Foto::with('user')->latest()->paginate(4); // Show 8 photos per page
    return view('home', compact('fotos')); 
});

// Route untuk halaman dashboard
Route::get('/dashboard', function () {
    $fotos = Foto::with('user')->latest()->get();
    return view('dashboard', compact('fotos'));
})->middleware(['auth', 'verified'])->name('dashboard');

// Route untuk menampilkan daftar foto
Route::get('/foto', [FotoController::class, 'index'])->name('foto.index');

// Route untuk halaman profile
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Route resource untuk FotoController
Route::middleware(['auth'])->group(function () {
    Route::resource('foto', FotoController::class);
});

require __DIR__ . '/auth.php';
