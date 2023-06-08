<?php
    require_once "knjiga.php";

    class Udzbenik extends Knjiga{
        private $tiraz;

        //konstruktor
        public function __construct($n,$brs,$c,$t){
            parent::__construct($n,$brs,$c);
            $this->setTiraz($t);
        }

        //seter i geter
        public function setTiraz($t){
            if($t>=0){
                $this->tiraz=$t;
            }
            else{
                $this->tiraz=0;
            }
        }
        public function getTiraz(){
            return $this->tiraz;
        }

        //stampa
        public function stampa(){
            parent::stampa();
            echo "<p>Tiraz ovog udzbenika je: $this->tiraz.</p>";
        }
        //
        public function jedinicnaCena(){
            if($this->getTiraz()>0){
                return $this->getCena()/$this->getTiraz();
            }
            else{
                return 0;
            }            
        }




    }

?>
