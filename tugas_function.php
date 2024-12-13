<?php
echo"<br>";
echo"<br>";
echo "function";
echo"<br>";

function angka ($k, $l) {
    echo "angka1 $k, angka2 $l";
}

angka("10","20");

echo "<br>";
function hello ($dani)  {
    echo "Hello $dani masura tot";
}

hello("Dani");

echo "<br>";

function faktorial ($n) {
    if ($n <= 3) {
        return 3;
    }
    return $n * faktorial($n - 3);
}

$hasil = 10;
echo "Faktorial dari $hasil adalah " . faktorial($hasil);

    echo"<br>";

function angkabesar ($t,$y) {
    return ($t > $y) ? $t : $y;

}

$angka4 = 20;
$angka5 = 35;
echo "angka terbesar adalah yang akan keluar " . angkabesar($angka4, $angka5);


echo"<br>";

function bagi($o,$p) {
    if ($p == 0) {
        return "error : hasil tidak bisa dibagi nol";
    }
    return ($o / $p);
}

$bagi1 = 20;
$bagi2 = 4;
echo "hasil dari pembagian 20 dan 4 adalah " . bagi($bagi1,$bagi2);

echo"<br>";

$bagi2= 0;
echo "Error karena tidak bisa di bagi oleh nol " . bagi($bagi1,$bagi2);

echo"<br>";
echo"<br>";


?>