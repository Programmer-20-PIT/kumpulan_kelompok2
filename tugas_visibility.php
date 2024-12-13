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









echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


?>