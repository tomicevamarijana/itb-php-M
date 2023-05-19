<?php
    class Pacijent{
        var $ime;
        var $visina;
        var $tezina;
        function stampaj(){
            echo "<p> Ime: " . $this->ime . ", Visina: " . $this->visina . ", Tezina: " . $this->tezina . "</p>";
        }
        function bmi(){
            //echo "<p> Bmi pacijenta: " . $this->tezina/(($this->visina)**2) . "</p>";
            return $this->tezina/(($this->visina)**2);
        }
        function kritican(){
            //$bmiRez->bmi();
            echo "Pacijent je kritican:  ";
            if($this->bmi()<15 || $this->bmi()>40){
                return TRUE;
            }
            else{
                return false;
            }
        }
        //proba
        function kritican2(){
            $rezBmi=$this->bmi();
            if($rezBmi>40 || $rezBmi<15){
                return TRUE;
            }
            else{
                return FALSE;
            }              
            
        }
    }
    $p1=new Pacijent();
    $p1->ime="Pera";
    $p1->visina="1.75";
    $p1->tezina=150;
    $p1->stampaj();
    $p1->bmi();
    $p1->kritican();

    echo "<hr>";

    $p2=new Pacijent();
    $p2->ime="Zika";
    $p2->visina=2;
    $p2->tezina=70;
    $p2->stampaj();
    $p2->bmi();
    $p2->kritican();

    echo "<hr>";

    $p3=new Pacijent();
    $p3->ime="Mika";
    $p3->visina=1.80;
    $p3->tezina=100;
    $p3->stampaj();
    echo "Pacijent ima BMI: " . $p3->bmi() . "<br>";

    echo "Kritican: ";
    if($p3->kritican2()){
        echo "JESTE";
    }
    else{
        echo "NIJE";
    }
   


?>