<?php
    require_once "trougao.php";
    require_once "kvadrat.php";
    require_once "pravougaonik.php";
    require_once "romb.php";
/*
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
    echo "<p><b>Trougao uz pomoc metode.</b></p>";
    */
    echo "<p>Trougao</p>";
    $t=new Trougao(3,4,5);
    //echo "<p>Obim trougla " .  $t->obimTrougla() . " Povrsina je " . $t->povrsinaTrougla() . ".</p>";
    
    echo "<p>Kvadrat</p>";
    $k=new Kvadrat(3);
    //echo "<p>Obim kvadrata " .  $k->obimKvadrata() . " Povrsina je " . $k->povrsinaKvadrata() . ".</p>";
    
    echo "<p>Pravougaonik</p>";
    $p=new Pravougaonik(5,9);
    //echo "<p>Obim pravougaonika " .  $p->obimPravougaonika() . " Povrsina je " . $p->povrsinaPravougaonika() . ".</p>";

    $r=new Romb(6,15);

    $oblici=[$t,$p,$k,$r];
    foreach($oblici as $oblik){
        //echo "<p>Obim oblika " . get_class($oblik) . "," .  $oblik->obim() . " Povrsina je " . $oblik->povrsina() . ".</p>";
        $oblik->ispis();
    }
    //ideja da postoji samo jedna motoda obim, koja ce da radi razlicito za razlicite objekte
    //imamo osnovnu klasu, iz nje izvodimo klase trougao, kvadrat,..





?>