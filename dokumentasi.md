# Dokumentasi Praktikum PHP

**Identitas Praktikan:**
* **Nama:** Nadya Shafa Ardana Az-zahra
* **NIM:** 240115026
* **Kelas:** TRPL 2A
* **Program Studi:** Teknologi Rekayasa Perangkat Lunak
* **Institusi:** Politeknik Negeri Cilacap

---

## 1. Informasi Program
* **Nama Program:** Halaman Informasi Layanan Akademik Dinamis (`halaman_dinamis.php` & `dashboard.php`)
* **Lokasi Proyek:** `C:\xampp\htdocs\praktikum_php\` (dijalankan melalui web server Apache XAMPP pada `http://localhost/praktikum_php/`)
* **Tujuan Program:** Mengembangkan halaman informasi layanan akademik berbasis web yang dinamis dengan mengintegrasikan variabel, tipe data, operator aritmatika dan perbandingan, percabangan (`if-elseif-else`), array (numerik dan asosiatif), perulangan (`foreach`), serta struktur dokumen HTML.

---

## 2. Pengujian Program

### Pengujian 1: Perubahan Data Identitas dan Perhitungan Pengguna (`halaman_dinamis.php`)
* **Nilai yang diubah:**
  * `$namaPengguna` diubah menjadi `"Nadya Shafa Ardana Az-zahra"` (serta diuji dengan `"Budi"`)
  * `$programStudi` diubah menjadi `"Teknologi Rekayasa Perangkat Lunak"` (serta diuji dengan `"Sistem Informasi"`)
  * `$jumlahPengguna` diubah dari `125` menjadi `200`
  * `$penggunaBaru` diubah dari `15` menjadi `25`
* **Hasil yang diperoleh:**
  * Halaman web menampilkan sambutan sesuai identitas pengguna dan program studi yang diperbarui tanpa perlu mengubah kode HTML di bagian tampilan.
  * Operasi aritmatika pada variabel `$totalPengguna` (`$jumlahPengguna + $penggunaBaru`) otomatis memperbarui hasil perhitungan menjadi `225` saat halaman dimuat ulang di browser.

### Pengujian 2: Pengujian Percabangan Status Aplikasi (`$statusAplikasi`)
* **Nilai yang diubah:**
  * Nilai variabel `$statusAplikasi` diuji secara bergantian menggunakan tiga kondisi: `"Aktif"`, `"Pemeliharaan"`, dan `"Tidak Aktif"`.
* **Hasil yang diperoleh:**
  * Saat `$statusAplikasi = "Aktif"`, struktur `if` dijalankan dan menampilkan pesan `"Aplikasi dapat digunakan."` (atau `"Seluruh layanan dapat digunakan."`).
  * Saat `$statusAplikasi = "Pemeliharaan"`, struktur `elseif` dijalankan dan menampilkan pesan `"Aplikasi sedang dalam pemeliharaan."`.
  * Saat `$statusAplikasi = "Tidak Aktif"`, blok alternatif `else` dijalankan dan menampilkan pesan `"Status aplikasi tidak diketahui."`.

---

## 3. Debugging
* **Nama File:** `debugging.php` (serta latihan perbaikan sintaksis pada `perbaikan.php` dan logika pada `debug_kondisi.php` / `debug_integrasi.php`)
* **Kesalahan yang ditemukan:**
  * Pada `debugging.php`, ditemukan kesalahan sintaksis (*syntax error*) berupa `Parse error: syntax error, unexpected token "}"` karena hilangnya tanda titik koma (`;`) di akhir pernyataan `$status = "Tidak Lulus"` di dalam blok `else`.
  * Pada kasus debugging lainnya di praktikum ini, ditemukan juga kesalahan penulisan tag penutup HTML (`<h1>...</h2>`), tanda kutip yang tidak ditutup, urutan kondisi `if-elseif` yang terbalik, serta posisi reset variabel penghitung (`$jumlahAktif = 0`) di dalam perulangan `foreach`.
* **Perbaikan yang dilakukan:**
  * Menambahkan tanda titik koma (`;`) pada akhir pernyataan `$status = "Tidak Lulus";` di dalam `debugging.php`.
  * Menguji ulang program dengan mengubah nilai variabel `$nilai` menjadi `80` dan `60`.
* **Hasil setelah perbaikan:**
  * Program berjalan lancar di browser tanpa pesan *error*. Ketika `$nilai = 80`, sistem menampilkan status `"Lulus"`. Ketika `$nilai = 60`, sistem menampilkan status `"Tidak Lulus"`.
  ### Debugging Lanjutan: Penambahan Variabel `$programStudi` (`debugging.php`)
* **Modifikasi yang dilakukan:** Menambahkan variabel baru `$programStudi = "Teknologi Rekayasa Perangkat Lunak";` dan menampilkannya menggunakan perintah `echo`.
* **Kesalahan yang ditemukan (disengaja):** Terjadi kesalahan sintaksis (*syntax error*) berupa `Parse error: syntax error, unexpected variable "$nilai"` karena tidak menuliskan tanda titik koma (`;`) di akhir baris deklarasi `$programStudi`.
* **Langkah perbaikan:** Menambahkan tanda titik koma (`;`) paada akhir pernyataan `$programStudi = "Teknologi Rekayasa Perangkat Lunak";`, menyimpan berkas, dan memuat ulang halaman di browser.
* **Hasil setelah perbaikan:** Program berjalan normal tanpa pesan *error* dan berhasil menampilkan informasi **Program Studi: Teknologi Rekayasa Perangkat Lunak** bersama nama, nilai, dan status kelulusan.

---

## 4. Kesimpulan
Berdasarkan seluruh rangkaian aktivitas praktikum dari persiapan lingkungan XAMPP hingga integrasi halaman dinamis dan *debugging*, dapat disimpulkan bahwa PHP membutuhkan web server lokal (Apache) untuk mengeksekusi kode di sisi server sebelum hasilnya dikirimkan sebagai HTML ke browser. Penggabungan variabel, operator, percabangan, array, dan perulangan `foreach` memungkinkan pengelolaan serta penampilan data secara otomatis dan dinamis. Selain itu, ketelitian terhadap aturan penulisan sintaksis (seperti tanda titik koma dan tanda kutip) serta alur logika kondisi sangat menentukan keberhasilan eksekusi program.
