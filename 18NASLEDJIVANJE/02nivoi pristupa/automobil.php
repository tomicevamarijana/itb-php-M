<?php
    require_once "Vozilo.php";

    class Automobil extends Vozilo{
        private $brojVrata; //novo polje klase Automobil, treba novi KONSTRUKTOR

        public function __construct($j,$z,$p,$bv){ //override konstruktor osnovne klase automobil
            //$this->javnoPolje=$j; //NE DUPLIRATI KOD
            //$this->zasticenoPolje=$z;
            //$this->privatnoPolje=$p;
            //POZOVI KONSTRUKTOR OSNOVNE KLASE AUTOMOBIL da ne bi duplirao kod
            parent::__construct($j,$z,$p);
            //konstruktor se postavlja za polja iz parent osnovne klase
            $this->brojVrata=$bv; 
        }
        public function ispisAuto(){
            //$this->ispis(); //ovo ce pristupiti privatnom polju
            echo "<p> Automobil: " . $this->javnoPolje . ", " . $this->zasticenoPolje . 
            //", " . $this->privatnoPolje . 
            " " . $this->brojVrata .
            "</p>";
        }

    }



?>