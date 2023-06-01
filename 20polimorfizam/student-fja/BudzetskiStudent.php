<?php
    require_once "Student.php";

    class BudzetskiStudent extends Student{

        //konstruktor
        public function __construct($i,$ob,$oc){
            parent::__construct($i,$ob,$oc);
        }

        //metode
        public function skolarina(){
            return (300-$this->osvojeniESPB)*2000;
        }
        public function cenaPrijaveIspita(){
            if($this->osvojeniESPB%60==0 && $this->osvojeniESPB!=300){ 
                return 0;
            }
            elseif($this->osvojeniESPB==300){
                echo "<p>Student nema vise ispita jer je zavrsio studije.</p>";
            }
            else{
                return 100;
            }
        }

        //ispis
        public function ispis(){
            parent::ispis();
            echo ".</p>";
        }


    }
?>