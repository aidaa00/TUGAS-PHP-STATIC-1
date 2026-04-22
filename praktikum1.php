<?php

class Pengunjung {

    public static $jumlah = 0;

    public function __construct() {
        self::$jumlah++;
    }

    public static function reset() {
        self::$jumlah = 0;
    }

}

// Membuat beberapa objek
$p1 = new Pengunjung();
$p2 = new Pengunjung();
$p3 = new Pengunjung();
$p4 = new Pengunjung();
$p5 = new Pengunjung();

echo "Jumlah Pengunjung awal: " . Pengunjung::$jumlah . "<br>"; // Output: 3

// Memanggil method reset
Pengunjung::reset();

echo "Jumlah Pengunjung setelah reset: " . Pengunjung::$jumlah; // Output: 0

?>