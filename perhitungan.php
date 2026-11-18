<?php 
    // Data aplikasi 
    $namaAplikasi = "Layanan Akademik"; 
    $namaPengguna = "Nadya Shafa Ardana Az-zahra"; 
    $statusAplikasi = "Dalam Pengembangan"; 

    // Data pengguna & Layanan
    $jumlahPengguna = 25; 
    $penggunaBaru = 5; 

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


    <h2>Pemeriksaan Tipe Data (Menggunakan var_dump)</h2>
    <p>Total Pengguna: <?php echo $totalPengguna; ?></p> 
    <p><?php var_dump($jumlahPengguna); ?></p> 
    <p><?php var_dump($penggunaBaru); ?></p> 
</body> 
</html> 