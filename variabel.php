<?php  
    $namaAplikasi = "Layanan Akademik";  
    $namaPengguna = "Andi";  
    $statusAplikasi = "Aktif";  
    $jumlahPengguna = 25;  
?> 

<?php 
    $informasi = "Selamat datang, " . $namaPengguna 
                . "! Anda menggunakan aplikasi " 
                . $namaAplikasi . "."; 
    echo "<p>$informasi</p>"; 
?> 

<?php 
    $jumlahPengguna = 25; 
    $penggunaBaru = 5; 
    
    $totalPengguna = $jumlahPengguna + $penggunaBaru; 
    
    echo "<p>Jumlah Pengguna Awal: $jumlahPengguna</p>"; 
    echo "<p>Pengguna Baru: $penggunaBaru</p>"; 
    echo "<p>Total Pengguna: $totalPengguna</p>"; 
?> 

<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Informasi Aplikasi</title> 
</head> 
<body> 
    <h1>Informasi Aplikasi</h1> 
    <?php 
        echo "<p>Nama Aplikasi: $namaAplikasi</p>"; 
        echo "<p>Nama Pengguna: $namaPengguna</p>"; 
        echo "<p>Status Aplikasi: $statusAplikasi</p>"; 
        echo "<p>Jumlah Pengguna: $jumlahPengguna</p>"; 
    ?> 
</body> 
</html>