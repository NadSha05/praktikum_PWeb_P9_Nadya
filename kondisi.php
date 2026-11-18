<?php 
     $jumlahPengguna = 5; 

    if ($jumlahPengguna > 20) { 
        echo "Status: Aktif"; 
    } elseif ($jumlahPengguna >= 10) { 
        echo "Status: Normal"; 
    } else { 
        echo "Status: Rendah"; 
    } 
?> 