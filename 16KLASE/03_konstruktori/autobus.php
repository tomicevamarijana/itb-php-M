<?php
    class Autobus{
        private $regBr;
        private $brSedista;

        //KONSTRUKTOR
        public function __construct($r,$s){
            $this->regBr=$r;
            $this->brSedista=$s;
        }

        //SETERI
        public function setRegBr($br){
            $this->regBr=$br;
        }
        public function setBrSedista($br){
            $this->brSedista=$br;
        }
        //GETERI
        public function getRegBr(){
            return $this->regBr;
        }
        public function getBrSedista(){
            return $this->brSedista;
        }

        //METODE
        public function stampa(){
            echo "<p>Autobus registarskih tablica: " . $this->getRegBr() . ", ima kapacitet od: " . $this->getBrSedista() . " sedista.</p>";
        }
    }

    //kreiranje objekata
    $nizAutobusa=[
        new Autobus(1111,50),
        new Autobus(2222,60),
        new Autobus(3333,70),
        new Autobus(4444,100),
        new Autobus(5555,90),
        new Autobus(6666,100)
    ];

    //ukupnoSedista
    echo "<p><b>Napraviti funkciju ukupnoSedišta kojoj se prosleđuje niz autobusa, a koja određuje i vraća koliko ukupno sedišta sadrže
    svi autobusi koji se nalaze u nizu autobusa.</b></p>";
    function ukupnoSedista($nizAutobusa){
        $s=0;
        for($i=0;$i<count($nizAutobusa);$i++){
            $s=$s+$nizAutobusa[$i]->getBrSedista();
        }
        return $s;
    }
    echo "<p>Ukupan broj sedista je: " . ukupnoSedista($nizAutobusa) . ".</p>";

    //maksSedista
    echo "<p><b>Napraviti funkciju maksSedista koja ispisuje podatke o autobusu koji ima najveći broj sedišta.</b></p>";
    function maksSedista($nizAutobusa){
        $maks=0;
        for($i=0;$i<count($nizAutobusa);$i++){
            if($nizAutobusa[$i]->getBrSedista()>$maks){
                $maks=$nizAutobusa[$i]->getBrSedista();
            }
        }
        for($i=0;$i<count($nizAutobusa);$i++){
            if($nizAutobusa[$i]->getBrSedista()==$maks){
                $nizAutobusa[$i]->stampa();
            }
        }
    }
    echo "Autobus(i) sa maksimalnim brojem sedista: ";
    echo maksSedista($nizAutobusa);

    //smestanje u autobus
    echo "<p><b> Napraviti funkciju ljudi kojoj se prosleđuje broj ljudi i niz autobusa a funkcija vraća 
    true ukoliko je moguće toliko ljudi smestiti u autobuse, u suprotnom vraća false.</b></p>";
    function smestanje($nizAutobusa,$brLjudi){               
        if($brLjudi<=ukupnoSedista($nizAutobusa)){
            return true;
        }
        else{
            return false;
        }        
        //return $brLjudi<=ukupnoSedista($nizAutobusa);
    }
    $brLjudi=471;    
    echo "<p>U autobuse u koje ukupno staje " . ukupnoSedista($nizAutobusa) . " osoba, da li staje njih $brLjudi?" . (smestanje($nizAutobusa,$brLjudi)?" DA":" NE<p>");






?>