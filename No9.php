<!-- 9.Buatlah fungsi untuk menentukan bilangan terkecil dan terbesar dari sebuah array
Contoh : array [4,2,6,88,3,11]
Maka outputnya adalah low : 2, high : 88
dilarang menggunakan built in function -->


<?php
function getMax($array)
{
    $n = count($array);
    $max = $array[0];
    for ($i = 1; $i < $n; $i++)
        if ($max < $array[$i])
            $max = $array[$i];
    return $max;      
}
function getMin($array)
{
    $n = count($array);
    $min = $array[0];
    for ($i = 1; $i < $n; $i++)
        if ($min > $array[$i])
            $min = $array[$i];
    return $min;      
}

$array = array(4, 2, 6, 88, 3, 11);
echo "Low : " . (getMin($array)) . ", ";
echo("\n");
echo "High : " . (getMax($array));
?>
