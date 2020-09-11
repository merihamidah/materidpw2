<?php 
class Hewan{
    public  $jumlah_kaki,
            $bisa_terbang,
            $bersuara;

    public function jumlahKaki(){
        return $this->jumlah_kaki;
    }
    public function bersuara(){
        return $this->bersuara;
    }
}
class Kucing extends Hewan {
    public function bersuara(){
        return "Meoong";
    }
    
}
class Anjing extends Hewan {
    public function bersuara(){
        return "Guk guk guk";
    }

}
class Elang extends Hewan {
    public function bersuara(){
        return "Miippp";
    }

}
class Angsa extends Hewan {
    public function bersuara(){
        return "Kwak kwak kwak";
    }

}


$momo = new Kucing;
$momo->jumlah_kaki = "4"; 
$momo->bisa_terbang = "tidak bisa terbang";  
echo "Momo adalah kucing <br>";
echo "Punya kaki sebanyak : " .$momo->jumlah_kaki. "<br>";
echo "Momo ".$momo->bisa_terbang. "<br>";
echo "Suaranya : ". $momo->bersuara(). "<br>";

echo "<hr>";

$doggi = new Anjing;
$doggi->jumlah_kaki = "4";
$doggi->bisa_terbang = "tidak bisa terbang";
echo "Doggi adalah Anjing <br>";
echo "Punya kaki sebanyak : ". $doggi->jumlah_kaki. "<br>";
echo "Doggi ".$doggi->bisa_terbang. "<br>";
echo "Suaranya : " .$doggi->bersuara(). "<br>";

echo "<hr>";

$zya = new Elang;
$zya->jumlah_kaki = "2";
$zya->bisa_terbang = "Bisa Terbang";
echo "Zya adalah Elang <br>";
echo "Punya kaki sebanyak : ". $zya->jumlah_kaki. "<br>";
echo "Zya ".$zya->bisa_terbang. "<br>";
echo "Suaranya : ". $zya->bersuara(). "<br>";

echo "<hr>";

$masha = new Angsa;
$masha->jumlah_kaki = "2";
$masha->bisa_terbang = "bisa terbang";
echo "Masha adalah Angsa <br>";
echo "Punya kaki sebanyak : ".$masha->jumlah_kaki. "<br>";
echo "Masha ".$masha->bisa_terbang. "<br>";
echo "Suaranya : ". $masha->bersuara(). "<br>";

echo "<hr>";
