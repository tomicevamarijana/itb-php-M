<?php 
//nadklasa
    class Oblik{

        private $nazivOblika; //umesto gettype();
        const TROUGAO="Trougao"; //OVE KONSTANTE SU TU DA NE BI HARDKODOVALI STRINGOVE ZA VREDNOST $nazivOblika u konstruktoru
        const PRAVOUGAONIK="Pravougaonik";
        const KVADRAT="Kvadrat";
        const ROMB="Romb";
        
        public function __construct($n){
            $this->nazivOblika=$n;
        }

        //O
        public function obim(){
            return 0;
        }

        //P
        public function povrsina(){
            return 0;
        }
        //ispis
        public function ispis(){
            //sme da bude prazna za klasican ispis
            //drugi nacin je bolji
            echo "<p>$this->nazivOblika: Obim: " .  $this->obim() . " Povrsina je " . $this->povrsina() . ".</p>";
        }







    }


?>