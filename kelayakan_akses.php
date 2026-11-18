<?php 
    $namaAplikasi = "Layanan Akademik"; 
    
    // Ubah kedua variabel di bawah ini untuk menguji Skenario 1 sampai 4
    $statusAkun = "Tidak Aktif"; // Pilihan: "Aktif" atau "Tidak Aktif"
    $sudahVerifikasi = false; // Pilihan: true atau false

    // Menggabungkan kedua kondisi menggunakan operator logika AND (&&)
    if ($statusAkun == "Aktif" && $sudahVerifikasi == true) { 
        $pesanAkses = "Akses diberikan"; 
    } else { 
        $pesanAkses = "Akses ditolak"; 
    } 
?> 

<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Kelayakan Akses Pengguna</title> 
</head> 
<body> 
    
    <h1><?php echo $namaAplikasi; ?></h1> 
    <h2>Pemeriksaan Kelayakan Akses</h2> 
    <p>Status Akun: <?php echo $statusAkun; ?></p> 
    <p>Status Verifikasi: <?php echo $sudahVerifikasi ? "true" : "false"; ?></p> 
    <p>Hasil: <strong><?php echo $pesanAkses; ?></strong></p> 

</body> 
</html>
