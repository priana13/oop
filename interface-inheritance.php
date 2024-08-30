<?php 


interface BisaLari {

    public function lari(): void;

}

interface PunyaKaki extends BisaLari {

    public function ambilJumlahKaki(): void;

    public function lihatKuku(): void;
}




class Kucing implements PunyaKaki 
{
    public $nama_binatang = "Kucing";

    public function lari(): void
    {
        echo "Kucing itu berlari. </br>";
    }


    public function ambilJumlahKaki(): void
    {
        echo "Jumlah Kaki: Empat </br>";
    }

    public function lihatKuku(): void
    {
        echo "Kuku Panjang </br>";
    }

    public function getNamaBinatang(): void
    {
        echo "Nama Binatang: " . $this->nama_binatang;
    }

}

function panggilBinatangPeliharaan(PunyaKaki $peliharaan){

    $peliharaan->lari();

    $peliharaan->ambilJumlahKaki();

    $peliharaan->lihatKuku();

    $peliharaan->getNamaBinatang();


}


panggilBinatangPeliharaan( new Kucing() );