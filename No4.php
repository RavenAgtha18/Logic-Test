<!-- 4.Ketik kode untuk swap 2 integer variables tanpa VARIABLE TAMBAHAN 
Contoh : let a = 3, let b = 7 => hasilnya a = 7, b = 3 -->

<?php
    $a = 3;
    $b = 7;

    $a = $a + $b;
    $b = $a - $b;  
    $a = $a - $b; 
 
    echo "Nilai A = " . $a . "<br><br>";
   
    echo "Nilai B = " . $b;
?>
