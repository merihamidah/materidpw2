<?php 

class Mobil {
    public  $merk,
            $tipe,
            $mesin,
            $max_speed;  

    function cetakTipe(){
        return $this->tipe;
    }
    function kecepatanMax(){
        return " Kecepatan maksimal dari mobil ini adalah ".$this->max_speed;
    }
    function startgass(){
        return "mengalirkan bensin ke ruang bakar, RPM naik, roda berputar";
    }
}
class BMW extends Mobil{

}
class Tesla extends Mobil{
    function selfparking(){
        echo "Bisa Parking Sendiri";
    }
    function startgass(){
        return "mengalirkan listrik ke dinamo, RPM naik, roda berputar";
    }
}

$bmw = new BMW;
$bmw->merk = "BMW";
$bmw->tipe = "320i";
$bmw->mesin = "2000cc";
$bmw->max_speed = "280km/h";

$tesla = new Tesla;
$tesla->merk = "BMW";
$tesla->tipe = "320i";
$tesla->mesin = "2000cc";
$tesla->max_speed = "280km/h";

echo "BMW :" .$bmw->startgass();
echo "<br>";
echo "Tesla :" .$tesla->startgass();