<?php

    class TekuciRacun{
        private $BrojRacuna;
        private $Stanje; //u DIN na 2 dec
        private $Kurs; //sr. k.evra na 4 dec

        //GETERI
        public function getBrojRacuna(){
            return $this->BrojRacuna;
        }
        
        public function getStanje(){
            return $this->Stanje;
        }

        public function getKurs(){
            return $this->Kurs;
        }

        //SETERI
        public function setBrojRacuna($br){
            $this->BrojRacuna=$br;
        }

        public function setStanje($s){
            $this->Stanje=round($s,2);
        }

        public function setKurs($k){
            //$k=117.2803;
            $this->Kurs=round($k,4);
        }

        //metode
        public function convertToRsd($num){ 
            $kurs=$this->getKurs();          
            return $num*$kurs;           
        }

        public function stanje(){
            echo "<p>Stanje na racunu broj " . $this->getBrojRacuna() . " na dan " . date("j.  F Y H:i A") . " iznosi: " . number_format($this->getStanje(),2,'.') . " RSD.</p>";
        }        

        public function uplati($num,$str){
            if((!is_numeric($num))){
                echo "<p>Iznos za uplatu nije pravilno unet.</p>";
            }
            if($str=="RSD"){
                $novoStanje=$this->getStanje()+$num;
                $this->setStanje(round($novoStanje,2));
                $this->stanje();
            }
            elseif($str=="EUR"){
                $novoStanje=$this->getStanje()+$this->convertToRsd($num);
                $this->setStanje(round($novoStanje,2));
                $this->stanje();
            }
            else{
                echo "<p>Valuta nije pravilno uneta.</p>";
            }         
        }

        public function isplati($num,$str){
            if((!is_numeric($num))){
                echo "<p>Iznos za uplatu nije pravilno unet.</p>";
            }            
            if($str=="RSD"){
                if($this->getStanje() >= $num){
                    $novoStanje=$this->getStanje() - $num;
                    $this->setStanje(round($novoStanje,2)); //uSetStanje mozda nije morao round, posto je vec u seteru
                    $this->stanje();
                    return true;
                }
                else{
                    return false;
                }
            }
            elseif($str=="EUR"){
                if($this->getStanje() >= $this->convertToRsd($num)){
                    $novoStanje=$this->getStanje() - $this->convertToRsd($num);
                    $this->setStanje(round($novoStanje,2));
                    $this->stanje();
                    return true;
                }
                else{
                    return false;
                }
            }
            else{
                echo "<p>Valuta nije pravilno uneta.</p>";
            }
        }
    }

    //KREIRANJE OBJEKATA
    echo "<hr>";
    $r1=new TekuciRacun();
    $r1->setBrojRacuna('123456789');
    $r1->setStanje('1000');

    $r1->stanje();
    $r1->uplati(100,"RSD");
    if($r1->isplati(2000,"RSD")){
        echo "<p>Uspesno izvrsena transakcija.</p>";
    }
    else{
        echo "<p>Transakcija nije izvrsena.</p>";
    }
    
    echo "<hr>";
    $r2=new TekuciRacun();
    $r2->setBrojRacuna(987654321);
    $r2->setStanje(1000);
    $r2->setKurs(117.2803);

    $r2->stanje();
    $r2->uplati(10,"EUR");

    echo "<hr>";    
    $r3=new TekuciRacun();
    $r3->setBrojRacuna("Br racuna 3");
    $r3->setStanje(0);
    $r3->setKurs(117.2803);

    
    $r3->stanje();
    $r3->uplati(1000,"RSD");
    if($r3->isplati(1,"EUR")){
        echo "<p>Uspesno izvrsena transakcija.</p>";
    }
    else{
        echo "<p>Transakcija nije izvrsena.</p>";
    }
    if($r3->isplati(10,"EUR")){
        echo "<p>Uspesno izvrsena transakcija.</p>";
    }
    else{
        echo "<p>Transakcija nije izvrsena.</p>";
    }

    


    


    

    








?>