<?php
    abstract class Kredit{
        protected $naziv;
        protected $osnovica;
        protected $godisnjaKamata;
        protected $brGodOtplate;

        public function __construct($n,$o,$g,$br){
            $this->setNaziv($n);
            $this->setOsnovica($o);
            $this->setGodisnjaKamata($g);
            $this->setBrGodOtplate($br);

        }
        //seteri
        public function setNaziv($n){
            $this->naziv=$n;
        }
        public function setOsnovica($o){
            if(is_double($o)){
                $this->osnovica=$o;
            }
        }
        public function setGodisnjaKamata($g){
            if(is_double($g)){
                $this->godisnjaKamata=$g;
            }
        }
        public function setBrGodOtplate($br){
            if(is_int($br)){
                $this->brGodOtplate=$br;
            }
        }
        //geteri

        
        //ispis
        public function ispis(){
            echo "<p> Naziv: " . $this->naziv . ", Osnovica: " .$this->osnovica . ", Godisnja kamata: " .$this->godisnjaKamata . ", Broj godina otplate: " . $this->brGodOtplate . "</p>";
        }
        public abstract function racunanjeMesRate();

    }


?>
