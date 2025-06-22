<?php

require_once  "klase/domaci1.php";

$klubVice= new Klub();

$klubVice  ->naziv="Vice";
$klubVice  ->brojMesta=30;
$klubVice  ->brojRezervisanihMesta=10;
$klubVice  ->vrstaPica="alkoholno";
$klubVice  ->vrstaMesta="nocni klub/splav";
$klubVice  ->cenaPoOsobi=3000;
echo "Broj rezervisanih mesta je:". $klubVice->brojRezervisanihMesta;
echo  "Ukupan broj mesta je :". $klubVice->brojMesta;
echo "Vrsta pica koja se sluzi:".$klubVice->vrstaPica;
echo "Vrsta mesta koja je:".$klubVice->vrstaMesta;
echo "Cena po osobi je:".$klubVice->cenaPoOsobi;
$klubVice->promenaBrojaMesta(400);
echo "Promena broja mesta u klubu:".$klubVice->brojMesta;

