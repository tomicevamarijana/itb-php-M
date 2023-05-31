<?php
    require_once "kredit.php";

    class AutoKredit extends Kredit{
        protected $autoKamata;

        public function __construct($n,$o,$g,$br,$ak){
            parent::__construct($n,$o,$g,$br);
            $this->setAutoKamata($ak);
        }

        //seter
        public function setAutoKamata($ak){
            if(is_double($ak)){
                $this->autoKamata=$ak;
            }
        }
        //ispis
        public function ispis(){
            parent::ispis();
            echo "<p>AutoKamata je: " .$this->autoKamata . "</p>";
        }
        //racunanje
        public function racunanjeMesRate(){
            $kamata = $this->osnovica * $this->brGodOtplate * ($this->godisnjaKamata + $this->autoKamata)/100;
            $ukupanIznos=$this->osnovica + $kamata;
            return $ukupanIznos/($this->brGodOtplate*12);
        }






    }


?>