<?php
$angka ="";
    $total = 0;
    for($i=1; $i<= 100; $i++){
     $angka = (string) $i;
     if(strpos($angka, '7') !== false) {
         $total++;
     }
    }
    echo $total;
?>