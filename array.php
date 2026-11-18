<?php 
    $fiturAplikasi = [ 
        "Informasi Akademik", 
        "Jadwal Perkuliahan", 
        "Kartu Hasil Studi", 
        "Transkrip Nilai", 
        "Informasi Pembayaran" 
    ]; 
?> 

<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Daftar Fitur Aplikasi</title> 
</head> 
<body> 

    <h1>Fitur Layanan Akademik</h1> 

    <ul> 
        <?php 
            foreach ($fiturAplikasi as $fitur) { 
                echo "<li>$fitur</li>"; 
            } 
        ?> 
    </ul> 

</body> 
</html>
