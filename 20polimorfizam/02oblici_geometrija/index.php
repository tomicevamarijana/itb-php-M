<?php
    require_once "trougao.php";
    require_once "kvadrat.php";
    require_once "pravougaonik.php";

    $t1=new Trougao(6,7,8);
    echo $t1->obimTrougla() . "<br>";
    echo $t1->povrsinaTrougla() . "<br>";
    echo "<hr>";

    $k1=new Kvadrat(2);
    echo $k1->obimKvadrata() . "<br>";
    echo $k1->povrsinaKvadrata() . "<br>";
    echo "<hr>";

    $p1=new Pravougaonik(4,8);
    echo $p1->obimPravougaonika() . "<br>";
    echo $p1->povrsinaPravougaonika() . "<br>";
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    echo "<p>trougao uz pomoc metode.</p>";

?>