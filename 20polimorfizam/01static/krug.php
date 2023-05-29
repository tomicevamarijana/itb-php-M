<?php
    class Krug{
        protected $r;
        const PI=3.14;
        private static $pi=self::PI; //ne mora vrednost da je setovana
        private static $brojDecimala; //NE SME SETER

        private static $brojKrugova=0; //stefanov primer 

        //konstruktor
        public function __construct($r){
            self::$brojKrugova++; //veoma zgodno
            $this->setR($r);
        }

        //geter i seter
        public function setR($r){
            if($r>0){
                $this->r=$r;
            }
            else{
                $this->r=0;
            }            
        }

        public function getR(){
            return $this->r;
        }
        //obim
        public function obimKruga(){
            //return $this->r*2*self::PI; //konstanta
            //return $this->r*2*self::$pi; //static
            return round($this->r*2*self::$pi,self::$brojDecimala);
        }
        //P
        public function povrsinaKruga(){
            //return $this->r**2*Krug::PI; //konstanta
            //return $this->r**2*self::PI; //konstanta drugi nacin
            //return $this->r**2*self::$pi; //static
            return round($this->r**2*self::$pi,self::$brojDecimala);
        }
        //
        public static function setPi($vr){
            self::$pi=$vr;
        }
        public static function getPi(){
            return self::$pi;
        }
        //geter i seter za static broj decimala
        public static function setBrojDecimala($br){
            self::$brojDecimala=$br;
        }
        public static function getBrojDecimala(){
            return self::$brojDecimala;
        }
        //geter i seter za static broj krugova
        public static function getBrojKrugova(){
            return self::$brojKrugova;
        }
        








    }
?>