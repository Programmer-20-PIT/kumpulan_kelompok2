<?php
echo "Bagian class dan object";

echo "<br>";
class orang {
    public $nama;
    public $umur;
}

$budi = new orang();
$umur17 = new orang();

echo $budi->nama = "budi";


echo "<br>";

class car {
    public function startEngine()
    {
        echo "Engine Started";
    }
}

$car1 = new car;
$car1->startEngine();

echo "<br>";

class Rectangle {
    public $widht;
    public $height;
    
    function ukuranarea($widht, $height) 
    {
        $this->widht = $widht;
        $this->height = $height;
        return $this ->widht * $this -> height;
    }
}

$persegipanjang = new rectangle();
echo $persegipanjang->ukuranarea(80,90);

echo"<br>";

class Employee{
    public $gaji = "2M";

    function getsalary(){
        echo"Gajinya  $this->gaji";
    }
}

$gaji1 = new Employee();
$gaji1->getsalary();

echo"<br>";
class contol{
    public function __construct($name, $age)
    {
        echo "Nama $name Umur $age";
    }
}

$wong = new contol("Budi","100");


?>