<?php 
    $nama = "Andi"; 
    $programStudi = "Teknologi Rekayasa Perangkat Lunak"; // Perbaikan: tanda titik koma (;) ditambahkan
    $nilai = 80; 

    if ($nilai >= 75) { 
        $status = "Lulus"; 
    } else { 
        $status = "Tidak Lulus"; 
    } 

    echo "Nama: " . $nama . "<br>"; 
    echo "Program Studi: " . $programStudi . "<br>"; 
    echo "Nilai: " . $nilai . "<br>"; 
    echo "Status: " . $status; 
?>
