<?php 
    // Ubah nilai variabel di bawah ini untuk pengujian: 74, 75, 76, dan 60
    $nilai = 60; 

    // Menentukan kategori kelulusan (75 atau lebih = Lulus, di bawah 75 = Tidak Lulus)
    if ($nilai >= 75) { 
        $statusKelulusan = "Lulus"; 
    } else { 
        $statusKelulusan = "Tidak Lulus"; 
    } 
?> 

<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Uji Kondisi Kelulusan Mahasiswa</title> 
</head> 
<body> 

    <h1>Pengujian Kategori Kelulusan</h1> 

    <p>Nilai Mahasiswa: <strong><?php echo $nilai; ?></strong></p> 

    <p>Status Kelulusan: <strong><?php echo $statusKelulusan; ?></strong></p> 

</body> 
</html>
