<?php

class Kalkulator
{
    public $dayaBaterai = 0;
    public $angka1, $angka2;

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

$kalkulator = new Kalkulator();

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

$obj = new KalkulatorHemat();
$obj->kali(25, 15);

?>
