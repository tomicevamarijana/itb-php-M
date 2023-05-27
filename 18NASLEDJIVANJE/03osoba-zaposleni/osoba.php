<?php
    class Osoba{
        protected $ime;
        protected $prezime;
        protected $godRodjenja;

        public function __construct($i,$p,$g){
            $this->setIme($i);
            $this->setPrezime($p);
            $this->setGodRodjenja($g);
        }
        //seteri
        public function setIme($i){
            $this->ime=$i;            
        }
        public function setPrezime($p){
            $this->prezime=$p;
        }
        public function setGodRodjenja($g){
            $this->godRodjenja=$g;
        }
        //geteri
        public function getIme(){
            return $this->ime;
        }
        public function getPrezime(){
            return $this->prezime;
        }
        public function getGodRodjenja(){
            return $this->godRodjenja;
        }
        //metoda
        public function ispisOsoba(){
            echo "<p>Ispis OSOBE: Ime: $this->ime, Prezime: $this->prezime, Godina rodjenja: $this->godRodjenja.</p>";
        }






    }
?>