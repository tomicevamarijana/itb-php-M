<?php
    require_once "Kredit.php";

    class StambeniKredit extends Kredit{

        //konstruktor
        public function __construct($n,$o,$k,$br){
            parent::__construct($n,$o,$k,$br);
        }
        //metoda
        public function obracunMesRate(){
            $kamata=$this->godKamata /12/100;
            $stepen=pow(1 + $kamata,$this->brGodOtp * 12);
            return ($this->osnovica * $kamata * $stepen)/($stepen - 1);
        }



    }
?>