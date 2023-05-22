<?php

    class Auto{
        //polja,atributi
        private $marka;
        private $boja;
        private $imaKrov;

        //metode,funkcije

        //novo:KONSTRUKTOR
        public function __construct($m,$b,$ik){
            $this->setMarka($m);
            $this->setBoja($b);
            $this->setImaKrov($ik);
        }
        
        //GETERI: vracaju vrednost polja
        public function getMarka(){
            return $this->marka;
        }
        public function getBoja(){
            return $this->boja;
        }
        public function getImaKrov(){
            return $this->imaKrov;
        }

        //SETERI: postavljaju vrednosti polja
        public function setMarka($m){
            if($m!=""){
                $this->marka=$m; 
            }
            else{
                $this->marka="Fiat";
            }
                    
        }
        public function setBoja($b){
            $this->boja=$b;
        }
        public function setImaKrov($ik){
            if($ik===true || $ik===false){
                $this->imaKrov=$ik;
            }
            else{
                $this->imaKrov=false;
            }            
        }

        public function sviraj(){
            echo "<p>Beep! Beep!</p>";
        }

        public function ispis(){
            $this->sviraj();
            echo "<p>Automobil marke " . $this->marka . " boje: " . $this->boja;
            if($this->imaKrov==true){
                echo " Ima krov";
            }
            else{
                echo " Nema krov ";
            }
            echo "</p>";
        }
    }    

    //kreiranje objekata
    // 1)KREIRAMO OBJEKAT
    $a1=new Auto("BMW","plava",false);
    // 2)SETUJEMO VREDNOSTI POLJA - ne treba nam ako koristimo konstruktor 
    //$a1->setMarka("BMW");
    //$a1->setBoja("plava");
    //$a1->setImaKrov(false);
    //3) KORISTIMO OBJEKAT
    $a1->ispis();
    $a1=new Auto("citroen","crn",false); //kreiran novi objekat, pregazen je prvi objekat sa ovim imenom

    //najlogicnije dati pripritet setovanju polja, nad ostalim metodama, je to uraditi prilikom new tj.kreiranja objekata

    //kada koristim konstruktor, vise ne mogu da pravim blanko objekte, kao =new Klasa()

    //seteri se sada koriste ako korisnik kasnije, posle kreiranja objekta, zeli da menja vrednosti polja
    $a1->setMarka("Opel");
    $a1->setBoja("bela");
    $a1->ispis();
    //ako ne zelim da korisnik menja polja nakon kreiranja, seteri se postave na PRIVATE
//SVE STO RADIMO JE U KRATKOTRAJNOJ MEMORIJI, KAD SE KOD IZVRSI, SVE PROMENLJIVE SU MRTVE. ZATO PODACI SE NEGDE CUVAJU. NPR KLASE SE KORISTE ZA CUVANJE PRETRAGA.
//tj podaci su zivi dok postoji promenljiva koja pokazuje na njih.


?>