<?php
    class Knjiga{
        private $naslov;
        private $autor;
        private $godIzdanja;
        private $brojStrana;
        private $cena;

        //konstruktor
        public function __construct($n,$a,$g,$b,$c){
            $this->setNaslov($n);
            $this->setAutor($a);
            $this->setGodIzdanja($g);
            $this->setBrojStrana($b);
            $this->setCena($c);
        }

        //seteri
        public function setNaslov($n){
            $this->naslov=$n;
        }
        public function setAutor($a){
            $this->autor=$a;
        }
        public function setGodIzdanja($g){
            $this->godIzdanja=$g;
        }
        public function setBrojStrana($b){
            $this->brojStrana=$b;
        }
        public function setCena($c){
            $this->cena=$c;
        }

        //geteri
        public function getAutor(){
            return $this->autor;
        }
        public function getNaslov(){
            return $this->naslov;
        }
        public function getGodIzdanja(){
            return $this->godIzdanja;
        }
        public function getBrojStrana(){
            return $this->brojStrana;
        }
        public function getCena(){
            return $this->cena;
        }
        // metode
        public function stampa(){
            echo "<p>Knjiga naslova: " . $this->getNaslov() . ", ciji je autor: " . $this->getAutor() . ", godina izdanja: " . $this->getGodIzdanja() . ", broj strana je: " . $this->getBrojStrana() . ", a cena je: " . $this->getCena() . ".</p>";
        }
        //obimna
        public function obimna(){
            if($this->getBrojStrana()>600){
                return true;
            }
            else{
                return false;
            }
        }
        //skupa
        public function skupa(){
            if($this->getCena()>8000){
                return true;
            }
            else{
                return false;
            }
        }
        //dugacko ime
        public function dugackoIme(){
            if(strlen($this->getNaslov())>18){
                return true;
            }
            else{
                return false;
            }
        }
    }
    //kreiranje objekta
    $k1=new Knjiga("Na Drini Cuprijaaaa","Ivo Andric",1961,450,9000);
    $k1->stampa();
    //da li je obimna
    echo "<p>Knjiga je obimna: ";
    if($k1->obimna()){
        echo " Jeste</p>";
    }
    else{
        echo " Nije</p>";
    }
    //da li je skupa
    echo "<p>Knjiga je skupa: ";
    if($k1->skupa()){
        echo " Jeste </p>";
    }
    else{
        echo " Nije</p>";
    }
    //da li je naslov dugacak
    echo "<p>Naslov je dugacak: ";
    if($k1->dugackoIme()){
        echo " Jeste </p>";
    }
    else{
        echo " Nije</p>";
    }

?>