<?php
    class Pravougaonik{
        private $a;
        private $b;

        //konstruktor
        public function __construct($a,$b){
            $this->setA($a);
            $this->setB($b);
        }

        //seteri
        public function setA($a){
            if($a>0){
                $this->a=$a;
            }
            else{
                $this->a=0;
            }
        }
        public function setB($b){
            if($b>0){
                $this->b=$b;
            }
            else{
                $this->b=0;
            }
        }

        //geteri
        public function getA(){
            return $this->a;
        }
        public function getB(){
            return $this->b;
        }
        //O
        public function obimPravougaonika(){
            return $this->a*2+$this->b*2;
        }
        //P
        public function povrsinaPravougaonika(){
            return $this->a*$this->b;
        }






    }
?>