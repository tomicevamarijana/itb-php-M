<?php

    require_once "Automobil.php"; //nije greska ako ukljucim i Vozilo.php, require_once ne pravi gresku

    /* //OVO JE VAZILO AKO SU POLJA U OSNOVNOJ KLASI JAVNA
    $v=new Vozilo();
    $v->boja="bela"; //moglo je dok je private polje
    $v->tip="BMW"; 
    echo "<p>$v->boja, $v->tip</p>";
    $v->voziVozilo();    

    $a=new Automobil();
    $a->boja="zuta";
    $a->tip="Peugeot";
    echo "<p>$a->boja, $a->tip</p>";
    $a->voziVozilo();
    $a->voziAutomobil();
    */

    $v=new Vozilo("bela","BMW");
    $v->voziVozilo();

    $a=new Automobil("zuta","Peugeot");
    $a->voziVozilo(); //poziva konstruktor vozila, konstruktor za automobil ne postoji jos
    $a->voziAutomobil();
    






?>