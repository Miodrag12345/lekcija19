<?php

class Klub  {

    public $naziv;

    public $brojMesta;

    public $brojRezervisanihMesta;

    public  $vrstaPica;

    public $vrstaMesta;

    public $cenaPoOsobi;

    public function tacniPodaci(){
        echo "Broj mesta:" .$this->brojMesta."" .$this->brojRezervisanihMesta;
    }

    public function promenaBrojaMesta($brojMesta)
    {
        $this->brojMesta=$brojMesta;
    }
}


