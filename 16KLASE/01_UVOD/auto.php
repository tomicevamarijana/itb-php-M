<?php
    class Auto{
        //polja,atributi
        var $marka;
        var $boja;
        var $imaKrov;
        //metode,funkcije
        function sviraj(){
            echo "<p>Beep! Beep!</p>";
        }
        function ispis(){
            echo "<p>Automobil marke " . $this->marka . " boje: " . $this->boja;
            if($this->imaKrov==true){
                echo " Ima krov";
            }
            else{
                echo " Nema krov ";
            }
            echo "</p>";
        }
        //$this, u smislu onaj objekat nad kojim se poziva ta metoda
        //this je objekat koji referencira tu metodu
        
    }
    //samo ono sto je definisano u klasi, to postoji za sve objekte!!!

    //kreiranje objakata klase Auto, tj.promenljiva tipa Auto
    $a1=new Auto();
    var_dump($a1);
    $a1->marka="Opel";
    $a1->boja="plava";
    $a1->imaKrov=false;
    echo"<hr>";
    var_dump($a1);
    $a1->kubikaza=1600; //php dozvoljava dodavanje novog polja
    echo"<hr>";
    var_dump($a1);

    $a2=new Auto();
    $a2->marka="Peugeot";
    $a2->boja="Bela";
    $a2->imaKrov=false;
    echo"<hr>";
    var_dump($a2);

    $a3=new Auto();
    $a3->marka="Audi";
    $a3->boja="siva";
    $a3->imaKrov=true;
    echo "<p> Auto marke " . $a3->marka . " boje " . $a3->boja . " ima krov: " . $a3->imaKrov . "</p>";
    
    $a1->sviraj();
    $a2->sviraj();
    $a3->sviraj();

    $a1->ispis();
    $a2->ispis();
    $a3->ispis();


?>