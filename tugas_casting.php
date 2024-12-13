<?php
echo "<br>";
echo "<br>";
echo "Bagian Casting";
echo"<br>";

$string = "123.45";
$angkaint = (int) $string;
var_dump($angkaint);

echo"<br>";

$intiger = 123.45;
$float = (float) $intiger;
var_dump($float);

echo "<br>";

$orang = ["budi", 20];
$object = (object)$orang;

echo $object->{0};
echo "<br>";
echo $object->{1};


?>