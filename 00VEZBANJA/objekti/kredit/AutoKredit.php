<?php
    require_once "Kredit.php";

    class AutoKredit extends Kredit{
        protected $autoKamata;

        //konstruktor
        public function __construct($n,$o,$k,$br,$ak){
            parent::__construct($n,$o,$k,$br);
            $this->setAutoKamata($ak);
        }

        //seter i geter
        public function setAutoKamata($ak){
            if(is_double($ak) || is_integer($ak)){
                $this->autoKamata=$ak;
            }
        }
        public function getAutokamata(){
            return $this->autoKamata;
        }
        //ispis
        public function ispis(){
            parent::ispis();
            echo "<p> AutoKamata iznosi: $this->autoKamata. </p>";
        }
        //metoda
        public function obracunMesRate(){
            $kamata=$this->osnovica * $this->brGodOtp * ($this->godKamata + $this->autoKamata)/100;
            $uk=$this->osnovica + $kamata;
            return $uk/(12 * $this->brGodOtp);
        }



    }

?>
