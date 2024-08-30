<?php 


interface BisaLari {

    public function lari(): void;

}


class Anjing implements BisaLari 
{

    public function lari(): void
    {
        echo "Anjing itu berlari \n";
    }

}

class Kucing implements BisaLari 
{

    public function lari(): void
    {
        echo "Kucing itu berlari \n";
    }

}

function suruhLari(BisaLari $bisalari){

    $bisalari->lari();
}

$kucing = new Anjing();

suruhLari( $kucing );