<?php

    class Pacijent{
        private $ime;
        private $visina;
        private $tezina;

        //geteri
        public function getIme(){
            return $this->ime;
        }
        public function getVisina(){
            return $this->visina;
        }
        public function getTezina(){
            return $this->tezina;
        }

        //seteri
        public function setIme($ime){
            $this->ime=$ime;
        }
        public function setVisina($v){
            if($v<0){
                $this->visina=0;
            }
            elseif($v>250){
                $this->visina=250;
            }
            else{
                $this->visina=$v;
            }
        }

        public function setTezina($t){
            if($t<0){
                $this->tezina=0;
            }
            elseif($t>550){
                $this->tezina=550;
            }
            else{
                $this->tezina=$t;
            }
        }

        public function stampaj(){
            echo "<p> Ime: " . $this->ime . ", Visina: " . $this->visina . ", Tezina: " . $this->tezina . "</p>";
        }
        public function bmi(){
            //echo "<p> Bmi pacijenta: " . $this->tezina/(($this->visina)**2) . "</p>";
            return $this->tezina/(($this->visina)**2);
        }
        public function kritican(){
            //$bmiRez->bmi();
            echo "Pacijent je kritican:  ";
            if($this->bmi()<15 || $this->bmi()>40){
                return TRUE;
            }
            else{
                return false;
            }
        }
        //proba
        function kritican2(){
            $rezBmi=$this->bmi();
            if($rezBmi>40 || $rezBmi<15){
                return TRUE;
            }
            else{
                return FALSE;
            }              
            
        }
    }

    $p1=new pacijent();
    $p1->setIme("Zika");
    $p1->setTezina(1000);
    $p1->setVisina(300);
    echo "Pacijent " . $p1->getIme() . " je tezak " . $p1->getTezina() . " kg, a visok " . $p1->getVisina() . " cm.";

?>