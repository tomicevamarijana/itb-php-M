<?php
    abstract class Kredit{
        protected $naziv;
        protected $osnovica;
        protected $godKamata;
        protected $brGodOtp;

        //konstruktor
        public function __construct($n,$o,$k,$br){
            $this->setNaziv($n);
            $this->setOsnovica($o);
            $this->setGodKamata($k);
            $this->setBrGodOtp($br);
        }

        //seteri
        public function setNaziv($n){
            if(is_string($n)){
                $this->naziv=$n;
            }
        }
        public function setOsnovica($o){
            if(is_double($o) || is_integer($o)){
                $this->osnovica=$o;
            }
        }
        public function setGodKamata($k){
            if(is_double($k) || is_integer($k)){
                $this->godKamata=$k;
            }
        }
        public function setBrGodOtp($br){
            if(is_integer($br)){
                $this->brGodOtp=$br;
            }
        }
        //geteri
        public function getNaziv(){
            return $this->naziv;
        }
        public function getOsnovica(){
            return $this->osnovica;
        }
        public function getGodKamata(){
            return $this->godKamata;
        }
        public function getBrOtp(){
            return $this->brGodOtp;
        }
        //ispis
        public function ispis(){
            echo "<p> Naziv: $this->naziv, Osnovica: $this->osnovica, Godisnja kamata: $this->godKamata, Broj godina otplate: $this->brGodOtp.</p>";
        }
        //metoda
        abstract public function obracunMesRate();
        








    }
?>