<?php
    require_once "zbirka_zadataka.php";
    require_once "udzbenik.php";

    $zz1=new ZbirkaZadataka("Zbirka iz matematike",100,1000,200);
    $u1=new Udzbenik("Knjiga iz matematike",200,1000,5000);

    $zz1->stampa();
    echo "<p>Jedinicna cena je: </p>";
    echo $zz1->jedinicnaCena();
    echo "<hr>";

    $u1->stampa();
    echo "<p>Jedinicna cena je: </p>";
    echo $u1->jedinicnaCena();



    




?>