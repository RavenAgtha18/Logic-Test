<!-- 8.Apabila terdapat int = 15, maka akan mencetak output berikut :
1
2
Edu
4
Work
Edu
7
8
Edu
Work
11
Edu
13
14
EduWork

keterangan : string edu untuk kelipatan 3, string work untuk kelipatan 5, string eduwork untuk kelipatan 3 dan 5 -->

<?php 
 $int = 15;

for ($i=1; $i <= $int; $i++) { 
  if ($i % 3 == 0 && $i % 5 == 0) {
    echo "EduWork";
  } else if ($i % 3 == 0) {
    echo "Edu";
  } else if ($i % 5 == 0) {
    echo "Work";
  } else {
    echo $i;
  }
}
?>
