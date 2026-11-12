<?php

echo "<h5>LATIHAN DUA<h5>";

class Mahasiswa {
    public $nama;
    public $prodi;

    public function __construct()
     {
        $this->nama = "Citra Yuda";
        $this->prodi = "Sistem Informasi";
        $this->Nim = "202457201019";
    }

    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Prodi: " . $this->prodi . "<br>" ;
        echo "Nim : " . $this->Nim  ;
    }

}
class Dosen {
    public $nama;
    public $prodi;

    public function __construct()
     {
        $this->nama = "Nafis Sururi";
        $this->prodi = "Sistem Informasi";
        $this->No_Hp = "00818102763419";
    }

    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Prodi: " . $this->prodi . "<br>" ;
        echo "No_Hp: " . $this->No_Hp  ;
    }

}

$mhs1 = new Mahasiswa();
$mhs1->tampilkanData();

echo "<hr>";

$mhs2 = new Dosen();
$mhs2->tampilkanData();
?>
