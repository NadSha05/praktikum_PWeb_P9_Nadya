<?php  
    // Data aplikasi  
    $namaAplikasi = "Layanan Akademik";  
    $namaPengguna = "Nadya Shafa Ardana Az-zahra";  
    $statusAplikasi = "Dalam Pengembangan";  

    // Data pengguna  
    $jumlahPengguna = 40;  
    $penggunaBaru = 15;  

    // Operasi perhitungan  
    $totalPengguna = $jumlahPengguna + $penggunaBaru;  

    // Membuat informasi  
    $sambutan = "Selamat datang, " . $namaPengguna;  
?>  

<!DOCTYPE html>  
<html lang="id">  
<head>  
    <meta charset="UTF-8">  
    <title>Informasi Aplikasi</title>  
</head>  
<body>  
    <h1><?php echo $namaAplikasi; ?></h1>  

    <p><?php echo $sambutan; ?></p>  

    <h2>Status Aplikasi</h2>  
    <p><?php echo $statusAplikasi; ?></p>  

    <h2>Informasi Pengguna</h2>  
    <p>Pengguna Awal: <?php echo $jumlahPengguna; ?></p>  
    <p>Pengguna Baru: <?php echo $penggunaBaru; ?></p>  
    <p>Total Pengguna: <?php echo $totalPengguna; ?></p>  

</body>  
</html> 