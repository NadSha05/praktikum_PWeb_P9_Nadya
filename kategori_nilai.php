<?php 
    $namaAplikasi = "Layanan Akademik"; 
    $namaPengguna = "Nadya Shafa Ardana Az-zahra"; 
    $statusAplikasi = "Dalam Pengembangan"; 
    
    // Variabel untuk menyimpan nilai mahasiswa (ubah nilai ini untuk pengujian: 90, 80, 70, 55, 40)
    $nilai = 40; 

    // Menentukan kategori nilai menggunakan struktur if, elseif, dan else
    if ($nilai >= 85 && $nilai <= 100) { 
        $kategori = "A"; 
    } elseif ($nilai >= 75 && $nilai <= 84) { 
        $kategori = "B"; 
    } elseif ($nilai >= 65 && $nilai <= 74) { 
        $kategori = "C"; 
    } elseif ($nilai >= 50 && $nilai <= 64) { 
        $kategori = "D"; 
    } elseif ($nilai >= 0 && $nilai < 50) { 
        $kategori = "E"; 
    } else {
        $kategori = "Nilai tidak valid";
    }
?> 

<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Kategori Nilai Mahasiswa</title> 
</head> 
<body> 
    
    <h1><?php echo $namaAplikasi; ?></h1> 

    <h2>Hasil Penilaian Mahasiswa</h2> 

    <p>Nilai Akhir: <?php echo $nilai; ?></p> 

    <p>Kategori Nilai: <strong><?php echo $kategori; ?></strong></p> 

</body> 
</html>
