<?php
class Produk {
    public $kode;
    public $nama;
    public $harga;
    public $stok;
    public $diskon;

    public function __construct($kode, $nama, $harga, $stok, $diskon) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->diskon = $diskon;
    }

    public function hitungNilaiStok() {
        return $this->harga * $this->stok;
    }

    public function hitungDiskon() {
        return $this->harga * $this->diskon / 100;
    }

    public function hitungHargaSetelahDiskon() {
        return $this->harga - $this->hitungDiskon();
    }

    public function tampilkanData() {
        echo "Kode Produk: " . $this->kode . "<br>";
        echo "Nama Produk: " . $this->nama . "<br>";
        echo "Harga: Rp" . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Stok: " . $this->stok . "<br>";

        echo "Nilai Stok: Rp" .
            number_format($this->hitungNilaiStok(), 0, ',', '.') . "<br>";

        echo "Diskon: " . $this->diskon . "%<br>";

        echo "Harga Setelah Diskon: Rp" .
            number_format($this->hitungHargaSetelahDiskon(), 0, ',', '.') . "<br>";

        echo "<hr>";
    }
}

$produk1 = new Produk("P001", "Laptop", 10000000, 10, 100);
$produk2 = new Produk("P002", "Mouse", 150000, 25, 5);

echo "<h2>Sistem Data Produk</h2>";

$produk1->tampilkanData();
$produk2->tampilkanData();
?>