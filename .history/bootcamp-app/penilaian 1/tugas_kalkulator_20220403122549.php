<?php

class Kalkulator
{
    public $dayaBaterai;
    public $x, $y;

    public function __construct($bil1, $bil2)
    {
        $this->x = $bil1;
        $this->y = $bil2;
        $this->dayaBaterai = 0;
    }

    public function kali($bil1, $bil2)
    {
        return $bil1 * $bil2;
    }

    public function bagi($bil1, $bil2)
    {
        return $bil1 / $bil2;
    }

    public function tambah($bil1, $bil2)
    {
        return $bil1 + $bil2;
    }

    public function kurang($bil1, $bil2)
    {
        return $bil1 - $bil2;
    }
}

class KalkulatorHemat extends Kalkulator{
    // private $x, $y;

    public function kaliHemat($bil1, $bil2)
    {
        $hasil = $this->x * $this->y;
        return $hasil;
    }
}

$kalkulator = new Kalkulator($bil1, $bil2);

echo "Pilih Salah Satu Menu Berikut : ";
echo "\n";
echo $kalkulator->kali(5, 10);
echo "\n";
echo $kalkulator->bagi(5,10);
echo "\n";
echo $kalkulator->tambah(2,10);
echo "\n";
echo $kalkulator->kurang(10,2);
echo "\n";
echo "\n";
echo "Ini contoh pewarisan";
echo "\n";

$obj = new KalkulatorHemat($x, $y);
$obj->kaliHemat(2,3);

?>
