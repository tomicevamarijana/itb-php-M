<?php
    class Automobil{
        protected $naziv;
        protected $tipGoriva;
        protected $predjenoKilometara;
        protected $potrosnja;

        //konstruktor
        public function __construct($n,$g,$k,$p){
            $this->setNaziv($n);
            $this->setTipGoriva($g);
            $this->setPredjenoKm($k);
            $this->setPotrosnja($p);
        }

        //seteri
        public function setNaziv($n){
            if(is_string($n)){
                $this->naziv=$n;            
            }
        }
        public function setTipGoriva($g){
            if($g=="DIZEL" || $g=="BENZIN"){
                $this->tipGoriva=$g;
            }
            else{
                echo "<p>Potrebno je uneti jedan od dva tipa goriva.</p>";
            }
        }
        public function setPredjenoKm($k){
            if(is_numeric($k)){
                $this->predjenoKilometara=$k;
            }
        }
        public function setPotrosnja($p){
            if(is_numeric($p)){
                $this->potrosnja=$p;
            }
        }
        //geteri
        public function getNaziv(){
            return $this->naziv;
        }
        public function getTipGoriva(){
            return $this->tipGoriva;
        }
        public function getPredjenoKm(){
            return $this->predjenoKilometara;
        }
        public function getPotrosnja(){
            return $this->potrosnja;
        }
        //ispis
        public function ispis(){
            echo "<p>Ispis AUTOMOBILA: $this->naziv, tip goriva: $this->tipGoriva, do sada predjeno km: $this->predjenoKilometara, a potrosnja je: $this->potrosnja litara.</p>";
        }
    }    

?>