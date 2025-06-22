<?php

require_once "klase/osoba.php";

$miodrag= new Osoba();
$miodrag->ime="Miodrag";
$miodrag->prezime="Kukric";
$miodrag->godinaRodjenja=1998;
$miodrag->visina=197;
$miodrag->tezina=94;
$miodrag->racunajGodine();

// imamo minus u trenutnoj godini mormao prvo debagovari trenutnu godinu


