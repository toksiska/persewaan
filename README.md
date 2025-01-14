# Galeri Laravel

Proyek ini adalah Galeri Laravel, sebuah aplikasi web sederhana yang memungkinkan pengguna untuk mengelola galeri foto. Aplikasi ini menggunakan Laravel sebagai framework utama dan memanfaatkan beberapa library dan teknologi lainnya untuk membangun fitur-fitur utama.

## Fitur Utama

* **Galeri Foto:** Pengguna dapat mengunggah, mengedit, dan menghapus foto.
* **Autentikasi:** Pengguna dapat mendaftar, login, dan keluar.


## Teknologi yang Digunakan

* **PHP:** Bahasa pemrograman server-side yang menjadi dasar Laravel.  Pastikan Anda memiliki versi PHP yang kompatibel dengan versi Laravel yang digunakan (periksa persyaratan sistem Laravel).
* **Laravel:** Framework PHP yang digunakan untuk membangun aplikasi web. Proyek ini menggunakan versi Laravel [Sebutkan versi Laravel jika diketahui, atau cara memeriksanya setelah di-clone].
* **Composer:** Dependency manager untuk PHP, digunakan untuk mengelola library dan dependensi proyek.
* **Vite:**  Build tool frontend yang digunakan untuk mengelola aset statis seperti CSS dan JavaScript.  (Berdasarkan konteks `resources\views\welcome.blade.php`)
* **Blade:** Templating engine bawaan Laravel yang digunakan untuk membuat tampilan HTML. (Berdasarkan konteks `resources\views\welcome.blade.php`)
* **Tailwind CSS:**  Framework CSS utility-first untuk styling. (Disimpulkan dari penggunaan class Tailwind CSS seperti `grid`, `grid-cols-2`, `antialiased` di `resources\views\welcome.blade.php`)
* **Database (SQLite, MySQL, PostgreSQL, dll.):**  Laravel mendukung berbagai macam database. Konfigurasi database dapat ditemukan di file `config/database.php`.  (Berdasarkan konteks `config/database.php`)


## Cara Meng-clone Proyek

1. **Prasyarat:** Pastikan Anda telah menginstal Git, Composer, dan PHP di sistem Anda.

2. **Clone repositori:** Buka terminal atau command prompt dan jalankan perintah berikut:

```bash
git clone <URL_REPOSITORI_GITHUB>
```

Ganti <URL_REPOSITORI_GITHUB> dengan URL repositori GitHub proyek ini.

3. **Install dependensi**: Setelah cloning selesai, masuk ke direktori proyek:

```bash
cd nama-folder-proyek
```

Kemudian, jalankan Composer untuk menginstal dependensi PHP:

```bash
composer install
```

4. **Konfigurasi environment**: Duplikat file .env.example menjadi .env dan sesuaikan konfigurasi sesuai kebutuhan, terutama:

* ``APP_NAME``: Nama aplikasi.
* ``APP_KEY``: Generate key aplikasi dengan perintah php artisan key:generate
* ``DB_CONNECTION``, ``DB_HOST``, ``DB_PORT``, ``DB_DATABASE``, ``DB_USERNAME``, ``DB_PASSWORD``: Konfigurasi database.

Generate key aplikasi:
```bash
php artisan key:generate
```

6. **Jalankan migrasi database (jika ada)**: Jika proyek menggunakan database, jalankan migrasi untuk membuat tabel yang diperlukan:

```bash
php artisan migrate
```

7. **Jalankan server pengembangan**: Untuk menjalankan aplikasi dalam mode pengembangan, gunakan perintah berikut:

```bash
php artisan serve
```

Aplikasi akan berjalan di http://localhost:8000/.

8. **Build frontend assets (jika perlu)**: Jika Anda melakukan perubahan pada file CSS atau JavaScript, jalankan perintah berikut untuk mengompilasi aset menggunakan Vite:

```bash
npm install
npm run dev
```

9. **Selamat!** Anda sekarang telah berhasil meng-clone proyek ini dan menjalankannya di lingkungan pengembangan.

**Kontribusi:**

Kontribusi dari komunitas sangat dihargai. Jika Anda ingin berkontribusi, silakan buka issue atau pull request di repositori GitHub.
