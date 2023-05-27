<?php
    class Sportista{
        protected $ime;
        protected $prezime;
        protected $god;
        protected $grad;

        //konstruktor
        public function __construct($i,$p,$g,$gr){
            $this->setIme($i);
            $this->setPrezime($p);
            $this->setGod($g);
            $this->setGrad($gr);
        }

        //seteri
        public function setIme($i){
            $this->ime=$i;
        }
        public function setPrezime($p){
            $this->prezime=$p;
        }
        public function setGod($g){
            $this->god=$g;
        }
        public function setGrad($gr){
            $this->grad=$gr;
        }
        //geteri
        public function getIme(){
            return $this->ime;
        }
        public function getPrezime(){
            return $this->prezime;
        }
        public function getGod(){
            return $this->god;
        }
        public function getGrad(){
            return $this->grad;
        }
        

    }

?>