<?php

class Toko_Pegadaian_Syariah
{
    public $BesarPinjam;
    public $PersentaseBunga; 
    public $TotalPinjam;
    public $LamaAngsuran;
    public $BesarAngsuran;
}

$tokoPegadaian = new Toko_Pegadaian_Syariah();

$tokoPegadaian->BesarPinjam = 1000000; 
$tokoPegadaian->PersentaseBunga = 5;   
$tokoPegadaian->LamaAngsuran = 5;      

echo "Besar Pinjam: " . $tokoPegadaian->BesarPinjam . "<br>";
echo "Persentase Bunga: " . $tokoPegadaian->PersentaseBunga . "<br>";
echo "Lama Angsuran: " . $tokoPegadaian->LamaAngsuran . "<br>";

?>
