<?php

    require_once "osoba.php";
    class Zaposleni extends Osoba{
        private $plata;
        private $pozicija;

        public function __construct($i,$p,$g,$pl,$poz){
            parent::__construct($i,$p,$g);
            $this->setPlata($pl);
            $this->setPozicija($poz);
        }

        //seteri
        public function setPlata($pl){
            $this->plata=$pl;            
        }
        public function setPozicija($poz){
            $this->pozicija=$poz;
        }
        //geteri
        public function getPlata(){
            return $this->plata;
        }
        public function getPozicija(){
            return $this->pozicija;
        }
        //metode
        public function ispisZaposleni(){
            $this->ispisOsoba();
            echo "<p>Ispis ZAPOSLENOG:  DODATNO Plata: $this->plata, Pozicija: $this->pozicija.</p>";
        }



    }
?>
