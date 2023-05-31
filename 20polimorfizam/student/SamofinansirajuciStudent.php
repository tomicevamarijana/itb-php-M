<?php
    require_once "Student.php";
    
    class SamofinansirajuciStudent extends Student{
        protected $prijavljeniESPB;

        //konstruktor
        //Ti hoces da napravis novi objekat koji jos uvek nema vrednosti u poljima a b c.
        //Zoves konstruktor koji zove seter, a seter zove dva polja.
        //Polja nisu setovana, ergo uslov nije zadovoljen

        public function __construct($i,$ob,$oc,$pb){
            parent::__construct($i,$ob,$oc);
            if($pb>=35 && $pb<=60 && ($ob+$pb)<=300){
                $this->prijavljeniESPB=$pb;
            }
        }

        //seter
        // u uslovima u seteru se proverava da li nova vrednost stranice (koja se unosi kao parametar setera) zajedno sa druge dve postojece stranice
        //(koje se pozivaju sa $this->a/b/c) zadovoljava uslov za trougao
        
        public function setPrijavljeniESPB($pb){
            if($pb>=35 && $pb<=60 && ($pb+$this->osvojeniESPB)<=300){
                $this->prijavljeniESPB=$pb;
            }
        }
        //geter
        public function getPrijavljeniESPB(){
            return $this->prijavljeniESPB;
        }

        //metode
        public function skolarina(){
            if($this->prosecnaOcena<8){
                return 1900*$this->prijavljeniESPB;
            }
            else{
                return 1600*$this->prijavljeniESPB;
            }
        }

        public function cenaPrijaveIspita(){
            return 400;
        }

        //ispis
        public function ispis(){
            parent::ispis();
            echo " , PRIJAVLJENO ESPB: " . $this->prijavljeniESPB . ".</p>";
        }


    }


?>