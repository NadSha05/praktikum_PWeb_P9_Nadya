<?php 
    // 1. Variabel untuk menyimpan informasi institusi, aplikasi, dan pengguna
    $namaInstitusi = "Universitas Teknologi Nusantara";
    $namaAplikasi = "Portal Layanan Akademik";
    $namaPengguna = "Nadya Shafa Ardana Az-zahra";
    $programStudi = "Sistem Informasi";

    // 2. Array asosiatif untuk menyimpan daftar layanan (minimal 5 layanan)
    // Status terdiri atas: Aktif, Pemeliharaan, dan Tidak Aktif
    $daftarLayanan = [
        "Pengisian Kartu Rencana Studi (KRS)" => "Aktif",
        "Kartu Hasil Studi (KHS)" => "Aktif",
        "Jadwal Perkuliahan" => "Aktif",
        "Pembayaran Uang Kuliah Tunggal (UKT)" => "Pemeliharaan",
        "Bimbingan Tugas Akhir" => "Tidak Aktif",
        "Layanan Perpustakaan Digital" => "Aktif"
    ];

    // 3. Variabel penghitung dan operator untuk menghitung total layanan & layanan aktif
    $totalLayanan = count($daftarLayanan);
    $jumlahLayananAktif = 0;

    foreach ($daftarLayanan as $status) {
        if ($status == "Aktif") {
            $jumlahLayananAktif++;
        }
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?php echo $namaAplikasi . " - " . $namaInstitusi; ?></title>
</head>
<body>

    <!-- Informasi Institusi dan Aplikasi -->
    <h1><?php echo $namaInstitusi; ?></h1>
    <h2><?php echo $namaAplikasi; ?></h2>

    <hr>

    <!-- Informasi Pengguna -->
    <h3>Informasi Pengguna</h3>
    <p>Nama Pengguna: <strong><?php echo $namaPengguna; ?></strong></p>
    <p>Program Studi: <?php echo $programStudi; ?></p>

    <hr>

    <!-- Ringkasan Jumlah Layanan -->
    <h3>Ringkasan Layanan Akademik</h3>
    <p>Jumlah Seluruh Layanan: <strong><?php echo $totalLayanan; ?></strong> layanan</p>
    <p>Jumlah Layanan Aktif: <strong><?php echo $jumlahLayananAktif; ?></strong> layanan</p>

    <hr>

    <!-- Daftar Layanan dan Statusnya -->
    <h3>Daftar Status Layanan Akademik</h3>
    <ul>
        <?php 
            foreach ($daftarLayanan as $namaLayanan => $status) {
                // Percabangan untuk menentukan pesan berdasarkan status layanan
                if ($status == "Aktif") {
                    $pesan = "Layanan dapat digunakan secara normal.";
                } elseif ($status == "Pemeliharaan") {
                    $pesan = "Layanan sedang dalam proses perbaikan.";
                } else {
                    $pesan = "Layanan sedang tidak tersedia.";
                }

                echo "<li><strong>$namaLayanan</strong> [$status] - $pesan</li>";
            }
        ?>
    </ul>

</body>
</html>
