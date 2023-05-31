<?php 
//nadklasa
    abstract class Oblik{

        private $nazivOblika; //umesto gettype();
        const TROUGAO="Trougao"; //OVE KONSTANTE SU TU DA NE BI HARDKODOVALI STRINGOVE ZA VREDNOST $nazivOblika u konstruktoru
        const PRAVOUGAONIK="Pravougaonik";
        const KVADRAT="Kvadrat";
        const ROMB="Romb";
        
        public function __construct($n){
            $this->nazivOblika=$n;
        }
        //P i O prazne, kao placeholderi
        //postoje samo da bi ih imale izvedene, onda postaju abstract

        //O
        public abstract function obim();

        //P
        public abstract function povrsina();

        //ispis
        public function ispis(){
            //sme da bude prazna za klasican ispis
            //drugi nacin je bolji
            echo "<p>$this->nazivOblika: Obim: " .  $this->obim() . " Povrsina je " . $this->povrsina() . ".</p>";
        }







    }


?>