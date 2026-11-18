<?php 
    // 1. Informasi Aplikasi dan Identitas Pengguna (Dimodifikasi)
    $namaAplikasi = "Sistem Informasi Akademik Polcil"; 
    $namaPengguna = "Rizky Pratama"; 
    $programStudi = "Rekayasa Keamanan Siber"; 
    $statusAplikasi = "Aktif"; 

    // 2. Data Jumlah Pengguna (Dimodifikasi)
    $jumlahPengguna = 450; 
    $penggunaBaru = 45; 
    $totalPengguna = $jumlahPengguna + $penggunaBaru; 

    // 3. Daftar Fitur Aplikasi (Dimodifikasi & Ditambah)
    $fiturAplikasi = [ 
        "Informasi Akademik", 
        "Jadwal Perkuliahan", 
        "Kartu Hasil Studi", 
        "Transkrip Nilai", 
        "Informasi Pembayaran",
        "Presensi Kuliah",
        "Pengumuman Kampus",
        "Layanan Bimbingan Konseling"
    ]; 

    // 4. Daftar Status Layanan (Dimodifikasi: 3 Aktif, 1 Pemeliharaan, 1 Tidak Aktif)
    $layanan = [ 
        "Akademik" => "Aktif", 
        "Perkuliahan" => "Aktif", 
        "Pembayaran" => "Pemeliharaan", 
        "Perpustakaan" => "Aktif",
        "Konsultasi" => "Tidak Aktif"
    ]; 

    // 5. Menghitung Jumlah Layanan Aktif
    $jumlahLayananAktif = 0;
    foreach ($layanan as $status) {
        if ($status == "Aktif") {
            $jumlahLayananAktif++;
        }
    }

    // 6. Menentukan Pesan Status Aplikasi
    if ($statusAplikasi == "Aktif") { 
        $pesanStatus = "Seluruh layanan dapat digunakan."; 
    } elseif ($statusAplikasi == "Pemeliharaan") { 
        $pesanStatus = "Sebagian layanan sedang diperbaiki."; 
    } else { 
        $pesanStatus = "Aplikasi tidak dapat digunakan."; 
    } 
?> 

<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <title><?php echo $namaAplikasi; ?></title> 
</head> 
<body> 

    <h1><?php echo $namaAplikasi; ?></h1> 

    <p>Selamat datang, <?php echo $namaPengguna; ?>.</p> 

    <p>Program Studi: <?php echo $programStudi; ?></p> 

    <hr> 

    <h2>Informasi Pengguna</h2> 

    <p>Pengguna Awal: <?php echo $jumlahPengguna; ?></p> 

    <p>Pengguna Baru: <?php echo $penggunaBaru; ?></p> 

    <p>Total Pengguna: <?php echo $totalPengguna; ?></p> 

    <hr> 

    <h2>Status Aplikasi</h2> 

    <p>Status: <?php echo $statusAplikasi; ?></p> 

    <p><?php echo $pesanStatus; ?></p> 

    <p>Jumlah Layanan Aktif: <?php echo $jumlahLayananAktif; ?> dari <?php echo count($layanan); ?> layanan</p> 

    <hr> 

    <h2>Daftar Fitur Aplikasi</h2> 

    <ul> 
        <?php 
            foreach ($fiturAplikasi as $fitur) { 
                echo "<li>$fitur</li>"; 
            } 
        ?> 
    </ul> 

    <hr> 

    <h2>Status Layanan</h2> 

    <ul> 
        <?php 
            foreach ($layanan as $nama => $status) { 
                if ($status == "Aktif") { 
                    $pesan = "Layanan dapat digunakan."; 
                } elseif ($status == "Pemeliharaan") { 
                    $pesan = "Layanan sedang diperbaiki."; 
                } else { 
                    $pesan = "Layanan tidak tersedia."; 
                } 

                echo "<li>$nama: $pesan</li>"; 
            } 
        ?> 
    </ul> 

</body> 
</html>
