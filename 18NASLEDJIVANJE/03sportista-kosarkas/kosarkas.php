<?php
    require_once "sportista.php";
    class Kosarkas extends Sportista{
        private $poeni;

        public function __construct($i,$p,$g,$gr,$po){
            parent::__construct($i,$p,$g,$gr);
            $this->setPoeni($po);
        }

        public function setPoeni($p){
            $this->poeni=$p;
        }
        public function getPoeni(){
            return $this->poeni;
        }
        //metod
        public function ispisKosarkas(){
            echo "<p>Kosarkas: Ime: $this->ime, Prezime: $this->prezime, godiste: $this->god, grad: $this->grad, Poeni: " . implode(", ",$this->poeni) . ".</p>";
        }
    }
?>