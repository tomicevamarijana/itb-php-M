<?php
    require_once "oblik.php";
    class Trougao extends Oblik{
        private $a;
        private $b;
        private $c;

        //metoda za proveru uredjenosti trougla
        private static function uslovZaTrougao($a,$b,$c){
            return ($a+$b>$c && $a+$c>$b && $b+$c>$a && $a>0 && $b>0 && $c>0);
        }

        //konstruktor
        public function __construct($a,$b,$c){
            //parent::__construct("Trougao");
            parent::__construct(Oblik::TROUGAO);
            if(self::uslovZaTrougao($a,$b,$c)){
                $this->a=$a;
                $this->b=$b;
                $this->c=$c;
            }
            else{
                //echo"</p>Duzine stranica ne zadovoljavaju uslov da obrazuju trougao.</p>";
                $this->a=0;
                $this->b=0;
                $this->c=0;
            }
        }

        //seteri
        public function setA($a){
            if(self::uslovZaTrougao($a,$this->b,$this->c)){
                $this->a=$a;
            }            
            else{
                echo "<p>Ne moze da se PROMENI vrednost stranice a.</p>";
            }
        }
        public function setB($b){
            if(self::uslovZaTrougao($this->a,$b,$this->c)){
                $this->b=$b;
            }
            else{
                echo "<p>Ne moze da se PROMENI vrednost stranice b.</p>";
            }
        }
        public function setC($c){
            if(self::uslovZaTrougao($this->a,$this->b,$c)){
                $this->c=$c;
            }
            else{
                echo "<p>Ne moze da se PROMENI vrednost stranice c.</p>";
            }
        }
        //geteri
        public function getA(){
            return $this->a;
        }
        public function getB(){
            return $this->b;
        }
        public function getC(){
            return $this->c;
        }

        //O
        public function obim(){
            return $this->a+$this->b+$this->c;
        }
        //P
        public function povrsina(){
            return (sqrt(($this->a+$this->b+$this->c)*($this->a+$this->b-$this->c)*($this->b+$this->c-$this->a)*($this->c+$this->a-$this->b)))/4;
        }
        //ispis
        /*
        public function ispis(){
            echo "<p>Trougao: Obim je " .  $this->obim() . " Povrsina je " . $this->povrsina() . ".</p>";
        }
        */

        

    }

?>