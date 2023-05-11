<!-- 1.Buatlah fungsi sebagai berikut :
	Apabila terdapat int = 4, maka outputnya 24 (prosesnya : 4*3*2*1)
	Apabila terdapat int = 8, maka outputnya 40320 (prosesnya : 8*7*6*5*4*3*2*1). -->

    
    <?php 
    // 4
    $a         = 1;
    $faktorial = $a;
    $angka     = 4;

    while($a <= $angka){
      $faktorial = $faktorial * $a;
        $a++;
    }
    for($i=4; $i>=1; $i--){
        if($i!=1) {
            echo "$i*";
        } else {
            echo "$i" . "=" . $faktorial;
        }
    }  
    echo "<br>";
    
    // 8
    $a         = 1;
    $faktorial = $a;
    $angka     = 8;

    while($a <= $angka){
      $faktorial = $faktorial * $a;
        $a++;
    }
    for($i=8; $i>=1; $i--){
        if($i!=1) {
            echo "$i*";
        } else {
            echo "$i" . "=" . $faktorial;
        }
    }  
?>