<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            {{-- Judul halaman --}}
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Galeri Foto') }}
            </h2>
            {{-- Tombol untuk mengupload foto baru --}}
            <x-primary-button onclick="window.location='{{ route('foto.create') }}'">
                {{ __('Upload Foto') }}
            </x-primary-button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- Grid untuk menampilkan foto --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        {{-- Looping untuk menampilkan setiap foto --}}
                        @forelse($fotos as $foto)
                            <div class="bg-white dark:bg-gray-700 rounded-lg shadow overflow-hidden">
                                {{-- Menampilkan gambar --}}
                                <img src="{{ Storage::url($foto->image_path) }}" alt="{{ $foto->judul }}"
                                    class="w-full h-48 object-cover">
                                <div class="p-4">
                                    {{-- Judul foto --}}
                                    <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-gray-100">
                                        {{ $foto->judul }}
                                    </h3>
                                    {{-- Deskripsi foto --}}
                                    <p class="text-gray-600 dark:text-gray-300 mb-2">
                                        {{ $foto->deskripsi }}
                                    </p>
                                    {{-- Nama pengguna yang mengunggah foto --}}
                                    <p class="text-sm text-gray-500 dark:text-gray-400">
                                        Uploaded by {{ $foto->user->name }}
                                    </p>

                                    {{-- Tombol hapus hanya ditampilkan jika foto diunggah oleh pengguna yang sedang login --}}
                                    @if ($foto->user_id === auth()->id())
                                        <form action="{{ route('foto.destroy', $foto) }}" method="POST" class="mt-2">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button onclick="return confirm('Yakin ingin menghapus?')">
                                                {{ __('Hapus') }}
                                            </x-danger-button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                            {{-- Pesan jika tidak ada foto --}}
                        @empty
                            <div class="col-span-full text-center py-8">
                                <p class="text-gray-500 dark:text-gray-400">
                                    {{ __('Belum ada foto yang diunggah') }}
                                </p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
