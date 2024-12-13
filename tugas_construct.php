<?php
class book{
    public function __construct($title, $author) 
    {
        echo "Buku $title dan Penulisnya $author";
    }
}

$buku = new book("Cara membangkitkan manusia","Ariz");

echo "<br>";

class DatabaseConnection{
    public function __destruct() {
        echo " Koneksi ke database ditutup karena ikhwan menyerang menggunakan DDOS <br>";
    }
}

$iwan = new DatabaseConnection();

echo"<br>";

class nguwaour {
    public function __construct($binatang, $hidup)
       { 
        echo"kesukaan ariz $binatang dan hidup sudah bersama $hidup "; 
       }
    function __destruct() {
        echo "mati kau iwan <br>";
    }
}

$anas = new nguwaour("Burooq","njir");


?>