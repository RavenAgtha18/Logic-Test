<!-- 2.Buatlah fungsi untuk reverse sebuah string
Apabila input = “abcde”, maka outputnya = “edcba”
Dilarang menggunakan function reverse, buatlah logika sendiri -->


<?php
$input = "abcde";

$n = strlen($input);

for ($i = 1; $i <= $n; $i++) {
  $val = $input[-$i];
  echo $val;
}
?>