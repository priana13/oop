<?php 


interface BisaLari {

    public function lari(): void;

}


class Anjing implements BisaLari 
{

    public function lari(): void
    {
        echo "Anjing itu berlari </br>";
    }

}

class Kucing implements BisaLari 
{

    public function lari(): void
    {
        echo "Kucing itu berlari </br>";
    }

}

function suruhLari(BisaLari $bisalari){

    $bisalari->lari();
}

suruhLari( new Anjing() );
suruhLari( new Kucing() );