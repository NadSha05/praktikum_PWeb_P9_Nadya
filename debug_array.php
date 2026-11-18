<?php  
    // Data array dari kode pertama
    $fiturAplikasi1 = [  
        "Informasi Akademik",  
        "Jadwal Perkuliahan",  
        "Kartu Hasil Studi",  
        "Transkrip Nilai"  
    ];  

    // Data array dari kode kedua
    $fiturAplikasi2 = [  
        "Informasi Akademik",  
        "Jadwal Perkuliahan",  
        "Kartu Hasil Studi"  
    ];  
?> 

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Debug Struktur Array HTML</title>
</head>
<body>

    <h2>Perbaikan Kode 1 (Menambahkan Tag Pembuka & Penutup ul)</h2>
    <ul>
        <?php  
            foreach ($fiturAplikasi1 as $fitur) {  
                echo "<li>$fitur</li>";  
            }  
        ?>
    </ul>

    <h2>Perbaikan Kode 2 (Melengkapi Pasangan Tag ul)</h2>
    <ul>
        <?php  
            foreach ($fiturAplikasi2 as $fitur) {  
                echo "<li>$fitur</li>";  
            }  
        ?>
    </ul>

</body>
</html>
