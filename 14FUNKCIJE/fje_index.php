<?php

    function mojaFunkcija(){
        echo "<p>Moja prva funkcija, ali ne i poslednja!</p>";
    }

    mojaFunkcija();
    mojaFunkcija();
    mojaFunkcija();

    function mojaFunkcija2($tekst){
        echo "<p>F-ja sa parametrom: $tekst</p>"; //zna samo za ovaj parametar, ne moze $text!
        $b="nova lokalna promenljiva";
        global $c; //ovako moze da se pozove neka fja sa strane
        echo "<p>F-ja sa parametrom: $tekst i $b i $c. </p>";
    }
    mojaFunkcija2("1.nacin");

    $a="2.nacin";
    mojaFunkcija2($a); 
    $c="globalna";

    $b="van f-je"; 

    mojaFunkcija2($a);

    function ispisImena($ime,$prezime){
        echo "<p>Ime i prezime je $ime $prezime.</p>";
    }

    ispisImena("Marijana","Tomic");
    $ime="Ana";
    $prezime="Tomic Po";
    ispisImena($ime, $prezime);

    function ispisImena2($ime,$prezime=null){//neobavezan parametar
        echo "<p>Ime je $ime</p>";
        if ($prezime){
            echo "<p>Prezime je $prezime</p>"; 
        }
    }
    ispisImena2("Mika");
    ispisImena2("Mika","Mikic");

    function ispisImena3($ime,$prezime=null,$godine){//neobavezan parametar
        echo "<p>Ime je $ime</p>";
        if ($prezime){
            echo "<p>Prezime je $prezime</p>"; 
        }
        echo "<p>Godine je $godine</p>";

    }
    ispisImena3("Mika",null,28);
    ispisImena3("Mika","Mikic",28);

    ///zbir

    function zbir($a,$b){
        $c=$a+$b;
        //echo "<p>$c</p>"; //bez return ne mogu da koristim c 
        return $c;    
    }
    $pom=zbir(3,8); //uzima vrednost return iz funkcije
    echo "<p>$pom</p>";
    echo zbir(3,8);
    echo "<hr>";

    echo zbir(zbir(3,5),10);
    echo "<hr>";

    $a=zbir(4,9);
    $b=zbir(5,10);
    $c=zbir($a,$b);
    echo $c;
    echo "<hr>";

    echo zbir(zbir(4,9),zbir(5,10));




    zbir(3,8);
    zbir(3,"10");
    //zbir(3,"a"); ne moze

    /*
    *f-ja koja sabira dva broja
    *ovo je bilo korisno zbog ekstenzije koja na hover prikazuje opis
    */
    function zbir2(int $a,int $b){
        $c=$a+$b;
        return $c;
    }
    





   




?>