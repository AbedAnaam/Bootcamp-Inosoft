<?php

class tugas_kalkulator
{
    public $dayaBaterai = 0;

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

$kalkulator = new tugas_kalkulator();

echo "Pilih Salah Satu Menu Berikut : ";
echo $kalkulator->kali(5, 10);
echo "\n";
echo $kalkulator->bagi(5,10);
echo "\n";
echo $kalkulator->tambah(2,10);
echo "\n";
echo $kalkulator->kurang(10,2);

?>
