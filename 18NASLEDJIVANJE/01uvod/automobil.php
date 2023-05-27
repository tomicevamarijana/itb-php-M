<?php
require_once "Vozilo.php"; //prvo i osnovno
    class Automobil extends Vozilo{
        //Automobil nasledjuje sva polja i metode Vozila
        //ali moze da pristupa samo onima koje su PUBLIC 
        //polja koja su PRIVATE se nasledjuju, ne moze direktno, mora geter

        public function voziAutomobil(){
            echo "<p>Automobil $this->tip ($this->boja) u pokretu</p>"; //polja su protected
            //echo "<p>Automobil " . $this->getTip() . "(" . $this->getBoja() . ") u pokretu</p>";
        }

    }
?>