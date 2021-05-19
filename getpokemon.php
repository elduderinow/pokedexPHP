<?php

class NewPoke
{
    //properties & methods go here
    public $name = "Searching...";
    public $hp = 0;
    public $id = 0;
    public $attack = 0;
    public $type = "";
    public $type2 = "";
    public $desc = "";
    public $evoname = "";
    public $sprite = "";
    public $evosprite = "";
    public $moves = "";
    public $bgcolortop = "#b5cdcd";
    public $bgcolorbottom = "#b5cdcd";
    private $abilities;
    private $randomNr = 0;

    public function setAbility($abilities) {
        $this->abilities = $abilities;
    }
    public function getAbility() {
        return $this->abilities;
    }

    public function setRand($randomNr) {
        $this->randomNr = $randomNr;
    }
    public function getRand() {
        return $this->randomNr;
    }


}





