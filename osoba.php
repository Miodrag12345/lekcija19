<?php
class Osoba {
    //atributi
    public $ime;
    public $prezime;
    public $godinaRodjenja;
    public $visina;
    public $tezina;

    public  function racunajGodine()
    {
        $trenutnaGodina=date("Y");
        echo $trenutnaGodina;
        echo $this->godinaRodjenja;
        echo "Trenutno godina ima:".$trenutnaGodina-$this->godinaRodjenja;
    }

}

$miodrag= new Osoba();
$miodrag->ime="Miodrag";
$miodrag->prezime="Kukric";
$miodrag->godinaRodjenja=1998;
$miodrag->visina=197;
$miodrag->tezina=94;
$miodrag->racunajGodine();