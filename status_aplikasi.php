<?php 
    $namaAplikasi = "Layanan Akademik"; 
    $jumlahPengguna = 25; 
    $statusAplikasi = "Selain ketiga status tersebut "; 

    if ($statusAplikasi == "Aktif") { 
        $pesanStatus = "Layanan dapat digunakan."; 
    } elseif ($statusAplikasi == "Pemeliharaan") { 
        $pesanStatus = "Layanan sedang dalam pemeliharaan."; 
    } elseif ($statusAplikasi == "Uji Coba") { 
        $pesanStatus = "Layanan sedang dalam tahap pengujian."; 
    } else { 
        $pesanStatus = "Layanan tidak tersedia."; 
    } 
?> 

<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Status Aplikasi</title> 
</head> 
<body> 
    
    <h1><?php echo $namaAplikasi; ?></h1> 

    <h2>Status Layanan</h2> 

    <p>Status: <?php echo $statusAplikasi; ?></p> 

    <p><?php echo $pesanStatus; ?></p> 

    <p> 
        Jumlah Pengguna: 
        <?php echo $jumlahPengguna; ?> 
    </p> 

</body> 
</html> 