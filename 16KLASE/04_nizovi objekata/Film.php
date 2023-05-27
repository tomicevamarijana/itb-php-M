<?php
    class Film{
        private $naslov;
        private $reziser;
        private $godinaIzdanja;
        //dodajem naknadno polje
        private $ocene;
        //konstruktor
        public function __construct($n,$g,$r,$o){
            $this->setNaslov($n);
            $this->setGodinaIzdanja($g);
            $this->setReziser($r);            
            $this->setOcene($o);
        }

        //seteri i geteri
        public function setNaslov($n){
            $this->naslov=$n;
        }
        public function getNaslov(){
            return $this->naslov;
        }
        public function setReziser($r){
            $this->reziser=$r;
        }
        public function getReziser(){
            return $this->reziser;
        }
        public function setGodinaIzdanja($g){
            $this->godinaIzdanja=$g;
        }
        public function getGodinaIzdanja(){
            return $this->godinaIzdanja;
        }
        public function setOcene($o){
            $this->ocene=$o;
        }
        public function getOcene(){
            return $this->ocene;
        }

        //stampa
        public function stampaj(){
            echo "<p>Film $this->naslov, reziser $this->reziser, godina $this->godinaIzdanja, ocene: " . implode(", ",$this->ocene) . ", prosecna ocena:" . $this->prosek() . "</p>";
        }
        //prosek-korisno isprobati unutar klase, u metodi stampaj, ne mora objekat
        public function prosek(){
            $sum=0;
            foreach($this->ocene as $o){
                $sum+=$o;
            }
            $n=count($this->ocene);
            return ($n>0)?($sum/$n) : 0;
        } 



    }


?>