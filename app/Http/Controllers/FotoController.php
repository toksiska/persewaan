<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FotoController extends Controller
{
    // Menampilkan semua foto dengan data user (eager loading)
    public function index()
    {
        $fotos = Foto::with('user')->latest()->get();
        return view('foto.index', compact('fotos'));
    }

    // Menampilkan form untuk upload foto baru
    public function create()
    {
        return view('foto.create');
    }

    // Menyimpan foto baru ke database dan storage
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // Max 2MB
        ]);

        // Upload dan simpan file foto ke storage public
        $image = $request->file('image');
        $path = $image->store('fotos', 'public');

        // Buat record baru di database
        Foto::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image_path' => $path,
            'user_id' => auth()->id() // ID user yang sedang login
        ]);

        return redirect()->route('foto.index')->with('success', 'Foto berhasil diunggah!');
    }

    // Menghapus foto dari database dan storage
    public function destroy(Foto $foto)
    {
        // Cek apakah user yang menghapus adalah pemilik foto
        if ($foto->user_id !== auth()->id()) {
            return redirect()->route('foto.index')->with('error', 'Unauthorized');
        }

        // Hapus file foto dari storage
        Storage::disk('public')->delete($foto->image_path);
        // Hapus record dari database
        $foto->delete();

        return redirect()->route('foto.index')->with('success', 'Foto berhasil dihapus!');
    }
}
