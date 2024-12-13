<?php
echo "<br>";
echo "Visiblity";
echo "<br>";
class student{
    private $sopo;
    
    public function getName($sopo)
    {
        echo $this->sopo = $sopo;
    }
    protected function setName($sopo)
    {
        $this->sopo = $sopo;
    }
}

$sopo1 = new student();
$sopo1->getName("anjay");

echo"<br>";

class mobil {
    public $nissan;
    protected $mustang;
    private $bmw;

    function mintamobil($nissan): mixed {
        return $this->nissan = $nissan;
    }
    protected function mintamobil1($mustang) {
        return $this->mustang = $mustang;
    }
    private function mintamobil2 ($bmw) {
        return $this->bmw = $bmw;
    }
    public function getmobil2() {
        return $this->mintamobil2("bmw");
    }
}

$car1 = new mobil();
$car2 = new mobil();
echo $car1->mintamobil("Nissan");
echo $car2->getmobil2();
echo "<br>";

class mobil2 extends mobil {
    public function getMobil() {
        return $this->mintamobil1("mustang");
    }
}

$car2 = new mobil2();
echo $car2->getmobil();


?>