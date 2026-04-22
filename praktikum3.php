<?php
class Produk {
    public static $jumlahProduk = 0;
    private $nama;
    private $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->tambahProduk();
    }

    public function tambahProduk() {
        self::$jumlahProduk++;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getHarga() {
        return $this->harga;
    }

    public static function getTotalProduk() {
        return self::$jumlahProduk;
    }
}

class Transaksi {
    final public function prosesTransaksi($produk, $jumlah) {
        echo "<hr>";
        echo "<h3>Detail Transaksi:</h3>";
        echo "Produk: " . $produk->getNama() . "<br>";
        echo "Harga satuan: Rp " . number_format($produk->getHarga(), 0, ',', '.') . "<br>";
        echo "Jumlah beli: " . $jumlah . "<br>";
        $total = $produk->getHarga() * $jumlah;
        echo "Total bayar: Rp " . number_format($total, 0, ',', '.') . "<br>";
        echo "Status: Transaksi diproses";
    }
}

// Membuat minimal 3 produk
$produk1 = new Produk("Laptop ASUS ROG", 15000000);
$produk2 = new Produk("Mouse Logitech", 250000);
$produk3 = new Produk("Keyboard Mechanical", 750000);

// Menampilkan daftar produk
echo "<h2>=== Daftar Produk ===</h2>";
echo "1. " . $produk1->getNama() . " - Rp " . number_format($produk1->getHarga(), 0, ',', '.') . "<br>";
echo "2. " . $produk2->getNama() . " - Rp " . number_format($produk2->getHarga(), 0, ',', '.') . "<br>";
echo "3. " . $produk3->getNama() . " - Rp " . number_format($produk3->getHarga(), 0, ',', '.') . "<br>";

// Menampilkan total produk
echo "<hr>";
echo "<h2>=== Total Produk ===</h2>";
echo "Total produk yang tersedia: " . Produk::getTotalProduk() . " produk<br>";

// Simulasi transaksi
echo "<h2>=== Simulasi Transaksi ===</h2>";
$transaksi = new Transaksi();
$transaksi->prosesTransaksi($produk1, 2); // Membeli 2 unit Laptop ASUS ROG

echo "<br><br>";
$transaksi2 = new Transaksi();
$transaksi2->prosesTransaksi($produk2, 3); // Membeli 3 unit Mouse Logitech

echo "<br><br>";
$transaksi3 = new Transaksi();
$transaksi3->prosesTransaksi($produk3, 1); // Membeli 1 unit Keyboard Mechanical
?>