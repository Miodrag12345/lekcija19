<?php

require_once "klase/auto.php";
// Objekti npr model automobila Audi A4
$audiA4=new Auto();//Pravimo novi auto
$audiA4->marka="Audi"; // Dodeljemo tom automobilu marku npr
$audiA4->model="A4"; //Dodeljujemo model nasoj klasi
$audiA4->boja="plava";// dodeljujemo iz klase boju
$audiA4->kubikaza="2000 ";
$audiA4->snimiAuto();

// Napravili smo novi automobil iz baze  odnosno klase  i dodelili klase odnosno atribute koje smo napisali

$yugo=new Auto();//Pravimo novi auto
$yugo->marka="Zastava"; // Dodeljemo tom automobilu marku npr
$yugo->model="Yugo"; //Dodeljujemo model nasoj klasi
$yugo->boja="Bela";// dodeljujemo iz klase boju
$yugo->kubikaza="1600 ";
$yugo->snimiAuto();

echo "Napravili smo automobil pod imenom " . $audiA4->marka;

echo "Napravili smo automobil pod imenom " . $yugo->model;

$yugo->model ="Yugo 45";

echo "Napravili smo automobil pod imenom " . $yugo->marka;

$yugo->ofarbaj("crvena"); // $yugo->boja=crvena
echo "Auto je ofarban u boju:".$yugo->boja;