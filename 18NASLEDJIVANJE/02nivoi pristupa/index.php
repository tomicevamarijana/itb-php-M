<?php
    require_once "Vozilo.php"; //nije neophodan
    require_once "Automobil.php";

    $v=new Vozilo("a","b","c"); //poziva konstruktor
    $v->ispis(); //poziva javnu metodu

    //echo $v->privatnoPolje; //ne moze, van klase se ne pristupa privatnim poljima i  metodama
    //echo $v->zasticenoPolje; //ni ovo ne moze, van klase se ne pristupa protected poljima i  metodama
    echo $v->javnoPolje; //moze, javnom polju se pristupa van klase

    $a=new Automobil("d","e","f",5);
    $a->ispis();
    $a->ispisAuto(); //nece jer privatno polje Vozila je sakriveno za Automobil



?>