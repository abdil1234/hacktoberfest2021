<?php
for($i=1; $i<= 100; $i++){
     if($i % 3 == 0 && $i % 5== 0){
      echo "boomdoor<br>";
     }else if($i % 3 == 0){
         echo "boom<br>";
     }else if($i % 5 == 0){
         echo "door<br>";
     }
     
    }
?>