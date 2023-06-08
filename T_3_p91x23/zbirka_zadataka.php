<?php
    require_once "knjiga.php";

    class ZbirkaZadataka extends Knjiga{
        private $brojZadataka;

        //konstruktor
        public function __construct($n,$brs,$c,$brz){
            parent::__construct($n,$brs,$c);
            $this->setBrojZadataka($brz);
        }

        //seter i geter
        public function setBrojZadataka($brz){
            if($brz>=0){
                $this->brojZadataka=$brz;
            }
            else{
                $this->brojZadataka=0;
            }
        }
        public function getBrojZadataka(){
            return $this->brojZadataka;
        }
        //stampa
        public function stampa(){
            parent::stampa();
            echo "<p>Broj zadataka ove zbirke je: $this->brojZadataka.</p>";
        }
        //
        public function jedinicnaCena(){
            if($this->getBrojStrana()>0 && $this->getCena()>0){
                $prosekZadPoStr=$this->getBrojZadataka()/$this->getBrojStrana();
                return $prosekZadPoStr/$this->getCena();
            }
            else{
                return 0;
            }
            
        }

    }

?>