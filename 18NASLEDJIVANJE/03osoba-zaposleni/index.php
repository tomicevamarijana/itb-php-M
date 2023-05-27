<?php
    require_once "zaposleni.php";

    $o=new Osoba("Mika","Mikic",2000);
    $o->ispisOsoba();

    $z1=new Zaposleni("Pera","Peric",1990,1000,"masinovodja");
    $z1->ispisOsoba();
    $z1->ispisZaposleni();

    $z2=new Zaposleni("Mika","Mikic",1995,1500,"ekonomista");
    $z3=new Zaposleni("Zika","Zikic",1960,800,"ekonomista");
    $z4=new Zaposleni("Petar","Petrovic",1980,2000,"programer");

    $zaposleni=[$z1,$z2,$z3,$z4];
    //prosek plate
    echo "<b>Napisati funkciju prosekPlate kojoj se prosleđuje niz zaposlenih,
    a ona vraća prosečnu platu svih zaposlenih iz niza.</b>";
    function prosekPlate($zaposleni){
        $s=0;
        for($i=0;$i<count($zaposleni);$i++){
            $s=$s+$zaposleni[$i]->getPlata();
        }
        return $s/count($zaposleni);
        /*
        if (count($zaposleni)>0){
            return $s/count($zaposleni);
        }
        else{
            return 0;
        }*/
    }
    echo "<p> Prosecna plata zaposlenih je " . prosekPlate($zaposleni) . ".</p>";

    //natprosecna plata
    echo "<b>Napisati funkciju natprosecnaPlata kojoj se prosleđuje neki 
    zaposleni, a koja vraća true ukoliko zaposleni ima natprosečno 
    visoku platu, a u suprotnom vraća false.</b>";
    function natprosecnaPlata($zaposleni,$z){
        $prosek=prosekPlate($zaposleni);
        $zap=$z->getPlata();
        if($zap>$prosek){
            return true;
        }
        else{
            return false;
        }
    }
    echo "<p>Zaposleni ima natprosecnu platu: ";
    if(natprosecnaPlata($zaposleni,$z1)){
        echo " DA </p>";
    }
    else{
        echo " NE </p>";
    }







?>