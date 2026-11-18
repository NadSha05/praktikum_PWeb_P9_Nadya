<?php 
    $statusAkun = "Aktif"; 
    $sudahVerifikasi = false; 

    if ($statusAkun == "Aktif" && $sudahVerifikasi == true) { 
        echo "Akses diberikan."; 
    } else { 
        echo "Akses ditolak."; 
    } 
?> 