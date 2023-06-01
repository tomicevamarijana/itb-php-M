<?php //DODATA FUNKCIJA I KONSTANTE U NJOJ 
    abstract class Student{
        protected $ime;
        protected $osvojeniESPB;
        protected $prosecnaOcena;
        //konstante const ROMB="Romb";
        const ZBIR=300;
        const GORNJAG=60;
        CONST DONJAG=35;

        //konstruktor
        public function __construct($i,$ob,$oc){
            $this->setIme($i);
            //$this->setOsvojeniESPB($ob);
            $this->setProsecnaOcena($oc);
            if($ob<=self::ZBIR){
                $this->osvojeniESPB=$ob;
            }
            else{
                $this->osvojeniESPB=0;
            } //vrvt je moglo i samo preko setera, jer seter za $osvojeniESPB u osnovnoj klasi je nezavisan od ostalih polja
            
        }

        //seteri
        public function setIme($i){
            if(is_string($i)){
                $this->ime=$i;
            }
        }
        public function setOsvojeniESPB($ob){ //ovo treba da overridujem u samofinansirajucem, ali treba mi i ovde nezavisno od prijavljenih bodova, jer ovakvo vazi za budzetskog
            if($ob<=self::ZBIR){
                $this->osvojeniESPB=$ob;
            }
            else{
                $this->osvojeniESPB=0;
            }
        }
        public function setProsecnaOcena($oc){
            if(is_numeric($oc)){ //mogu dodati izmedju 6 i 10
                $this->prosecnaOcena=$oc;
            }
        }
        //geteri
        public function getIme(){
            return $this->ime;
        }
        public function getOsvojeniESPB(){
            return $this->osvojeniESPB;
        }
        public function getProsecnaOcena(){
            return $this->prosecnaOcena;
        }
        //metode
        abstract public function skolarina();

        abstract public function cenaPrijaveIspita();

        //ispis
        public function ispis(){
            echo "<p> Ime studenta: " . $this->ime . ", osvojenih ESPB bodova: " . $this->osvojeniESPB . ", prosecna ocena: " . $this->prosecnaOcena; 
        }

        






















    }

?>