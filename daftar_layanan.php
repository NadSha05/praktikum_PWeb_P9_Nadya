<?php 
    $namaAplikasi = "Layanan Akademik"; 

    // Mempertahankan array asosiatif dari Tantangan 2
    $layanan = [ 
        "Akademik" => "Aktif", 
        "Perpustakaan" => "Aktif", 
        "Pembayaran" => "Pemeliharaan", 
        "Konsultasi" => "Aktif", 
        "Administrasi" => "Tidak Aktif",
        "Kemahasiswaan" => "Aktif" 
    ]; 
?> 

<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Status Layanan Aplikasi</title> 
</head> 
<body> 

    <h1><?php echo $namaAplikasi; ?></h1> 

    <h2>Daftar Status dan Keterangan Layanan</h2> 

    <ul> 
        <?php 
            // Membaca seluruh data layanan menggunakan foreach
            foreach ($layanan as $namaLayanan => $status) { 
                
                // Menentukan pesan berdasarkan status menggunakan if, elseif, dan else
                if ($status == "Aktif") { 
                    $pesan = "Layanan dapat digunakan."; 
                } elseif ($status == "Pemeliharaan") { 
                    $pesan = "Layanan sedang diperbaiki."; 
                } else { 
                    $pesan = "Layanan tidak tersedia."; 
                } 

                // Menampilkan nama layanan dan pesan dalam bentuk daftar HTML
                echo "<li><strong>$namaLayanan</strong> ($status): $pesan</li>"; 
            } 
        ?> 
    </ul> 

</body> 
</html>
