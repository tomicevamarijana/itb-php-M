<?php
    abstract class Student{
        protected $ime;
        protected $osvojeniESPB;
        protected $prosecnaOcena;

        //konstruktor
        public function __construct($i,$ob,$oc){
            $this->setIme($i);
            $this->setOsvojeniESPB($ob);
            $this->setProsecnaOcena($oc);
        }

        //seteri
        public function setIme($i){
            if(is_string($i)){
                $this->ime=$i;
            }
        }
        public function setOsvojeniESPB($ob){
            if(is_integer($ob)){
                $this->osvojeniESPB=$ob;
            }
        }
        public function setProsecnaOcena($oc){
            if(is_numeric($oc)){
                $this->prosecnaOcena=$oc;
            }
        }
        //geteri
        public function getIme(){
            return $this->ime;
        }
        public function getOsvojeniESPB(){
            return $this->osvojeniESPB;
        }
        public function getProsecnaOcena(){
            return $this->prosecnaOcena;
        }
        //metode
        abstract public function skolarina();

        abstract public function cenaPrijaveIspita();

        //ispis
        public function ispis(){
            echo "<p> Ime studenta: " . $this->ime . ", osvojenih ESPB bodova: " . $this->osvojeniESPB . ", prosecna ocena: " . $this->prosecnaOcena; 
        }

        






















    }

?>