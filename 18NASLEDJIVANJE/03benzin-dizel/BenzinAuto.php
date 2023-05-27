<?php
    require_once "Automobil.php";
    class BenzinAuto extends Automobil{
        protected $cenaBenzina;

        //konstruktor
        public function __construct($n,$k,$p,$c){
            $g="BENZIN";
            parent::__construct($n,$g,$k,$p);
            $this->setCenaBenzina($c);
        }
        //seter i geter
        public function setCenaBenzina($c){
            if(is_numeric($c)){
                $this->cenaBenzina=$c;
            }
        }
        public function getCenaBenzina(){
            return $this->cenaBenzina;
        }
        //ispis
        public function ispisBenzin(){
            $this->ispis();
            echo "<p>Cena BENZIN goriva je $this->cenaBenzina.</p>";
        }
        //ulozeno
        public function ulozenoPara(){
            return $this->predjenoKilometara/100*$this->potrosnja*$this->cenaBenzina;
        }

    }
   

?>