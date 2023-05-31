<?php
    //REALNO NE TREBA MI
    require_once "kvadrat.php";

    class Romb extends Kvadrat{
        private $ugao;

        //geter
        public function getUgao(){
            return $this->ugao;
        }
        //seter
        public function setUgao($u){
            if($u>0){
                $this->ugao=$u;
            }
            else{
                $this->ugao=0;
            }
        }
        //romb ima isti O kao kvadrat, ne moram da pravim novo ponasanje fjw

        //P
        public function povrsina(){
            return $this->getA()*$this->getA()*sin($this->ugao);
        }

        public function __construct($a,$u){
            parent::__construct($a); //zovemo parentov konstruktor
            //Oblik::__construct("Romb"); //pregazim, tj nadopunim prethodni 
            Oblik::__construct(Oblik::ROMB);
            $this->setUgao($u);
        }
        //ispis
        /*
        public function ispis(){
            echo "<p>Romb: Obim je " .  $this->obim() . " Povrsina je " . $this->povrsina() . ".</p>";
        }
        */








    }


?>