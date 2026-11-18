<?php 
    $layanan = [ 
        "Akademik" => "Aktif", 
        "Perkuliahan" => "Aktif", 
        "Pembayaran" => "Pemeliharaan", 
        "Perpustakaan" => "Aktif" 
    ]; 
?> 

<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Status Layanan</title> 
</head> 
<body> 

    <h1>Status Layanan Aplikasi</h1> 

    <ul> 
        <?php 
            foreach ($layanan as $namaLayanan => $status) { 
                echo "<li>$namaLayanan: $status</li>"; 
            } 
        ?> 
    </ul> 

</body> 
</html>
