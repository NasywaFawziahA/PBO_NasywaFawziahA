<?php
class Pegadaian
{
    // Properti
    var $besarpinjaman = 1000000;
    var $besarbunga = 10;
    var $lamaAngsuran = 5;
    // Konstruktor
    public function __construct($pinjaman, $bunga, $lamaAngsuran)
    {
        $this->besarpinjaman = $pinjaman;
        $this->besarbunga = $bunga;
        $this->lamaAngsuran = $lamaAngsuran;
    }
    // Menghitung total pinjaman
    public function getTotalPinjaman()
    {
        return $this->besarpinjaman + ($this->besarpinjaman * $this->besarbunga / 100);
    }
    // Menghitung besaran angsuran per bulan
    public function getAngsuran()
    {
        return $this->getTotalPinjaman() / $this->lamaAngsuran;
    }
}

// Membuat instance dari kelas Pegadaian
$pinjaman = 1000000;
$bunga = 10;
$lamaAngsuran = 5;
$pegadaian = new Pegadaian($pinjaman, $bunga, $lamaAngsuran);

// Menampilkan informasi
echo "Besaran Pinjaman : Rp." . number_format($pegadaian->besarpinjaman, 0, ',', '.') . "<br>";
echo "Masukan besar bunga (%) : " . $pegadaian->besarbunga . "<br>";
echo "Total Pinjaman : Rp." . number_format($pegadaian->getTotalPinjaman(), 0, ',', '.') . "<br>";
echo "Lama angsuran (bulan) : " . $pegadaian->lamaAngsuran . "<br>";
echo "Besaran angsuran : Rp." . number_format($pegadaian->getAngsuran(), 0, ',', '.') . "<br>";
?>