<?php 
    $namaAplikasi = "Layanan Akademik"; 

    $layanan = [ 
        "Akademik" => "Aktif", 
        "Pembayaran" => "Pemeliharaan", 
        "Perpustakaan" => "Aktif" 
    ]; 

    // Inisialisasi penghitung cukup dilakukan sekali di luar perulangan
    $jumlahAktif = 0; 
?> 

<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Status Layanan</title> 
</head> 
<body> 

    <h1><?php echo $namaAplikasi; ?></h1> 

    <ul> 
        <?php 
            foreach ($layanan as $nama => $status) { 

                if ($status == "Aktif") { 
                    $pesan = "Layanan dapat digunakan."; 
                    // Perbaikan: Tambahkan nilai penghitung setiap kali status Aktif ditemukan
                    $jumlahAktif++; 
                } else { 
                    $pesan = "Layanan tidak tersedia."; 
                } 

                echo "<li>$nama: $pesan</li>"; 
                // Perbaikan: Baris "$jumlahAktif = 0;" di dalam foreach dihapus
            } 
        ?> 
    </ul> 

    <p> 
        Jumlah Layanan Aktif: 
        <?php echo $jumlahAktif; ?> 
    </p> 

</body> 
</html>
