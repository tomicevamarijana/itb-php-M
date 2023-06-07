<?php
    require_once "AutoKredit.php";
    require_once "StambeniKredit.php";

    $ak1=new AutoKredit("ak1",30000,0.05,6,0.02);
    $ak1->ispis();
    echo "<br>";
    echo $ak1->obracunMesRate();

    $sk1=new StambeniKredit("sk1",30000,0.05,5);
    $sk1->ispis();
    echo "<br>";
    echo $sk1->obracunMesRate();
    echo "<hr>";

    $niz=[$ak1,$sk1];
    foreach($niz as $kredit){
        $kredit->ispis();
    }

    echo "<hr>";
    foreach($niz as $kredit){
        echo $kredit->obracunMesRate() . "<br>";
    }

?>