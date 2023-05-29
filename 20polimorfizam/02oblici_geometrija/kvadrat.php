<?php
    class Kvadrat{
        private $a;

        //konstruktor
        public function __construct($a){
            $this->setA($a);
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

        //geteri
        public function getA(){
            return $this->a;
        }

        //O
        public function obimKvadrata(){
            return $this->a*4;
        }
        //P
        public function povrsinaKvadrata(){
            return $this->a**2;
        }



    }

?>
