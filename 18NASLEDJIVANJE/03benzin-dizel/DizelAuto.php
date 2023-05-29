<?php

    require_once "Automobil.php";

    class DizelAuto extends Automobil{
        protected $cenaDizela;

        //konstruktor
        public function __construct($n,$k,$p,$c){
            $g="DIZEL";
            parent::__construct($n,$g,$k,$p);
            $this->setCenaDizela($c);
        }

        //seter i geter
        public function setCenaDizela($c){
            if(is_numeric($c)){
                $this->cenaDizela=$c;
            }        
        }
        public function getCenaDizela(){
            return $this->cenaDizela;
        }
        //ispis
        public function ispisDizel(){
            $this->ispis();
            echo "<p>Cena DIZEL goriva je $this->cenaDizela.</p>";
        }
        //ulozeno
        public function ulozenoPara(){
            return $this->predjenoKilometara/100*$this->potrosnja*$this->cenaDizela;
        }

        



    }
    
    

?>