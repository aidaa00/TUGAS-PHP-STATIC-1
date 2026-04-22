<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum 2 - Static Method</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f4f4f4;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input, select, button {
            padding: 8px;
            margin: 5px 0;
            width: 100%;
            box-sizing: border-box;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
            background: #e9ecef;
            padding: 10px;
            border-radius: 5px;
        }
        h3 {
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Kalkulator & Luas Persegi</h2>

    <form method="post">
        <label>Angka pertama:</label>
        <input type="number" name="angka1" step="any" required>

        <label>Angka kedua:</label>
        <input type="number" name="angka2" step="any" required>

        <label>Pilih operasi:</label>
        <select name="operasi" required>
            <option value="tambah">Tambah (+)</option>
            <option value="kurang">Kurang (-)</option>
            <option value="kali">Kali (*)</option>
            <option value="bagi">Bagi (/)</option>
        </select>

        <button type="submit" name="hitung">Hitung</button>
    </form>

    <form method="post" style="margin-top: 20px; border-top: 1px solid #ccc; padding-top: 15px;">
        <h3>Hitung Luas Persegi</h3>
        <label>Sisi:</label>
        <input type="number" name="sisi" step="any" required>
        <button type="submit" name="luas_persegi">Hitung Luas</button>
    </form>

    <?php
    class Matematika {
        public static function tambah($a, $b) {
            return $a + $b;
        }

        public static function kurang($a, $b) {
            return $a - $b;
        }

        public static function kali($a, $b) {
            return $a * $b;
        }

        public static function bagi($a, $b) {
            if ($b == 0) {
                return "Error: Pembagian dengan nol!";
            }
            return $a / $b;
        }

        public static function luasPersegi($sisi) {
            return $sisi * $sisi;
        }
    }

    // Proses operasi aritmatika
    if (isset($_POST['hitung'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operasi = $_POST['operasi'];
        $hasil = null;

        switch ($operasi) {
            case 'tambah':
                $hasil = Matematika::tambah($angka1, $angka2);
                break;
            case 'kurang':
                $hasil = Matematika::kurang($angka1, $angka2);
                break;
            case 'kali':
                $hasil = Matematika::kali($angka1, $angka2);
                break;
            case 'bagi':
                $hasil = Matematika::bagi($angka1, $angka2);
                break;
        }

        echo "<div class='result'>Hasil {$operasi} dari {$angka1} dan {$angka2} adalah: <strong>{$hasil}</strong></div>";
    }

    // Proses luas persegi
    if (isset($_POST['luas_persegi'])) {
        $sisi = $_POST['sisi'];
        $luas = Matematika::luasPersegi($sisi);
        echo "<div class='result'>Luas persegi dengan sisi {$sisi} adalah: <strong>{$luas}</strong></div>";
    }
    ?>
</div>

</body>
</html>