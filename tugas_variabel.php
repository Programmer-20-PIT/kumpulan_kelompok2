<?php
echo"Bagian variabel dan tipe data";
echo "<br>";
echo "<br>";
$teman = "koncomu";
echo $teman;

echo"<br>";

$angka = 20;
$angka2 = 5;
echo $angka + $angka2;

echo"<br>";

$x = 30;
if ($x < 30) {
    echo"benar";
}
 else {
    echo "salah";
}

echo "<br>"; 

$hari = array ("senin","selasa","rabu","kamis","jumat");
 echo $hari[0] . " dan " . $hari[4];
 
 echo "<br>";

$var = 100;
var_dump($var);

echo "<br>";

$a = 0.5;
$b = 2;

$a = (float) $a;
$b = (float) $b;

var_dump($a * $b);

echo "<br>";

$var1 = "123";
var_dump( $var1 );



?>