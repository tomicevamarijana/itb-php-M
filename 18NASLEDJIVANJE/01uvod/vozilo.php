<?php
    class Vozilo{
        //za pocetak je sve javno
        protected $boja; 
        protected $tip;

        public function voziVozilo(){
            echo "<p>Boja: $this->boja, Tip: $this->tip, je u pokretu </p>";
        }

        //konstruktor
        public function __construct($b,$t){
            $this->setBoja($b);
            $this->setTip($t);
        }
        //geteri i seteri
        public function getBoja(){
            return $this->boja;
        }
        public function getTip(){
            return $this->tip;
        }
        public function setBoja($b){
            $this->boja=$b;
        }
        public function setTip($t){
            $this->tip=$t;
        }




    }

?>