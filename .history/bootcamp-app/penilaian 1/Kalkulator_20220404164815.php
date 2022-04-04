<!-- Program Kalkulator Sederhana dengan konsep OOP  
Dibuat oleh : Abed Khurin -->

<?php

class Kalkulator
{
    public $dayaBaterai, $dayaTerpakai;
    private $x, $y, $z;

    public function __construct($bil1, $bil2, $guna)
    {
        $this->x = $bil1;
        $this->y = $bil2;
        $this->z = $guna;
        $this->dayaBaterai = 0;
    }

    public function angkaMaks($maks)
    {
        try {
        if($maks > 1000000){
            throw new Exception("Nilai melebihi batas maksimal yang ditentukan". " | ");
        }
        // continue execution of the bootstrapping phase
        } catch (Exception $e) {
            echo $e->getMessage();
            // die();
        }
    }

    public function kali()
    {
        $this->statusDayaBaterai();
        $this->dayaBaterai -= $this->z;
        $hasil = "Hasil Perkalian : ". $this->x * $this->y;
        return $hasil;
    }

    public function bagi()
    {
        $this->statusDayaBaterai();
        $this->dayaBaterai -= $this->z; 
        $hasil = "Hasil Pembagian : " . $this->x / $this->y;
        return $hasil;
    }

    public function tambah()
    {
        $this->statusDayaBaterai();
        $this->dayaBaterai -= $this->z;
        $hasil = $this->x + $this->y;
        return $hasil;
    }

    public function kurang()
    {
        $this->statusDayaBaterai();
        $this->dayaBaterai -= $this->z;
        $hasil = $this->x - $this->y;
        return $hasil;
    }

    public function pangkat()
    {
        $this->statusDayaBaterai();
        $this->dayaBaterai -= $this->z;
        $hasil = "Hasil Pemangkatan : ". $this->angkaMaks($this->x ** $this->y); 
        $hasil = $this->x ** $this->y;
        return $hasil;
    }

    public function chargeBaterai()
    {
        if ($this->dayaBaterai < 100) {
            echo "Daya sekarang : ". $this->dayaBaterai += 20; 
        } else {
            echo "Daya baterai masih penuh!";
        }
    }

    public function statusDayaBaterai()
    {
        if ($this->dayaBaterai == 0) {
            $status = 'Daya Baterai habis! Isi baterai dulu ya!';
        }
        elseif ($this->dayaBaterai == 100) {
            $status = 'Baterai sudah terisi penuh, silakan digunakan';
        } else {
            $status = 'Baterai masih ada! '. $this->dayaBaterai;
        }
        return $status;
    }
}

class KalkulatorHemat extends Kalkulator{

    public function perhitungan()
    {
        return parent::bagi();
        return parent::kali();
        return parent::tambah();
        return parent::kurang();
        return parent::pangkat();
    }
}

$kalkulator = new Kalkulator(10, 60, 10);

$kalkulatorHemat = new KalkulatorHemat(200, 5 , 5);

echo $kalkulator->chargeBaterai(). "\n";

echo $kalkulator->kali(). "\n";

echo $kalkulator->statusDayaBaterai(). "\n";

echo "Hasil bagi : ". $kalkulatorHemat->bagi(). "\n";

echo $kalkulatorHemat->chargeBaterai(). "\n";

echo "Hasil pangkat : ". $kalkulatorHemat->pangkat(). "\n";

echo $kalkulatorHemat->statusDayaBaterai(). "\n";

?>