<?php

class Kendaraan {

    final public function mesin() {
        echo "Mesin standar";
    }

}

class Mobil extends Kendaraan {
}

$mobil = new mobil();
$mobil->mesin();

?>