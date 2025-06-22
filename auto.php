<?php

class Auto {
    public $marka;
    public $model;
    public $kubikaza;
    public $boja;

    // function za out ovih funkcija

    public function  snimiAuto(){
        echo "Novi auto:".$this->marka."" .$this->model;//marka +model iscitamo marka+model yugo 55 ce biti
    }
    public function  ofarbaj($novaBoja)
    {
       $this->boja=$novaBoja; // ovde kazemo $boja="plava";
    }
}

