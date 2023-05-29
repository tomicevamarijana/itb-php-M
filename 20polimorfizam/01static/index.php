<?php
    require_once "krug.php";

    $k1=new Krug(5);
    echo "<p>Povrsina kruga poluprecnika " .  $k1->getR() . " je " . $k1->povrsinaKruga() . ".</p>";    
    echo "<p>Obim kruga: poluprecnika " .  $k1->getR() . " je " . $k1->obimKruga() . ".</p>";    

    echo "<hr>";
    $k2=new Krug(1);
    echo "<p>Povrsina kruga poluprecnika " . $k2->getR() . " je " . $k2->povrsinaKruga() . ".</p>"; 
    echo "<p>Obim kruga poluprecnika " .  $k2->getR() . " je " . $k2->obimKruga() . ".</p>";

    $a=new Krug(10);    
    echo $a->obimKruga() . "<br>";
    echo $a->povrsinaKruga() . "<br>";
    //$a->pi=3.14159; //ovako postavimo ako je public static
    

    $b=new Krug(4);
    echo $b->obimKruga() . "<br>";
    echo $b->povrsinaKruga() . "<hr>";

    //
    echo "<p>proba decimale</p>";
    $c=new Krug(10);
    Krug::setPi(3.14159); //ovako ako je private static-ne moze ovako seter
    Krug::setBrojDecimala(30);
    echo $c->obimKruga() . "<br>";
    echo $c->povrsinaKruga() . "<hr>";
    


    echo "<p>proba brojac</p>";
    echo "<p>br krugova do sada je : " . Krug::getBrojKrugova() . "</p>";

    $d=new Krug(4);
    echo $d->obimKruga() . "<br>";
    echo $d->povrsinaKruga() . "<hr>";

    echo "<p>br krugova do sada je : " . Krug::getBrojKrugova() . "</p>";
    $e=new Krug(4);
    echo $e->obimKruga() . "<br>";
    echo $e->povrsinaKruga() . "<hr>";
    echo "<p>br krugova do sada je : " . Krug::getBrojKrugova() . "</p>";
    









?>