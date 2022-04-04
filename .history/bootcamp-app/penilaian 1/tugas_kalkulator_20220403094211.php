<?php

class Kalkulator
{
    public $dayaBaterai = 0;
    private $x, $y;

    function __construct($bil1, $bil2)
    {
        $this->x = $bil1;
        $this->y = $bil2;
    }

    public function kali($angka1, $angka2)
    {
        return $angka1 * $angka2;
    }

    public function bagi($angka1, $angka2)
    {
        return $angka1 / $angka2;
    }

    public function tambah($angka1, $angka2)
    {
        return $angka1 + $angka2;
    }

    public function kurang($angka1, $angka2)
    {
        return $angka1 - $angka2;
    }
}

class KalkulatorHemat extends Kalkulator{

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

$obj = new KalkulatorHemat($bil1, $bil2);
$obj->kali(25, 15);

?>
