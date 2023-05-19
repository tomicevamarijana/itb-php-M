<?php
//getteri i setteri
//podrazumeva se da su metode i polja JAVNI
//privatnom polju ne sme da se prilazi VAN klase
    class Auto{
        //polja,atributi
        private $marka;
        private $boja;
        private $imaKrov;

        //metode,funkcije
        
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

    //Kada se kreira klasa, obicno se na sledeci nacin implementira
    //1. sva polja stavimo da su privatna
    //2.za svako polje napisemo geter i seter
    // 2.1 geter: dohvata (cita) vrednost polja
    // 2.2 seter: postavlja novu vrednost polju


    $a1=new Auto();
    $a1->setMarka("Audi");
    $a1->setImaKrov("Audi"); //nije postavio
    if($a1->getImaKrov()===true){
        echo "Automobil marke " . $a1->getMarka() . " ima krov <br>";
    }
    elseif(($a1->getImaKrov()===false)){
        echo "Automobil marke " . $a1->getMarka() . " nema krov <br>";
    }
    else{
        echo "Automobil marke " . $a1->getMarka() . " nema validno def.polje <br>";//nikad ne dolazi ovde
    }


    //echo $a1->marka; //NE RADI ZBOG PRIVATNOSTI
    echo $a1->getMarka(); //RADI JER SE POZIVA GETER,koji vrati vrednost polja

    //privatna funkcija se moze pozvati u okviru public funkcije
    








?>