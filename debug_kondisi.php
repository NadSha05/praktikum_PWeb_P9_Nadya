<?php 
    // Ubah nilai ini untuk pengujian: 85, 75, dan 65
    $nilai = 65; 

    // Perbaikan: Urutkan syarat dari batas tertinggi (>= 85) ke terendah (>= 75)
    if ($nilai >= 85) { 
        echo "Kategori: A"; 
    } elseif ($nilai >= 75) { 
        echo "Kategori: B"; 
    } else { 
        echo "Kategori: C"; 
    } 
?>
