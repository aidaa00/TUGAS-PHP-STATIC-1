<?php

final class Database {

    public function connect() {
        echo "Koneksi database";
    }

}
$db = new database();
$db->connect();

?>