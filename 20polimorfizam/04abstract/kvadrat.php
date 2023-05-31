<?php
    require_once "oblik.php";

    class Kvadrat extends Oblik{
        private $a;

        //konstruktor
        public function __construct($a){
            //parent::__construct("Kvadrat");
            parent::__construct(Oblik::KVADRAT);
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
        public function obim(){ //override
            return $this->a*4;
        }
        //P
        public function povrsina(){ //override
            return $this->a**2;
        }
        //ispis-ne treba mi
        /*
        public function ispis(){
            echo "<p>Kvadrat: Obim: " .  $this->obim() . " Povrsina je " . $this->povrsina() . ".</p>";
        }
        */



    }

?>
