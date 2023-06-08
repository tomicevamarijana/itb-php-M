<?php
    abstract class Knjiga{
        private $naslov;
        private $brojStrana;
        private $cena;

        //konstruktor
        public function __construct($n,$brs,$c){
            $this->setNaslov($n);
            $this->setBrojStrana($brs);
            $this->setCena($c);
        }

        // seteri
        public function setNaslov($n){
            if(is_string($n) && strlen($n)>=1){
                $this->naslov=$n;
            }
        }
        public function setBrojStrana($brs){
            if($brs>=0){
                $this->brojStrana=$brs;
            }
            else{
                $this->brojStrana=0;
            }
        }
        public function setCena($c){
            if($c>=0){
                $this->cena=$c;
            }
            else{
                $this->cena=0;
            }
        }
        //geteri
        public function getNaslov(){
            return $this->naslov;
        }
        public function getBrojStrana(){
            return $this->brojStrana;
        }
        public function getCena(){
            return $this->cena;
        }
        //stampa
        public function stampa(){
            echo "<p>Knjiga ciji je naslov: $this->naslov, broj strana je: $this->brojStrana, a cena je: $this->cena.</p>";
        }
        //
        abstract public function jedinicnaCena();



    }

?>