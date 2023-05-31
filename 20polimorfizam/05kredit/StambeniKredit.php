<?php
    require_once "kredit.php";

    class StambeniKredit extends Kredit{

        public function __construct($n,$o,$g,$br){
            parent::__construct($n,$o,$g,$br);
        }

        public function racunanjeMesRate(){
            $mesecnaKamata=$this->godisnjaKamata/12/100;
            $stepen=pow(1+$mesecnaKamata,$this->brGodOtplate*12);
            return ($this->osnovica * $mesecnaKamata * $stepen)/($stepen - 1);
        }

        






    }

?>
